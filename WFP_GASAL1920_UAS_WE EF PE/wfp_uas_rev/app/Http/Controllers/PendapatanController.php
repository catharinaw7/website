<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemasukan;
use App\Kategori;
use App\User;
use auth;
use DB;
use Carbon\Carbon;

class PendapatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {       
        $kategori = Kategori::where('type','pemasukan')->get();
        return view('form-pemasukan',['kategori' => $kategori]);    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('form-pemasukan',['kategori' => $kategori]);
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
        $pendapatan = new Pemasukan();
        $pendapatan->nama = $request->get('nama_pendapatan');
        $pendapatan->nominal = $request->get('nominal_pendapatan');
        $pendapatan->keterangan = $request->get('ket_pendapatan');
        $pendapatan->kategoris_id = $request->get('kategori_pendapatan');
        $pendapatan->users_id = Auth::user()->id;
        $pendapatan->created_at = Carbon::now();

        $pendapatan->save();

        $user = User::find(Auth::user()->id);
        $user['balance'] += $request->get('nominal_pendapatan');
        $user->save();
        return redirect('/detailpendapatan');
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
        $pendapatan = Pemasukan::find($id);
        $kategori = Kategori::where('type',"pemasukan")->get();
        //return view('form-edit-pemasukan',['pemasukan' => $pendapatan],['kategori'=> $valueKategori]);
        return view('form-edit-pemasukan',compact('pendapatan','kategori'));
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
        $pendapatan = Pemasukan::find($id);

        $pendapatan->nama = $request->get('nama_pendapatan');
        $pendapatan->nominal = $request->get('nominal_pendapatan');
        $pendapatan->keterangan = $request->get('ket_pendapatan');
        $pendapatan->kategoris_id = $request->get('kategori_pendapatan');

        $pendapatan->save();
        return redirect('/detailpendapatan');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try
        {
            $pendapatan = Pemasukan::find($id);
        $pendapatan->delete();

        return redirect('/detailpendapatan');
        }
        catch(Exception $ex)
        {
            report($ex);
            return false;
        }
        
    }

    public function exportexcel()
    {
        $datas = Pemasukan::where('users_id', Auth::user()->id)->get();
        $kategoris = Kategori::where('type', 'pemasukan')->get();
        return view('export-excel', compact('datas', 'kategoris'));
    }

    public function exportpdf()
    {
        $datas = Pemasukan::where('users_id', Auth::user()->id)->get();
        return view('export-pdf', ['datas'=>$datas]);
    }    
}
