<?php

namespace App\Http\Controllers;

use App\User;
use App\Message;
use Illuminate\Http\Request;

class chatController extends Controller
{
  public function index()
  {
    $users = User::where('id', '!=', auth()->id())->get();
    return view('cobrador.chatC', ['users' => $users]);
  }
  public function store(Request $request)
  {
    $user = auth()->user();
    $mensaje = new Message();
    $mensaje->body = $request->body;
    $mensaje->sender_id = $user->id;
    $mensaje->recipient_id = $request->recipient_id;
    $mensaje->save();

    return back()->with('flash', 'Mensaje enviado');
  }
}
