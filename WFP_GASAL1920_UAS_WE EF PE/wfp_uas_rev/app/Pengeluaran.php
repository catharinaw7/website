<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
    //
    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function history()
    {
    	return $this->belongsTo('App\History');
    }

    public function kategori()
    {
        return $this->belongsTo('App\Kategori');
    }

}
