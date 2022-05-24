<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\KategoriProdukController;
use App\Http\Controllers\MakananController;
use App\Http\Controllers\MinumanController;
use App\Http\Controllers\BarangController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//public function edit(mahasiswa $mahasiswa)
    {
        //$data = mahasiswa::find($mahasiswa);

      // return view('tambah', compact('data'));
    }

Route::get('/', function () {
    return view('welcome');
});
//admin
Route::resource('admin', AdminController::class);
Route::put('admin/ganti/{id}', [AdminController::class, 'ganti'])->name('admin.ganti');

//pelanggan
Route::resource('pelanggan', PelangganController::class);
Route::put('pelanggan/ganti/{id}', [PelangganController::class, 'ganti'])->name('pelanggan.ganti');

//kategori produk
Route::resource('kategoriproduk', KategoriProdukController::class);
Route::put('kategoriproduk/ganti/{id}', [KategoriProdukController::class, 'ganti'])->name('kategoriproduk.ganti');

//barang
Route::resource('barang', BarangController::class);
Route::put('barang/ganti/{id}', [BarangController::class, 'ganti'])->name('barang.ganti');

//makanan
Route::resource('makanan', MakananController::class);
Route::put('makanan/ganti/{id}', [MakananController::class, 'ganti'])->name('makanan.ganti');

//minuman
Route::resource('minuman', MinumanController::class);
Route::put('minuman/ganti/{id}', [MinumanController::class, 'ganti'])->name('minuman.ganti');