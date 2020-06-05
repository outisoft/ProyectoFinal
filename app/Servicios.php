<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicios extends Model
{
    public function user()
    {
      return $this-belongTo('App\User', 'cobrador_id');
    }
    public function suscriptor()
    {
        return $this->belongsToMany('App\User','servicios_suscriptor','servicios_id', 'suscriptor_id');
    }
}
