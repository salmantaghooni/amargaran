<?php
namespace AmusementPark\Booking\Routes;



use Illuminate\Support\Facades\Route;
use AmusementPark\Booking\Http\Controllers\BookingController;


Route::prefix('api/v1/user/bookings')->middleware('auth:api')->group(function ($router)
    {
        $router->get('/', [BookingController::class,'index']);
        $router->post('/store', [BookingController::class,'store']);
        $router->delete('/delete', [BookingController::class,'delete']);
    }
);
