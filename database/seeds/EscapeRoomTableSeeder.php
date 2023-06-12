<?php

use Illuminate\Database\Seeder;
use App\EscapeRoom;
use App\Category;

class EscapeRoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::factory(10)->create()->each(function ($c) {
            EscapeRoom::factory(10)->create(['category_id'=>$c->id]);
        });
    }
}
