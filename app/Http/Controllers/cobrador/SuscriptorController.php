<?php

namespace App\Http\Controllers\cobrador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\suscriptor;
use App\servicio;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class SuscriptorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $servicio = DB::table('servicios_suscriptor')
      ->get();
      $suscriptor = DB::table('users')
      ->where('rol', 'suscriptor')
      ->get();
      return view('cobrador.suscriptor.index', ['suscriptor'=>$suscriptor], ['serviciover'=>$servicio]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $suscriptor = DB::table('users')
      ->where('id', $id)
      ->find($id);
      dd($id);
      return view('cobrador.suscriptor.historial', ['suscriptor'=>$suscriptor]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      /*$informacion = DB::table('servicios_suscriptor')
      ->join('users', 'users.id', '=', 'servicios_suscriptor.suscriptor_id')
      ->join('servicios','servicios.id', '=', 'servicios_suscriptor.servicios_id')
      ->select('servicios.nombre as servicio', 'servicios.descripcion', 'servicios.precio', 'users.name as nombre', 'users.last_name', 'users.rfc','users.email')
      ->get();*/
      //dd($informacion);

      $suscriptor = DB::table('users')
      ->where('id', $id)
      ->find($id);



      //$servicio = DB::table('servicios_suscriptor')
      //->where('suscriptor_id', $id->id)
      //->get();
      return view('cobrador.suscriptor.historial', ['suscriptor'=>$suscriptor]);
      /*return view('cobrador.suscriptor.historial', ['suscriptor'=>$informacion]);*/
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
