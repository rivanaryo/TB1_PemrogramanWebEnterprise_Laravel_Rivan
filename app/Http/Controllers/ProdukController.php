<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Http\Requests\StoreProdukRequest;
use App\Http\Requests\UpdateProdukRequest;
use illuminate\http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function ViewProduk()
    {
        $produk = Produk::all();
        return view('produk',['produk'=>$produk]);
    }

    public function CreateProduk(Request $request){


        $request->validate([
            'kode_produk'=>'required|integer',
            'nama_produk' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'harga' => 'required|numeric',
            'jumlah_produk' => 'required|integer',

        ]);

        Produk::create([
            'kode_produk'=>$request->input('kode_produk'),
            'nama_produk'=>$request->input('nama_produk'),
            'deskripsi'=>$request->input('deskripsi'),
            'harga'=>$request->input('harga'),
            'jumlah_produk'=>$request->input('jumlah_produk')

        ]);

        return redirect('/produk')->with('success', 'Produk berhasil dibuat!');
    }


    public function ViewAddProduk(){
        return view('addproduk');
    }

    public function DeleteProduk($kode_produk){
        $produk = Produk::findorfail($kode_produk);
        $produk->delete();

        return redirect('/produk')->with('success', 'Produk berhasil dihapus!');
    }

    public function edit($kode_produk){
        $produk = Produk::findOrFail($kode_produk); // Mencari produk berdasarkan ID
        return view('editproduk', compact('produk')); // Mengembalikan view dengan data produk
    }


    // mengubah data produk
    public function update(Request $request, $kode_produk)
{
    // Validasi data input
    $request->validate([
        'nama_produk' => 'required|string|max:255',
        'deskripsi' => 'required|string',
        'harga' => 'required|numeric',
        'jumlah_produk' => 'required|integer',
    ]);

    // Cari produk berdasarkan ID
    $produk = Produk::findOrFail($kode_produk);

    // Update data produk
    $produk->update([
        'nama_produk' => $request->input('nama_produk'),
        'deskripsi' => $request->input('deskripsi'),
        'harga' => $request->input('harga'),
        'jumlah_produk' => $request->input('jumlah_produk'),
    ]);

    // Redirect kembali dengan pesan sukses
    return redirect('/produk')->with('success', 'Produk berhasil diperbarui!');
}



}


