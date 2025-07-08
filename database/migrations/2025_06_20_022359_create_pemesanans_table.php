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
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->id();
            $table->integer('id_pemesanan')->unique();
            $table->integer('id_pelanggan');
            $table->date('tgl_pesan');
            $table->string('produk');
            $table->integer('harga');
            $table->integer('jumlah');
            $table->enum('ukuran',['kecil','sedang','besar']);
            $table->integer('id_karyawan');
            $table->date('tgl_selesai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanans');
    }
};
