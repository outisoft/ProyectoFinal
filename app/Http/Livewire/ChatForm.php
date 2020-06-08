<?php

namespace App\Http\Livewire;
use App\User;
use App\Message;
use Livewire\Component;
use Illuminate\Http\Request;

class ChatForm extends Component
{
    /*public $nombre;
    public $mensaje;

    public function mount()
    {
      $this->nombre = "";
      $this->mensaje = "";
    }*/
    public function render()
    {
        $users = User::where('id', '!=', auth()->id())->get();
        return view('livewire.chat-form', ['users' => $users]);
    }

    public function updated($field)
    {
      $this->validateOnly($field,[
        "recipient_id"=>"required",
        "body"=>"required"
      ]);
    }

    public function enviarMensaje()
    {
      /*validar
      $data =request()->validate([
        'nombre' => 'required',
        'precio' => 'required',
        'MontoMora'=>'required',
        'descripcion' => 'required',
      ]);

        $user = auth()->user();
        $mensaje = new Messages();

        $mensaje->body = request('body');
        $mensaje->sender_id = request('sender_id');
        $mensaje->recipient_id = request('recipient_id');

        $mensaje->save();

        return redirect('/servicios')->with('success','El servicio ha sido creado');
        $this->emit("mensajeRecibido");*/
    }
}
