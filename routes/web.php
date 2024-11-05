<?php

use App\Http\Controllers\contohController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/contoh',function(){
//     return view('contoh');
// });

Route::get('/webPenjualan',[contohController::class,'TampilContoh']);
Route::get('/produk',[ProdukController::class,'ViewProduk']);
Route::post('/produk/add',[ProdukController::class,'CreateProduk']);
Route::get('/produk/add',[ProdukController::class,'ViewAddProduk']);
Route::delete('/produk/{kode_produk}',[ProdukController::class,'DeleteProduk'])->name('produk.DeleteProduk');
Route::get('/produk/{kode_produk}/edit', [ProdukController::class,'edit'])->name('produk.edit');
Route::put('/produk/{kode_produk}', [ProdukController::class, 'update'])->name('produk.update');

