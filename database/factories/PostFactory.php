<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;

class PostFactory extends Factory
{
    private static int $postIdx = 0;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        PostFactory::$postIdx += 1;
        $idx = PostFactory::$postIdx;
        $title = "This is a Post: {$idx}";

        $numUsers = count(User::all());

        return [
            'title' => $title,
            'user_id' => $this->faker->numberBetween(1, $numUsers),
            'excerpt' => $this->faker->realText(),
            'slug' => Str::slug($title, '-'),
            'body' => $this->faker->realTextBetween(300, 800, 3),
        ];
    }
}
