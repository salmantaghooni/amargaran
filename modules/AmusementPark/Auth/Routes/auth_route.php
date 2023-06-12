<?php
namespace AmusementPark\Auth\Routes;



use Illuminate\Support\Facades\Route;
use AmusementPark\Auth\Http\Controllers\AuthController;
use Illuminate\Http\Request;


Route::prefix('api/v1/auth')->group(function ($router)
    {
        $router->post('/login', [AuthController::class,'doLogin']);
        $router->post('/register', [AuthController::class,'register']);
        $router->get('/logout', [AuthController::class,'logout']);
    }
);
