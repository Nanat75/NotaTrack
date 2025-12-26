<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $fillable = [
        'tanggal_masuk',
        'nama_barang',
        'nama_vendor',
        'quantity',
        'harga',
        'total_harga',
    ];
}
