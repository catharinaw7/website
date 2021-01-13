<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use Notifiable;
    public function pengeluarans()
    {
        return $this->hasMany('App\Pengeluaran','users_id');
    }

    public function pemasukans()
    {
        return $this->hasMany('App\Pemasukan','users_id');
    }

    public function tabungans()
    {
        return $this->hasMany('App\Tabungan');
    }

    public function hitungTotalPemasukkan()
    {
        $pemasukkan = $this->pemasukans()->sum('nominal');
        return $pemasukkan;
    }
    public function hitungTotalPengeluaran()
    {
        $pengeluaran = $this->pengeluarans()->sum('nominal');
        return $pengeluaran;
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

}
