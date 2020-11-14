<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicios_Suscriptor extends Model
{
    protected $table = 'servicios_suscriptor';
    protected $fillable = ['id','servicios_id', 'suscriptor_id'];

    public function servicio()
    {
          return $this->belongsTo('App\Servicios', 'id', 'nombre', 'descripcion', 'precio', 'MontoMora', 'Foto1', 'Foto2', 'Foto3' );
    }
}
