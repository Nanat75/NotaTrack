<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use Illuminate\Http\Request;
use App\Exports\NotaExport;
use Maatwebsite\Excel\Facades\Excel;

class NotaController extends Controller
{
public function index(Request $request) 
{
    $months = [
        1 => 'Januari', 2 => 'Februari', 3 => 'Maret',
        4 => 'April', 5 => 'Mei', 6 => 'Juni',
        7 => 'Juli', 8 => 'Agustus', 9 => 'September',
        10 => 'Oktober', 11 => 'November', 12 => 'Desember'
    ];

    $years = Nota::selectRaw('YEAR(tanggal_masuk) as year')
                 ->distinct()
                 ->orderBy('year', 'desc')
                 ->pluck('year');

    $query = Nota::query();
    $hasFilter = false;

    if ($request->year) {
        $query->whereYear('tanggal_masuk', $request->year);
        $hasFilter = true;
    }

    if ($request->month) {
        $query->whereMonth('tanggal_masuk', $request->month);
        $hasFilter = true;
    }

    // 👉 Clone query before pagination (so stats aren't affected by paginate)
    $statsQuery = clone $query;

    $perPage = $request->input('per_page', 10); // default 10
    $notas = $hasFilter 
        ? $query->paginate($perPage)->appends($request->all()) 
        : collect();

    // 📊 Dashboard Stats (calculated from full filtered dataset)
    $stats = [
        'total_notas'     => $statsQuery->count(),
        'total_spending'  => $statsQuery->sum('total_harga'), // adjust column name if needed
        'avg_spending'    => $statsQuery->avg('total_harga'),
        'max_spending'    => $statsQuery->max('total_harga'),
        'min_spending'    => $statsQuery->min('total_harga'),
    ];

    $monthlySpending = Nota::selectRaw('MONTH(tanggal_masuk) as month, SUM(total_harga) as total')
    ->when($request->year, fn($q) => $q->whereYear('tanggal_masuk', $request->year))
    ->groupBy('month')
    ->orderBy('month')
    ->pluck('total', 'month')
    ->toArray();


    return view('notas.index', compact('notas', 'months', 'years', 'hasFilter', 'stats', 'monthlySpending'));
}


    public function create()
    {
        return view('notas.create');
    }

 public function store(Request $request)
{
    $request->validate([
        'tanggal_masuk' => 'required|date',
        'nama_vendor'   => 'required|string',
        'nama_barang'   => 'required|array|min:1',
        'nama_barang.*' => 'required|string|max:255',
        'quantity'      => 'required|array|min:1',
        'quantity.*'    => 'required|integer|min:1',
        'harga'         => 'required|array|min:1',
        'harga.*'       => 'required|numeric|min:0',
    ]);

    // Loop semua barang yang diinput
    foreach ($request->nama_barang as $index => $barang) {
        $qty   = $request->quantity[$index];
        $harga = $request->harga[$index];
        $total = $qty * $harga;

        Nota::create([
            'tanggal_masuk' => $request->tanggal_masuk,
            'nama_vendor'   => $request->nama_vendor,
            'nama_barang'   => $barang,
            'quantity'      => $qty,
            'harga'         => $harga,
            'total_harga'   => $total,
        ]);
    }

    return redirect()->route('notas.index')
        ->with('success', 'Nota berhasil ditambahkan dengan banyak barang!');
}


public function destroy($id)
{
    $nota = Nota::findOrFail($id);
    $nota->delete();

    return redirect()->route('notas.index') 
        ->with('success', 'Nota berhasil dihapus.');
}


public function edit($id)
{
    $nota = Nota::findOrFail($id);
     return response()->json($nota);
}

public function update(Request $request, $id)
{
    $nota = Nota::findOrFail($id);

    $request->validate([
        'tanggal_masuk' => 'required|date',
        'nama_barang'   => 'required|string|max:255',
        'nama_vendor'   => 'required|string|max:255',
        'quantity'      => 'required|integer|min:1',
        'harga'         => 'required|numeric|min:0',
    ]);

    $nota->update([
        'tanggal_masuk' => $request->tanggal_masuk,
        'nama_barang'   => $request->nama_barang,
        'nama_vendor'   => $request->nama_vendor,
        'quantity'      => $request->quantity,
        'harga'         => $request->harga,
        'total_harga'   => $request->quantity * $request->harga,
    ]);

    return redirect()->back()->with('success', 'Nota berhasil diperbarui.');

}

public function exportExcel(Request $request)
{
    $query = Nota::query();

    $months = [
        1 => 'januari', 2 => 'februari', 3 => 'maret',
        4 => 'april', 5 => 'mei', 6 => 'juni',
        7 => 'juli', 8 => 'agustus', 9 => 'september',
        10 => 'oktober', 11 => 'november', 12 => 'desember'
    ];

    $fileName = 'notas'; // default

    // Case 1: Per Year
    if ($request->range === 'year' && $request->year) {
        $query->whereYear('tanggal_masuk', $request->year);
        $fileName = "notas.{$request->year}";
    }

    // Case 2: Per Month (YYYY-MM)
    elseif ($request->range === 'month' && $request->month) {
        [$year, $month] = explode('-', $request->month);
        $query->whereYear('tanggal_masuk', $year)
              ->whereMonth('tanggal_masuk', $month);

        $namaBulan = $months[(int)$month] ?? $month;
        $fileName = "notas.{$namaBulan}.{$year}";
    }

    // Case 3: Per Week (expects ?week=YYYY-Wxx)
    elseif ($request->range === 'week' && $request->week) {
        [$year, $week] = explode('-W', $request->week);

        $query->whereYear('tanggal_masuk', $year)
              ->whereRaw('WEEKOFYEAR(tanggal_masuk) = ?', [$week]);

        $fileName = "notas.minggu{$week}.{$year}";
    }

    $notas = $query->get();

    return Excel::download(new NotaExport($notas), "{$fileName}.xlsx");
}

public function exportSelected(Request $request)
{
    $ids = json_decode($request->input('ids', '[]'), true);

    if(empty($ids)) {
        return back()->with('error', 'Tidak ada nota dipilih untuk export');
    }

    $notas = Nota::whereIn('id', $ids)->get();

    return Excel::download(new NotaExport($notas), 'selected_notas.xlsx');
}



}
