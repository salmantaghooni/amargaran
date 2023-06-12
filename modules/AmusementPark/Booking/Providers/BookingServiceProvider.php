<?php

namespace AmusementPark\Booking\Providers;

use Illuminate\Support\ServiceProvider;
use AmusementPark\Booking\Http\Controllers\BookingController;
use AmusementPark\Booking\Services\Interfaces\BookingInterface;
use AmusementPark\Booking\Services\BookingService;


class BookingServiceProvider extends ServiceProvider
{
    public function register()
    {
 
        $this->app->when(BookingController::class)->needs(BookingInterface::class)->give(BookingService::class);

    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . "/../Routes/booking_route.php");
    }
}
