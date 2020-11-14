<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Servicios extends Model
{
  use SoftDeletes;

    protected $table = 'servicios';
    protected $fillable = ['id','nombre', 'descripcion', 'precio', 'MontoMora', 'Foto1', 'Foto2', 'Foto3', 'cobrador_id'];

    public function user()
    {
      return $this-belongTo('App\User', 'cobrador_id');
    }


    //public function suscriptor()
    //{
    //  retun $this->hasMany(suscriptor::class);
        //return $this->belongsToMany('App\User','servicios_suscriptor','servicios_id', 'suscriptor_id');
    //}
}
