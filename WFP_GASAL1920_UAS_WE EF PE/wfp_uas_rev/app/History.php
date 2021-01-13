<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    //
    public function pengeluarans()
    {
    	return $this->hasMany('App\Pengeluaran');
    }

    public function pemasukans()
    {
    	return $this->hasMany('App\Pemasukan');
    }
}
