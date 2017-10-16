<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    protected $table = 'buku';
    protected $primaryKey = 'id_buku';

    public function penjualan()
    {
      return $this->hasMany('App\Penjualan');
    }
}
