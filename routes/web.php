<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//supplier controller
Route::get('/supplier',[App\Http\Controllers\SupplierController::class, 'index'])->name('supplier');
Route::get('/create_supplier',[App\Http\Controllers\SupplierController::class, 'create'])->name('create_supplier');
Route::get('/simpan_supplier',[App\Http\Controllers\SupplierController::class, 'store'])->name('simpan_supplier');
Route::get('/edit_supplier/{id}',[App\Http\Controllers\SupplierController::class, 'edit'])->name('edit_supplier');
Route::get('/update_supplier/{id}',[App\Http\Controllers\SupplierController::class, 'update'])->name('update_supplier');
Route::get('/delete_supplier/{id}',[App\Http\Controllers\SupplierController::class, 'destroy'])->name('delete_supplier');
//produk controller
Route::get('/produk',[App\Http\Controllers\ProdukController::class, 'index'])->name('produk');
Route::get('/create_produk',[App\Http\Controllers\ProdukController::class, 'create'])->name('create_produk');
Route::get('/simpan_produk',[App\Http\Controllers\ProdukController::class, 'store'])->name('simpan_produk');
Route::get('/edit_produk/{id}',[App\Http\Controllers\ProdukController::class, 'edit'])->name('edit_produk');
Route::get('/update_produk/{id}',[App\Http\Controllers\ProdukController::class, 'update'])->name('update_produk');
Route::get('/delete_produk/{id}',[App\Http\Controllers\ProdukController::class, 'destroy'])->name('delete_produk');
//kategori controller
Route::get('/kategori',[App\Http\Controllers\KategoriController::class, 'index'])->name('kategori');
Route::get('/create_kategori',[App\Http\Controllers\KategoriController::class, 'create'])->name('create_kategori');
Route::get('/simpan_kategori',[App\Http\Controllers\KategoriController::class, 'store'])->name('simpan_kategori');
Route::get('/edit_kategori/{id}',[App\Http\Controllers\KategoriController::class, 'edit'])->name('edit_kategori');
Route::get('/update_kategori/{id}',[App\Http\Controllers\KategoriController::class, 'update'])->name('update_kategori');
Route::get('/delete_kategori/{id}',[App\Http\Controllers\KategoriController::class, 'destroy'])->name('delete_kategori');
//kostumer controller
Route::get('/kostumer',[App\Http\Controllers\KostumerController::class, 'index'])->name('kostumer');
Route::get('/create_kostumer',[App\Http\Controllers\KostumerController::class, 'create'])->name('create_kostumer');
Route::get('/simpan_kostumer',[App\Http\Controllers\KostumerController::class, 'store'])->name('simpan_kostumer');
Route::get('/edit_kostumer/{id}',[App\Http\Controllers\KostumerController::class, 'edit'])->name('edit_kostumer');
Route::get('/update_kostumer/{id}',[App\Http\Controllers\KostumerController::class, 'update'])->name('update_kostumer');
Route::get('/delete_kostumer/{id}',[App\Http\Controllers\KostumerController::class, 'destroy'])->name('delete_kostumer');
//pesanan controller
Route::get('/pesanan',[App\Http\Controllers\PesananController::class, 'index'])->name('pesanan');
Route::get('/create_pesanan',[App\Http\Controllers\PesananController::class, 'create'])->name('create_pesanan');
Route::get('/simpan_pesanan',[App\Http\Controllers\PesananController::class, 'store'])->name('simpan_pesanan');
Route::get('/edit_pesanan/{id}',[App\Http\Controllers\PesananController::class, 'edit'])->name('edit_pesanan');
Route::get('/update_pesanan/{id}',[App\Http\Controllers\PesananController::class, 'update'])->name('update_pesanan');
Route::get('/delete_pesanan/{id}',[App\Http\Controllers\PesananController::class, 'destroy'])->name('delete_pesanan');
//cetak produk
Route::get('/cetak_produk',[App\Http\Controllers\ProdukController::class, 'cetakProduk'])->name('cetak_produk');
