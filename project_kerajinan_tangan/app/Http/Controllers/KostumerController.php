<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kostumer;
class KostumerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //return view('kerajinan.kostumer');
        $dtKostumer = Kostumer::all();
        return view('Kerajinan.kostumer',compact('dtKostumer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('kerajinan.Create_kostumer');
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
          //    dd($request->all());
        Kostumer::create([
            'id_kostumer' => $request -> id_kostumer,
            'nama_lengkap' => $request -> nama_lengkap,
            'alamat_kostumer' => $request -> alamat_kostumer,
            'telpon' => $request -> telpon,
            ]);
            
            return redirect('kostumer');
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
        $kos = Kostumer::find($id);
        return view('Kerajinan.Edit_kostumer',compact('kos'));
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
        $kos = Kostumer::find($id);
        $kos->update($request->all());
        return redirect('kostumer')->with('toast_success', 'Data Berhasil Update');
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
        $kos = Kostumer::find($id);
        $kos->delete();
        return back()->with('info', 'Data Berhasil Delete');
    }
}
