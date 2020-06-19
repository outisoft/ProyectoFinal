<?php

namespace App\Policies;

use App\Suscriptor;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SuscriptorPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any suscriptors.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        $user = auth()->user();
        //dd($user);

        if($user->rol == 'suscriptor'){
          return true;
        }
        else{
          return false;
        }
    }

    /**
     * Determine whether the user can view the suscriptor.
     *
     * @param  \App\User  $user
     * @param  \App\Suscriptor  $suscriptor
     * @return mixed
     */
    public function view(User $user, Suscriptor $suscriptor)
    {
        //
    }

    /**
     * Determine whether the user can create suscriptors.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the suscriptor.
     *
     * @param  \App\User  $user
     * @param  \App\Suscriptor  $suscriptor
     * @return mixed
     */
    public function update(User $user, Suscriptor $suscriptor)
    {
        //
    }

    /**
     * Determine whether the user can delete the suscriptor.
     *
     * @param  \App\User  $user
     * @param  \App\Suscriptor  $suscriptor
     * @return mixed
     */
    public function delete(User $user, Suscriptor $suscriptor)
    {
        //
    }

    /**
     * Determine whether the user can restore the suscriptor.
     *
     * @param  \App\User  $user
     * @param  \App\Suscriptor  $suscriptor
     * @return mixed
     */
    public function restore(User $user, Suscriptor $suscriptor)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the suscriptor.
     *
     * @param  \App\User  $user
     * @param  \App\Suscriptor  $suscriptor
     * @return mixed
     */
    public function forceDelete(User $user, Suscriptor $suscriptor)
    {
        //
    }
}
