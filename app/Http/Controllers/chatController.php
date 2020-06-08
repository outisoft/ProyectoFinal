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
    Message::create({
      'sender_id'=>auth()->id(),
      'recipient_id'=> $request->recipient_id,
      'body'=>$request->body,
    });
    return back()->->with('flash', 'Mensaje enviado');
  }
}
