<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\Pelanggan;
use App\Models\Pemesanan;
use Illuminate\Http\Request;

class pemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // menampilkan data pemesanan
        $nomor = 1;
        $pemesanan = Pemesanan::all();
        return view('Pemesanan.index',compact('pemesanan','nomor'));

    }

    /**
     * Show the form for creating a new resource.
     */
    // menampilkan form tambah
    public function create()
    {
        $pelanggan = Pelanggan::all();
        $karyawan = Karyawan::all();
        $pemesanan = new \App\Models\Pemesanan(); // objek kosong
        return view('Pemesanan.form', compact('pemesanan','pelanggan','karyawan'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // proses tambah
        $pemesanan = new Pemesanan;
        $pemesanan->kode_pemesanan = $request->kode_pemesanan;
        $pemesanan->id_pelanggan = $request->id_pelanggan;
        $pemesanan->id_karyawan = $request->id_karyawan;
        $pemesanan->tgl_pesan = $request->tgl_pesan;
        $pemesanan->produk = $request->produk;
        $pemesanan->harga = $request->harga;
        $pemesanan->jumlah = $request->jumlah;
        $pemesanan->ukuran = $request->ukuran;
        $pemesanan->tgl_selesai = $request->tgl_selesai;
        $pemesanan->save();

        return redirect('/Pemesanan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // menampilkan data detail
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // form edit
        $pemesanan = Pemesanan::find($id);
        $pelanggan = Pelanggan::all();
        $karyawan = Karyawan::all();
        return view('Pemesanan.edit',compact('pemesanan','pelanggan','karyawan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // proses edit
        $pemesanan = Pemesanan::find($id);
        $pemesanan->kode_pemesanan = $request->kode_pemesanan;
        $pemesanan->id_pelanggan = $request->id_pelanggan;
        $pemesanan->id_karyawan = $request->id_karyawan;
        $pemesanan->tgl_pesan = $request->tgl_pesan;
        $pemesanan->produk = $request->produk;
        $pemesanan->harga = $request->harga;
        $pemesanan->jumlah = $request->jumlah;
        $pemesanan->ukuran = $request->ukuran;
        $pemesanan->tgl_selesai = $request->tgl_selesai;
        $pemesanan->save();


        return redirect('/Pemesanan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // proses hapus
        $pemesanan = Pemesanan::find($id);
        $pemesanan->delete();

        return redirect('/Pemesanan');
    }
}
