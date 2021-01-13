<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengeluaran;
use auth;
use Carbon\Carbon;

class LaporanPengeluaranTerbesarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataPengeluaran = Pengeluaran::where('users_id', Auth::user()->id)->get();
        return view('laporan-b' ,['pengeluaran'=> $dataPengeluaran]);
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

    public function cariPengeluaran(Request $request)
    {
        $user = Auth::user()->id;
        $date = $request->get('date-search');

        $search_date = Carbon::createFromTimestamp(strtotime($date))->toDateString();

        $pengeluaran = Pengeluaran::where('created_at','LIKE', $search_date .'%')
                        ->where('users_id', $user)
                        ->get();

        return view('laporan-b', compact('pengeluaran'));
    }

    
}
