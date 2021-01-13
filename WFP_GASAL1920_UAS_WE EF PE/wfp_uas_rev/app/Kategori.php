<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    public function pengeluarans()
    {
        return $this->hasMany('App\Pengeluaran');
    }

    public function pemasukans()
    {
        return $this->hasMany('App\Pemasukan');
    }

    public function tabungans()
    {
        return $this->hasMany('App\Tabungan');
    }
}
