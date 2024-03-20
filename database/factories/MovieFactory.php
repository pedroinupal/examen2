<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'movie_title'          => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'poster'         => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'genre_id'   => $this->faker->numberBetween(1, 5),
            'directors_id' => $this->faker->numberBetween(1, 10)
        ];
    }
}
