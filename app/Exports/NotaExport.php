<?php

namespace App\Exports;

use App\Models\Nota;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Events\AfterSheet;

class NotaExport implements FromCollection, WithHeadings, ShouldAutoSize, WithEvents, WithColumnFormatting
{
    protected $notas;
    protected $totalHarga;

    /**
     * @param \Illuminate\Support\Collection|null $notas
     */
    public function __construct($notas = null)
    {
        $this->notas = $notas ?? Nota::all();
        $this->totalHarga = $this->notas->sum('total_harga');
    }

    public function collection(): Collection
    {
        $rows = $this->notas->values()->map(function (Nota $nota, int $index): array {
            return [
                'No'            => $index + 1,
                'Tanggal Masuk' => $nota->tanggal_masuk,
                'Nama Barang'   => $nota->nama_barang,
                'Nama Vendor'   => $nota->nama_vendor,
                'Quantity'      => $nota->quantity,
                'Harga'         => $nota->harga,
                'Total Harga'   => $nota->total_harga,
            ];
        });

        // ➕ Tambahkan baris kosong + baris total
        $rows->push([
            'No'            => '',
            'Tanggal Masuk' => '',
            'Nama Barang'   => '',
            'Nama Vendor'   => '',
            'Quantity'      => '',
            'Harga'         => 'TOTAL',
            'Total Harga'   => $this->totalHarga,
        ]);

        return $rows;
    }

    public function headings(): array
    {
        return [
            'No',
            'Tanggal Masuk',
            'Nama Barang',
            'Nama Vendor',
            'Quantity',
            'Harga',
            'Total Harga',
        ];
    }

    public function columnFormats(): array
    {
        return [
            'F' => '"Rp" #,##0.00_-',
            'G' => '"Rp" #,##0.00_-',
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $sheet = $event->sheet->getDelegate();

                $headerRange = 'A1:G1';
                $lastRow = $sheet->getHighestRow();
                $dataRange = 'A2:G' . $lastRow;

                // 🎨 Header style
                $sheet->getStyle($headerRange)->applyFromArray([
                    'font' => [
                        'bold' => true,
                        'size' => 12,
                        'color' => ['rgb' => 'FFFFFF'],
                    ],
                    'alignment' => [
                        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                        'vertical'   => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
                    ],
                    'fill' => [
                        'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                        'startColor' => ['rgb' => '4682B4'],
                    ],
                    'borders' => [
                        'allBorders' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                            'color' => ['rgb' => 'CCCCCC'],
                        ],
                    ],
                ]);

                // 📑 Body content styling
                if ($lastRow > 1) {
                    $sheet->getStyle($dataRange)->applyFromArray([
                        'alignment' => [
                            'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT,
                            'vertical'   => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
                            'wrapText'   => true,
                        ],
                        'borders' => [
                            'allBorders' => [
                                'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                                'color' => ['rgb' => 'DDDDDD'],
                            ],
                        ],
                    ]);

                    // Row height
                    for ($row = 2; $row <= $lastRow; $row++) {
                        $sheet->getRowDimension($row)->setRowHeight(22);
                    }
                }

                // 🔥 Bold untuk baris total (kolom F & G)
                $sheet->getStyle("F{$lastRow}:G{$lastRow}")->applyFromArray([
                    'font' => ['bold' => true],
                    'alignment' => [
                        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_RIGHT,
                    ],
                ]);
            },
        ];
    }
}
