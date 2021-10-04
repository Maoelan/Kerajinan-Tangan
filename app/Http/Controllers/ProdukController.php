<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Idkategori;
class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dtProduk = Produk::with('idkategori')->get();
        return view('Kerajinan.produk',compact('dtProduk'));
    }

    public function cetakProduk()
    {
        //
        $dtCetakProduk = Produk::with('idkategori')->get();
        return view('Kerajinan.cetak_produk',compact('dtCetakProduk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $kat = Idkategori::all();
        return view('Kerajinan.Create_produk',compact('kat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //dd($request->all());
        Produk::create([
            'id_produk' => $request -> id_produk,
            'kategori_id' => $request -> kategori_id,
            /*'id_kategori' => $request -> id_kategori,*/
            'nama_produk' => $request -> nama_produk,
            'deskripsi' => $request -> deskripsi,
            'harga' => $request -> harga,
            ]);
            
            return redirect('produk');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $kat = Idkategori::all();
        $prod = Produk::find($id);
        return view('Kerajinan.Edit_produk',compact('prod','kat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $prod = Produk::find($id);
        $prod->update($request->all());
        return redirect('produk')->with('toast_success', 'Data Berhasil Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $prod = Produk::find($id);
        $prod->delete();
        return back()->with('info', 'Data Berhasil Delete');
    }
}
