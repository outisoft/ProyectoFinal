<?php

namespace App\Policies;

use App\User;
use App\Servicios;
use Illuminate\Auth\Access\HandlesAuthorization;

class CuentaPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function viewAny(User $user)
    {

        //$user = auth()->user();
        //dd($user);

        //if($user->id == 'cobrador'){
          //return true;
        //}
        //else{
          //return false;
        //}
    }
}
