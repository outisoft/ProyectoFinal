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
        //
    }
    public function edit(User $authUser, Servicios $servicios)
    {
        dd($servicios);
        return $authUser->id == $servicios->cobrador_id;
    }
}
