<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tabungan;
use App\Kategori;
use auth;

class TabunganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    public function index()
    {
        $kategori = Kategori::where('type','tabungan')->get();
        return view('form-tabungan',['kategori' => $kategori]);
        //return view('form-tabungan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form-tabungan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tabungan = new Tabungan();
        $tabungan->nama = $request->get('nama_tabungan');
        $tabungan->target = $request->get('target_tabungan');
        $tabungan->kategoris_id = $request->get('kategori_tabungan');
        $tabungan->progres = 0;
        $tabungan->tanggal = $request->get('deadline_tabungan');
        $tabungan->users_id = Auth::user()->id;

        $tabungan->save();
        return redirect('/detailtabungan');
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
        $tabungan = Tabungan::find($id);
        $kategori = Kategori::where('type', "tabungan");
        return view('form-edit-tabungan',compact('tabungan','kategori'));
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
        $tabungan = Tabungan::find($id);
        $tabungan->nama = $request->get('nama_tabungan');
        $tabungan->target = $request->get('target_tabungan');
        $tabungan->kategoris_id = $request->get('kategori_tabungan');
        $tabungan->progres = 0;
        $tabungan->tanggal = $request->get('deadline_tabungan');
        $tabungan->users_id = Auth::user()->id;

        $tabungan->save();
        return redirect('/detailtabungan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tabungan= Tabungan::find($id);
        $tabungan->delete();

        return redirect('/detailtabungan');
    }

    public function progress($id)
    {
        $tabungan = Tabungan::find($id);
        return view('form-updatetabungan',['tabungan' => $tabungan]);
    }

    public function updateprogress(Request $request, $id)
    {
        $tabungan = Tabungan::find($id);
        return view('form-updatetabungan',['tabungan' => $tabungan]);
    }
}
