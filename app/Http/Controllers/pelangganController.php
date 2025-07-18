<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class pelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // menampilkan data pemesanan
        $nomor = 1;
        $pelanggan = Pelanggan::all();
        return view('Pelanggan.index',compact('pelanggan','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // menampilkan form tambah
        return view('Pelanggan.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // proses tambah
        $pelanggan = new Pelanggan;
        $pelanggan->id_pelanggan = $request->id_pelanggan;
        $pelanggan->nm_pelanggan = $request->nm_pelanggan;
        $pelanggan->hp_pelanggan = $request->hp_pelanggan;
        $pelanggan->save();

        return redirect('/Pelanggan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // form edit
        $pelanggan = Pelanggan::find($id);
        return view('Pelanggan.edit',compact('pelanggan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // proses edit
        $pelanggan = Pelanggan::find($id);
        $pelanggan->id_pelanggan = $request->id_pelanggan;
        $pelanggan->nm_pelanggan = $request->nm_pelanggan;
        $pelanggan->hp_pelanggan = $request->hp_pelanggan;
        $pelanggan->save();

        return redirect('/Pelanggan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // proses hapus
        $pelanggan = Pelanggan::find($id);
        $pelanggan->delete();

        return redirect('/Pelanggan');
    }
}
