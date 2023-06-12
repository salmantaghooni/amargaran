<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Category extends Model
{
    use HasFactory;
    protected $table ='category';
    protected $gurded = [];


    public function definition(): array
    {
        return [
            'title' => $this->faker->unique()->sentence(),
            'slug' => $this->faker->unique()->slug(),
            'position' => $this->faker->unique()->randomDigitNotNull(),
            'parent_id' => 0,
        ];
    }
}
