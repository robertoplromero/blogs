<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            //'content' => fake()->paragraphs(3, true),
            'content' => fake()->text(1000),
            //'category' => fake()->randomElement(['Technology', 'Health', 'Lifestyle', 'Business', 'Entertainment']),
            'category' => fake()->word(),
            // 'published_at' => fake()->dateTimeBetween('-1 year', 'now'),
            'published_at' => fake()->dateTime(),
        ];
    }
}