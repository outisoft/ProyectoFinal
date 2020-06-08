<?php

namespace App\Http\Controllers\suscriptor;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Servicios;
use App\User;

class ServiciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $servicio = Servicios::orderBy('id', 'desc')
                  ->get();

        return view('suscriptor.servicios.index', ['servicio' => $servicio]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $id)
    {
      $user = auth()->user();
      $servicios_suscriptor = Servicios::find($id);

      $servicio = DB::table('servicios');
      //dd($servicios_suscriptor);

      if ($servicios_suscriptor != null)
      {
        //dd($servicio);
      //  $servicios_suscriptor->servicios_id = $servicios_suscriptor;
      //  $servicios_suscriptor->suscriptor_id = $user->id;

        //$servicios_suscriptor->avg();

        return redirect('/verservicios')->with('success','El servicio ha sido cargado a su cuenta');
      }
      else
      {
        return redirect('/verservicios')->with('error','El servicio no ha sido encontrado');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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

    }
}
