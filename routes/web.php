<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\karyawanController;
use App\Http\Controllers\pelangganController;
use App\Http\Controllers\pemesananController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layouts.utama');
})->middleware('auth');

// Route::get('/', function () {
//     return view('layouts.template');
// })->middleware('auth');

// Route::get('Pemesanan', function () {
//     return view('pemesanan.index');
// })->middleware('auth');

// Route::get('Pelanggan', function () {
//     return view('pelanggan.index');
// })->middleware('auth');

// Route::get('Karyawan', function () {
//     return view('karyawan.index');
// })->middleware('auth');

Auth::routes();

// Logout
Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/login');
})->name('logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Data Pemesanan
Route::get('/Pemesanan', [pemesananController::class, 'index']);
Route::get('/Pemesanan/tambah', [pemesananController::class, 'create']);
Route::post('/Pemesanan', [\App\Http\Controllers\pemesananController::class, 'store']);
// Route::post('/Pemesanan', [pemesananController::class, 'store']);
Route::get('/Pemesanan/edit/{id}', [pemesananController::class, 'edit']);
Route::put('/Pemesanan/{id}', [pemesananController::class, 'update']);
Route::delete('/Pemesanan/{id}', [pemesananController::class, 'destroy']);

// Data Pelanggan
Route::get('/Pelanggan', [pelangganController::class, 'index']);
Route::get('/Pelanggan/tambah', [pelangganController::class, 'create']);
Route::post('/Pelanggan', [\App\Http\Controllers\pelangganController::class, 'store']);
// Route::post('/Pelanggan', [pelangganController::class, 'store']);
Route::get('/Pelanggan/edit/{id}', [pelangganController::class, 'edit']);
Route::put('/Pelanggan/{id}', [pelangganController::class, 'update']);
Route::delete('/Pelanggan/{id}', [pelangganController::class, 'destroy']);

// Data Karyawan
Route::get('/Karyawan', [karyawanController::class, 'index']);
Route::get('/Karyawan/tambah', [karyawanController::class, 'create']);
Route::post('/Karyawan', [\App\Http\Controllers\karyawanController::class, 'store']);
// Route::post('/Karyawan', [karyawanController::class, 'store']);
Route::get('/Karyawan/edit/{id}', [karyawanController::class, 'edit']);
Route::put('/Karyawan/{id}', [karyawanController::class, 'update']);
Route::delete('/Karyawan/{id}', [karyawanController::class, 'destroy']);

