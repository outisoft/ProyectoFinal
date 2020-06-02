<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntradaController extends Controller
{
  public function validar( Request  $request){
      //        var_dump($request->all() );
              $datos = $request->all() ;
              if($datos['nombre'] == "cobrador")
                  return redirect("/cobrador");
              if($datos['nombre'] == "suscritor")
                  return redirect("/suscritor");
                return redirect() -> back();
  }
}
