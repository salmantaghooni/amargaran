<?php

namespace AmusementPark\EscapeRoom\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
use AmusementPark\EscapeRoom\Http\Controllers\RoomController;
use AmusementPark\EscapeRoom\Services\Interfaces\RoomInterface;
use AmusementPark\EscapeRoom\Services\RoomService;


class EscapeRoomServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->when(RoomController::class)->needs(RoomInterface::class)->give(RoomService::class);
    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . "/../Routes/room_route.php");
    }
}
