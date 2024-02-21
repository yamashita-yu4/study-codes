<?php

namespace App\Providers;

use App\Auth\UserTokenProvider;
use App\DataProvider\UserToken;
use App\Foundation\Auth\UserTokenProvider as AuthUserTokenProvider;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        $this->app->make('auth')->provider(
            'user_token',
            function (Application $app, array $config) {
                return new AuthUserTokenProvider(new UserToken($app->make('db')));
            }
        );
    }
}
