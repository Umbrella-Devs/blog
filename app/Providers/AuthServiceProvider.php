<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('access-dashboard', function($user){
            return $user->hasAnyRole(['author', 'admin']);
        });
        Gate::define('author', function($user){
            return $user->hasRole('author');
        });
        Gate::define('admin', function($user){
            return $user->hasRole('admin');
        });
    }
}
