<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loaicaycanh extends Model
{
    //
    protected $table="loaicaycanh";

    public function Caycanh(){
        return $this->hasMany('App\Caycanh','idTenloaicay','id');
    }
}
