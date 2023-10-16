<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    protected $model = Comment::class;

    public function definition(): array
    {
        return [
            'body'=>$this->faker->sentence,
            'user_id'=>User::factory(),
            'post_id'=>Post::factory(),
        ];
    }
}
