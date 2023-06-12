<?php

use Database\Seeders\EscapeRoomTimeTableSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(EscapeRoomTableSeeder::class);
        $this->call(EscapeRoomTimeTableSeeder::class);


    }
}
