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
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //開発者のみのパーミッション
        Gate::define('system-only', function ($user) {
            return ($user->role == 1);
        });
        //管理者以上
        Gate::define('admin-higher', function ($user) {
            return ($user->role > 0 && $user->role <= 2);
        });
        //一般以上
        Gate::define('user-higher', function ($user) {
            return ($user->role > 0 && $user->role <= 3);
        });
        //管理者
        Gate::define('admin', function ($user) {
            return ($user->role == 2);
        });
        //一般
        Gate::define('user', function ($user) {
            return ($user->role == 3);
        });
    }
}
