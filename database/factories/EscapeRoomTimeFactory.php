<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class EscapeRoomTimeFactory extends Factory
{
    protected $count = 2;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $this->count +=34;
        $start_date = $this->faker->unique()->dateTimeBetween('+'.$this->count.' minutes', '+'. (40 +$this->count).' minutes');
        $start_date_clone = clone $start_date;
       
        return [
            'name' => $this->faker->name(),
            'start_time' => $start_date ,
            'end_time' => $this->faker->unique()->dateTimeBetween($start_date->modify('+'. ($this->count) .' minutes'), $start_date_clone->modify('+'. (40+$this->count) .' minutes'))
        ];
        
    }
}
