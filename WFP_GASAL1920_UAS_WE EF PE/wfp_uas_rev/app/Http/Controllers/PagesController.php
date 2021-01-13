<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Tabungan;
use App\Pengeluaran;
use App\Pemasukan;
use auth;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $user = User::find(Auth::user()->id);
        $tabungan = Tabungan::where('users_id',Auth::user()->id)->get();
        // $pengeluaran = Pengeluaran::where('users_id',Auth::user()->id)->sum('nominal');
        // $pemasukkan = Pemasukan::where('users_id',Auth::user()->id)->sum('nominal');
        $pemasukkan = $user->hitungTotalPemasukkan();
        $pengeluaran = $user->hitungTotalPengeluaran();
        //return view ('index',['user'=>$user],['tabungan'=>$tabungan],['pengeluaran'=>$pengeluaran],['pemasukkan'=>$pemasukkan]);
        return view('index', compact('user','tabungan', 'pengeluaran','pemasukkan'));
        

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
