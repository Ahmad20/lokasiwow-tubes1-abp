<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->words(3, true),
            'location' => $this->faker->country(),
            'url_link' => $this->faker->url(),
            'count_like' => $this->faker->randomNumber(5, true),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
}
