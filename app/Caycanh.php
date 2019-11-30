<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caycanh extends Model
{
    //
    protected $table="caycanh";

    public function Loaicaycanh(){
        return $this->belongsTo('App\Loaicaycanh','idTenloaicay','id');
    }
}
