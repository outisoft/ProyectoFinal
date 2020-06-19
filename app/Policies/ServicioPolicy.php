<?php

namespace App\Policies;

use App\User;
use App\Servicios;
use Illuminate\Auth\Access\HandlesAuthorization;

class ServicioPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {

    }
    public function viewAny(User $user)
    {
        $user = auth()->user();
        //dd($user);

        if($user->rol == 'cobrador'){
          return true;
        }
        else{
          return false;
        }
    }

    public function before($user, $ability)
    {
      #if ($user->isSuperAdmin())
      if ($user->rol=='cobrador')
      {
        return true;
      }
    }
    public function create(User $user)
    {
      #return $user->rol = cobrador;
    }

    public function edit(User $authUser, Servicios $servicios)
    {
        //dd($servicios);
        return $authUser->id == $servicios->cobrador_id;
    }

    public function delete(User $user, Servicios $servicios)
    {
        return $user->id == $servicios->cobrador_id;
    }
}
