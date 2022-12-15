<?php

namespace Database\Factories;

use App\Models\Post;
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
    protected $model = Post::class;

    public function definition()
    {
        return [
            //create a fake sentence with 5 or 10 words
            'title' => $this->faker->sentence(rand(5, 10), true),
            //create a fake sentence with 5 sentences
            'content' => $this->faker->sentences(5, true),
            //create a fake sentence with 5 sentences
            'image' => 'https://via.placeholder.com/1000'
        ];
    }
}
