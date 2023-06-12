<?php
namespace Database\Factories;

use App\EscapeRoom;
use Illuminate\Support\Carbon;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;


class EscapeRoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'amount' => $this->faker->numberBetween(2000,100000),
            'participant_max' => $this->faker->randomDigitNotNull(),
        ];
    }
}



