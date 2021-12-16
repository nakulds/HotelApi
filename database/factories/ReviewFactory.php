<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Hotel;

class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'hotel_id' => $this->faker->randomElement(Hotel::pluck('id')->toArray()),
            'title' =>  $this->faker->title,
            'author' => $this->faker->name(),
            'rating' => rand(1,5),
            'description' => $this->faker->realText,
        ];
    }
}
