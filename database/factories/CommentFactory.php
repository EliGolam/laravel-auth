<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Post;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $numUsers = count(User::all());
        $numPosts = count(Post::all());

        return [
            "title" => 'This is a Comment: ' . $this->faker->word(),
            "user_id" => $this->faker->numberBetween(1, $numUsers),
            "post_id" => $this->faker->numberBetween(1, $numPosts),
            "body" => $this->faker->realText(500),
        ];
    }
}
