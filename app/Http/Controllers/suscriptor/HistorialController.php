<?php

namespace App\Http\Controllers\suscriptor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\suscriptor;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use DB;
class HistorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $informacion = DB::table('servicios_suscriptor')
      ->join('users', 'users.id', '=', 'servicios_suscriptor.suscriptor_id')
      ->select('servicios.nombre', 'servicios.precio', 'user.name as nombre')
      ->get();

      /*$noticias = DB::table('noticias')
      ->join('users', 'users.id_user', '=', 'noticias.id_user')
      ->select('noticias.nombre', 'noticias.contenido', 'user.name as autorNoticia')
      ->get();*/
      dd($informacion);
        //return view('cobrador.suscriptor.historial');
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
        ->get();

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
      $historial = DB::table('users')
      ->where('id', $id)
      ->get();

      return view('cobrador.suscriptor.historial', ['historial'=>$historial]);
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
