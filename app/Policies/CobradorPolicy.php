<?php

namespace App\Policies;

use App\Cobrador;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CobradorPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any cobradors.
     *
     * @param  \App\User  $user
     * @return mixed
     */
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

    /**
     * Determine whether the user can view the cobrador.
     *
     * @param  \App\User  $user
     * @param  \App\Cobrador  $cobrador
     * @return mixed
     */
    public function view(User $user, Cobrador $cobrador)
    {
        //
    }

    /**
     * Determine whether the user can create cobradors.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the cobrador.
     *
     * @param  \App\User  $user
     * @param  \App\Cobrador  $cobrador
     * @return mixed
     */
    public function update(User $user, Cobrador $cobrador)
    {
        //
    }

    /**
     * Determine whether the user can delete the cobrador.
     *
     * @param  \App\User  $user
     * @param  \App\Cobrador  $cobrador
     * @return mixed
     */
    public function delete(User $user, Cobrador $cobrador)
    {
        //
    }

    /**
     * Determine whether the user can restore the cobrador.
     *
     * @param  \App\User  $user
     * @param  \App\Cobrador  $cobrador
     * @return mixed
     */
    public function restore(User $user, Cobrador $cobrador)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the cobrador.
     *
     * @param  \App\User  $user
     * @param  \App\Cobrador  $cobrador
     * @return mixed
     */
    public function forceDelete(User $user, Cobrador $cobrador)
    {
        //
    }
}
