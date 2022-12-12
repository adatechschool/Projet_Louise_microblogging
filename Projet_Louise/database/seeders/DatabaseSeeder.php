<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Post;
use \App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //create 5 categories
        $categories = Category::factory(5)->create();
        //create 10 users
        User::factory(10)->create()->each(function ($user) use ($categories) {
            //for each user we create between 1 and 3 posts
            Post::factory(rand(1, 3))->create([
                'user_id' => $user->id,
                'category_id' => ($categories->random(1)->first())->id
            ]);
        });

        // $this->call(PostSeeder::class);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
