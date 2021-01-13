<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengeluaran;
use App\Kategori;
use auth;
use App\User;

class PengeluaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        // $dataPengeluaran = Pengeluaran::all();
        // return view('forms-pengeluaran',['output' => $dataPengeluaran]);

        $kategori = Kategori::where('type','pengeluaran')->get();
        return view('forms-pengeluaran',['kategori' => $kategori]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $kategori = Kategori::all();
        // return view('forms-pengeluaran',['kategori' => $kategori]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[

            'image' => 'image|mimes:jpeg,png,jpg,svg,gif|max:2048',
        ]);

        $nama = $request->get('nama_pengeluaran');
        $nominal = $request->get('nominal_pengeluaran');
        $ket = $request->get('ket_pengeluaran');
        $kategori = $request->get('kategori_pengeluaran');

        
        $pengeluaran = new Pengeluaran();
        $pengeluaran->users_id = Auth::user()->id;
        $pengeluaran->nama = $nama;
        $pengeluaran->nominal = $nominal;
        $pengeluaran->keterangan = $ket;
        $pengeluaran->kategoris_id = $kategori;
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() ."." .$extension;
            $file->move('uploads/bukti/', $filename);
            $pengeluaran->foto = $filename;
        }
        else
        {
            $pengeluaran->foto = null;
        }
        
        
        $pengeluaran->save();

        $user = User::find(Auth::user()->id);
        $user['balance'] -= $request->get('nominal_pengeluaran');
        $user->save();
        return redirect('/detailpengeluaran');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pengeluaran = Pengeluaran::find($id);
        return view('view-photo',['pengeluaran' => $pengeluaran]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengeluaran = Pengeluaran::find($id);
        $kategori = Kategori::where('type',"pengeluaran")->get();
        //return view('form-edit-pemasukan',['pemasukan' => $pendapatan],['kategori'=> $valueKategori]);
        return view('form-edit-pengeluaran',compact('pengeluaran','kategori'));

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
        $pengeluaran = Pengeluaran::find($id);
        $pengeluaran->users_id = Auth::user()->id;
        $pengeluaran->nama = $request->get('nama_pengeluaran');
        $pengeluaran->nominal = $request->get('nominal_pengeluaran');
        $pengeluaran->keterangan = $request->get('ket_pengeluaran');
        $pengeluaran->kategoris_id = $request->get('kategori_pengeluaran');

        $pengeluaran->save();
        return redirect('/detailpengeluaran');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengeluaran = Pengeluaran::find($id);
        $pengeluaran->delete();
        return redirect('/detailpengeluaran');
    }

    public function exportexcel()
    {
        $datas = Pengeluaran::where('users_id', Auth::user()->id)->get();
        $kategori = Kategori::where('type', 'pengeluaran')->get();
        return view('export-excel', compact('datas', 'kategori'));
    }

    public function exportpdf()
    {
        $datas = Pengeluaran::where('users_id', Auth::user()->id)->get();
        $kategori = Kategori::where('id', 'pengeluaran')->get();
        return view('export-pdf', ['datas'=>$datas]);
    }    
}
