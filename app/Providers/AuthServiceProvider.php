<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\User;
use App\Servicios;
use App\Cobrador;
use App\Suscriptor;
use App\Cuenta;
use App\Policies\UserPolicy;
use App\Policies\ServicioPolicy;
use App\Policies\CobradorPolicy;
use App\Policies\SuscriptorPolicy;
use App\Policies\CuentaPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
        User::class => UserPolicy::class,
        Servicios::class => ServicioPolicy::class,
        Cobrador::class => CobradorPolicy::class,
        Suscriptor::class => SuscriptorPolicy::class,
        Cuenta::class => CuentaPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
