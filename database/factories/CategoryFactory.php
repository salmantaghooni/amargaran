<?php
namespace Database\Factories;


use App\Category;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;


class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->unique()->sentence(),
            'slug' => $this->faker->unique()->slug(),
            'position' => $this->faker->numberBetween(0, 100),
            'parent_id' => 0,
        ];
    }
}


