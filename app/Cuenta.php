<?php

namespace App;
use App\servicios;

use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
  protected $table = 'servicios_suscriptor';
  protected $fillable = ['id','servicios_id', 'suscriptor_id'];

  public function servicio()
  {
        return $this->belongsTo('App\Servicios', 'id', 'nombre', 'descripcion', 'precio', 'MontoMora', 'Foto1', 'Foto2', 'Foto3' );
  }

    public function user()
    {
      return $this->belongsToMany('App\Servicio','servicios_suscriptor','servicios_id', 'suscriptor_id');
    }

}
