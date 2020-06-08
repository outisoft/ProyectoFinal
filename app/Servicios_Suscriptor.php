<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicios_Suscriptor extends Model
{
    public function user()
    {
      return $this->belongsToMany('App\Servicio','servicios_suscriptor','servicios_id', 'suscriptor_id');
    }
}
