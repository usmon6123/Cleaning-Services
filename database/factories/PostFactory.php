<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
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
    public function definition(): array
    {
        return [
            'title' => $this->faker->words(5,true),
            'short_content' => fake()->sentence(25),
            'user_id' => User::factory(),
            'category_id'=>rand(1,Category::all()->count()),
            'contents' => fake()->paragraph(20),
            'photo' => null,
//            'created_at' => fake()->dateTimeInInterval('-5years', 'now'),
//            'updated_at' => fake()->dateTimeInInterval('-5years', 'now'),
        ];
    }
}
