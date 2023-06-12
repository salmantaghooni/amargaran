<?php

namespace Database\Seeders;

use App\EscapeRoom;
use App\EscapeRoomTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class EscapeRoomTimeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EscapeRoom::all()->each(function ($e) {
            $rand = rand(1,3);
                EscapeRoomTime::factory($rand)->create([
                    'escape_room_id'=>$e->id,
                ]);
     } );
    }
}
