<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemasukan;
use App\Pengeluaran;
use App\Tabungan;
use App\Kategori;
use auth;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pemasukan()
    {
        $dataPemasukan = Pemasukan::where('users_id', Auth::user()->id)->get();
        $kategori = Kategori::where('type', "pemasukan")->get();
        return view('form-detail-pemasukan' ,compact('dataPemasukan', 'kategori'));
    }
    public function pengeluaran()
    {
        $dataPengeluaran = Pengeluaran::where('users_id', Auth::user()->id)->get();
        $kategori = Kategori::where('type', "pengeluaran")->get();
        return view('form-detail-pengeluaran' ,compact('dataPengeluaran', 'kategori'));
    }
    public function tabungan()
    {
        $dataTabungan = Tabungan::where('users_id', Auth::user()->id)->get();
         $kategori = Kategori::where('type', "tabungan")->get();
        return view('form-detail-tabungan' ,compact('dataTabungan', 'kategori'));
    }
    public function kategori()
    {
        $dataKategori = Kategori::all();
        return view('form-detail-kategori' ,['kategori'=> $dataKategori]);
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }
}
