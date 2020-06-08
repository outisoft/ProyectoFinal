<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suscriptor extends Model
{
  public function user()
  {
    return $this-belongTo('App\User', 'suscriptor_id');
  }
  public function servicios()
  {
    return $this->belongsTo('App\Servicios,'servicios_suscriptor','suscriptor_id', 'servicios_id');
      //return $this->belongsToMany('App\Servicios,'servicios_suscriptor','suscriptor_id', 'servicios_id');
  }
}
