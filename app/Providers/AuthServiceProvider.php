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

        //define Admin User role
        Gate::define('admin',function($role){
            return $role->name == 'admin';
        });

        // Gate::define('isManager',function($user){
        //     return $role->name == 'manager';
        // });

        // Gate::define('isUser',function($user){
        //     return $role->name == 'user';
        // });
    }
}
