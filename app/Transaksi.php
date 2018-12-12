<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    // protected $fillable=['id_tiket','qty','status']; 
    protected $guarded=[]; //jika pakai guard maka gunakan $request->except

    public function tiket()
    {
        return $this->belongsTo(Tiket::class,'id_tiket');
    }
}
