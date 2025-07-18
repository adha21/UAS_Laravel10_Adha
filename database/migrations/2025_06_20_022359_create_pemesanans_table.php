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
            $table->id(); // primary key
            $table->string('kode_pemesanan')->unique(); 
            $table->unsignedBigInteger('id_pelanggan');
            $table->unsignedBigInteger('id_karyawan');
            $table->date('tgl_pesan');
            $table->string('produk');
            $table->integer('harga');
            $table->integer('jumlah');
            $table->enum('ukuran', ['kecil', 'sedang', 'besar']);
            $table->date('tgl_selesai');
            $table->timestamps();

            // foreign key constraint
            $table->foreign('id_pelanggan')->references('id')->on('pelanggans')->onDelete('cascade');
            $table->foreign('id_karyawan')->references('id')->on('karyawans')->onDelete('cascade');
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
