<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use auth;

class ModelController extends Controller
{
    public function perbandingan()
    {
    	$user = User::find(Auth::User()->id);
    	$pemasukkan = $user->hitungTotalPemasukkan();
    	$pengeluaran = $user->hitungTotalPengeluaran();
    	return view('laporan-a', compact('pengeluaran','pemasukkan'));
    }
}
