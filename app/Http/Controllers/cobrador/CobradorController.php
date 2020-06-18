<?php

namespace App\Http\Controllers\cobrador;

use App\cobrador;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;

class CobradorController extends Controller
{
    function cobrador()
    {
      return view('cobrador.cobrador');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth'); //sin este middleware el controlador se ejecutaria
        // aún cuando no exista sesion (si no ahy alguien activo)
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cobrador.cobrador');
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
     * @param  \App\cobrador  $cobrador
     * @return \Illuminate\Http\Response
     */
    public function show(cobrador $cobrador)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cobrador  $cobrador
     * @return \Illuminate\Http\Response
     */
    public function edit(cobrador $cobrador)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cobrador  $cobrador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cobrador $cobrador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cobrador  $cobrador
     * @return \Illuminate\Http\Response
     */
    public function destroy(cobrador $cobrador)
    {
        //
    }
}
