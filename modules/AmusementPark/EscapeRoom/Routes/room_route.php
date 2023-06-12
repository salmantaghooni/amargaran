<?php
namespace AmusementPark\EscapeRoom\Routes;



use Illuminate\Support\Facades\Route;
use AmusementPark\EscapeRoom\Http\Controllers\RoomController;
use Illuminate\Http\Request;


Route::prefix('api/v1/escape-rooms')->group(function ($router)
    {
        $router->get('/', [RoomController::class,'index']);
        $router->get('/{id}', [RoomController::class,'show']);
        $router->get('/{id}/time-slots', [RoomController::class,'showSlots']);
        
    }
);
