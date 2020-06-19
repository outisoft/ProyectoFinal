<?php

namespace App\Http\Controllers\Cobrador;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Servicios;
use App\User;

class ServiciosController extends Controller
{
  use SoftDeletes;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this -> authorize('viewAny', Servicios::class);
        $servicio = Servicios::orderBy('id', 'desc')
                  ->get();

        return view('cobrador.servicios.index', ['servicio' => $servicio]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this -> authorize('create', Servicios::class);

        return view('cobrador.servicios.create');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //validar
      $data =request()->validate([
        'nombre' => 'required',
        'precio' => 'required',
        'MontoMora'=>'required',
        'descripcion' => 'required',
      ]);
        $activo = '1';
        $user = auth()->user();
        $servicios = new Servicios();

        $servicios->nombre = request('nombre');
        $servicios->precio = request('precio');
        $servicios->MontoMora= request('MontoMora');
        $servicios->descripcion = request('descripcion');

        $ruta = public_path() . '/image';

        $imagen1 = $request->file('imagen1');
        $fileName = uniqid() . $imagen1->getClientOriginalName();
        $imagen1->move($ruta, $fileName);
        $servicios->Foto1 =  $imagen1->getClientOriginalName();


        $imagen2 = $request->file('imagen2');
        $fileName = uniqid() . $imagen2->getClientOriginalName();
        $imagen2->move($ruta, $fileName);
        $servicios->Foto2 =  $imagen2->getClientOriginalName();

        $imagen3 = $request->file('imagen3');
        $fileName = uniqid() . $imagen3->getClientOriginalName();
        $imagen3->move($ruta, $fileName);
        $servicios->Foto3 =  $imagen3->getClientOriginalName();

        $servicios->activo = $activo;
        $servicios->cobrador_id = $user->id;

        $servicios->save();

        return redirect('/servicios')->with('success','El servicio ha sido creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     ///codigos diferentes
     ////dd($user->rol);
     #$user = Servicios::find($servicio->cobrador_id);


     //obtener usuario actual
     //$user = auth()->user();

     //obtener informacion del servicio

    public function edit(Servicios $servicio)
    {
      $servicio = Servicios::find($servicio->id);

      //solicitar autorizacion
      $this->authorize('edit', $servicio);

      // regresa una vista con la informacion necesaria
      return view('cobrador.servicios.edit', ['servicio' => $servicio]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Servicios $servicio)
    {

        //$this -> authorize('create', User::class);
      //validar
      $data =request()->validate([
        'nombre' => 'required',
        'precio' => 'required',
        'MontoMora'=>'required',
        'descripcion' => 'required',
      ]);

        $activo = '1';
        $servicios = Servicios::findOrFail($servicio->id);

        $servicios->nombre = request('nombre');
        $servicios->precio = request('precio');
        $servicios->descripcion = request('descripcion');

        $ruta = public_path() . '/image';

        $imagen1 = $request->file('imagen1');
        $fileName = uniqid() . $imagen1->getClientOriginalName();
        $imagen1->move($ruta, $fileName);
        $servicios->Foto1 =  $imagen1->getClientOriginalName();


        $imagen2 = $request->file('imagen2');
        $fileName = uniqid() . $imagen2->getClientOriginalName();
        $imagen2->move($ruta, $fileName);
        $servicios->Foto2 =  $imagen2->getClientOriginalName();

        $imagen3 = $request->file('imagen3');
        $fileName = uniqid() . $imagen3->getClientOriginalName();
        $imagen3->move($ruta, $fileName);
        $servicios->Foto3 =  $imagen3->getClientOriginalName();

        $servicios->activo = $activo;

        $servicios->save();

        return redirect('/servicios')->with('success','El servicio ha sido actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      //$this->authorize('delete', $id);

      try {
            $servicios= Servicios::find($id);
            $this->authorize('delete', $servicios);
            if ($servicios != null){
                $servicios->delete();
                return redirect('/servicios')->with('success','El servicio ha sido borrado');
            }else{
                return redirect('/servicios')->with('error','El servicio no ha sido encontrado');
            }
        }catch (\Illuminate\Database\QueryException $e){
            if($e->getCode()==23000)
                return redirect('/curso')->with('error', $e->getMessage());;
        }
      //buscar servicio
      //  $servicios = Servicios::find($request->id);

      //eliminar servicio
      //  $servicios->delete();

      //redirecionar
      //  return redirect('/servicios')->with('success','El servicio ha sido Eliminado');
    }
}
