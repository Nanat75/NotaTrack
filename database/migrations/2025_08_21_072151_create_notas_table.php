<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
    Schema::create('notas', function (Blueprint $table) {
    $table->id();
    $table->date('tanggal_masuk');
    $table->string('nama_barang');
    $table->string('nama_vendor');
    $table->integer('quantity');
    $table->decimal('harga', 15, 2);
    $table->decimal('total_harga', 15, 2);
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notas');
    }
};
