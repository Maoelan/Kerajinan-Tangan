<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;
class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //return view('kerajinan.pesanan');
        $dtPesanan = Pesanan::all();
        return view('Kerajinan.pesanan',compact('dtPesanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('kerajinan.Create_pesanan');
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
        Pesanan::create([
            'id_pesanan' => $request -> id_pesanan,
            'id_kostumeri' => $request -> id_kostumeri,
            'total_bayar' => $request -> total_bayar,
            ]);
            
            return redirect('pesanan');
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
        $pes = Pesanan::find($id);
        return view('Kerajinan.Edit_pesanan',compact('pes'));
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
        $pes = Pesanan::find($id);
        $pes->update($request->all());
        return redirect('pesanan')->with('toast_success', 'Data Berhasil Update');
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
        $pes = Pesanan::find($id);
        $pes->delete();
        return back()->with('info', 'Data Berhasil Delete');
    }
}
