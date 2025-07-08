<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class karyawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // menampilkan data pemesanan
        $nomor = 1;
        $karyawan = Karyawan::all();
        return view('Karyawan.index',compact('karyawan','nomor'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         // menampilkan form tambah
        return view('Karyawan.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // proses tambah
        $karyawan = new Karyawan;
        $karyawan->id_karyawan = $request->id_karyawan;
        $karyawan->nm_karyawan = $request->nm_karyawan;
        $karyawan->alamat_karyawan = $request->alamat_karyawan;
        $karyawan->hp_karyawan = $request->hp_karyawan;
        $karyawan->save();

        return redirect('/Karyawan');
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
        $karyawan = Karyawan::find($id);
        return view('Karyawan.edit',compact('karyawan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // proses edit
        $karyawan = Karyawan::find($id);
        $karyawan->id_karyawan = $request->id_karyawan;
        $karyawan->nm_karyawan = $request->nm_karyawan;
        $karyawan->alamat_karyawan = $request->alamat_karyawan;
        $karyawan->hp_karyawan = $request->hp_karyawan;
        $karyawan->save();

        return redirect('/Karyawan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // proses hapus
        $karyawan = Karyawan::find($id);
        $karyawan->delete();

        return redirect('/Karyawan');
    }
}
