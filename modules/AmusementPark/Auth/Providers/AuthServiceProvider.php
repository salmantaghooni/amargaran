<?php

namespace AmusementPark\Auth\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
use AmusementPark\Auth\Http\Controllers\AuthController;
use AmusementPark\Auth\Services\Interfaces\AuthInterface;
use AmusementPark\Auth\Services\AuthService;


class AuthServiceProvider extends ServiceProvider
{
    public function register()
    {
 
        $this->app->when(AuthController::class)->needs(AuthInterface::class)->give(AuthService::class);

    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . "/../Routes/auth_route.php");
    }
}
