<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Bio;
use \App\Models\Post;
use \App\Models\Category;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //create 8 categories
        $categories =  [
            ['id' => 1, 'name' => 'bébé'],
            ['id' => 2, 'name' => 'chaton'],
            ['id' => 3, 'name' => 'chiot'],
            ['id' => 4, 'name' => 'éléphanteau'],
            ['id' => 5, 'name' => 'ourson'],
            ['id' => 6, 'name' => 'petit du singe'],
            ['id' => 7, 'name' => 'petit du rat'],
            ['id' => 8, 'name' => 'poulain'],
            ['id' => 9, 'name' => 'lapereau']
        ];
        Category::insert($categories);

        $users =  [
            ['id' => 1, 'name' => 'Clem', 'email' => 'clemchasles@gmail.com', 'email_verified_at' => now(), 'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'bio_id' => 1, 'remember_token' => Str::random(10), 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'Mehmet', 'email' => 'mehmet@mehmet.com', 'email_verified_at' => now(), 'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'bio_id' => 2, 'remember_token' => Str::random(10), 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'Faris', 'email' => 'faris@faris.com', 'email_verified_at' => now(), 'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'bio_id' => 3,  'remember_token' => Str::random(10), 'created_at' => now(), 'updated_at' => now()]
        ];
        User::insert($users);

        $bios =  [
            [
                'id' => 1, 'content' => 'Bonjour, je m\'appelle Clémentine et je suis fan de bébés animaux', 'image' => 'https://via.placeholder.com/150', 'created_at' => now(), 'updated_at' => now(),
                'user_id' => 1
            ],
            [
                'id' => 2, 'content' => 'Bonjour, je m\'appelle Mehmet et je suis fan de bébés animaux', 'image' => 'https://via.placeholder.com/150', 'created_at' => now(), 'updated_at' => now(),
                'user_id' => 2
            ],
            [
                'id' => 3, 'image' => 'https://via.placeholder.com/150', 'content' => 'Bonjour, je m\'appelle Faris et je suis fan de bébés animaux', 'created_at' => now(), 'updated_at' => now(),
                'user_id' => 3
            ]
        ];
        Bio::insert($bios);

        $posts = [
            [
                'id' => 1,
                'title' => 'Fake post',
                'content' => 'Fake post',
                'image' => 'posts/babies.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
                'user_id' => 1,
                'category_id' => 1
            ], [
                'id' => 2,
                'title' => 'Fake post',
                'content' => 'Fake post',
                'image' => 'posts/babies.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
                'user_id' => 2,
                'category_id' => 1
            ], [
                'id' => 3,
                'title' => 'Fake post',
                'content' => 'Fake post',
                'image' => 'posts/babies.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
                'user_id' => 3,
                'category_id' => 1
            ], [
                'id' => 4,
                'title' => 'Fake post',
                'content' => 'Fake post',
                'image' => 'posts/babies.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
                'user_id' => 1,
                'category_id' => 1
            ], [
                'id' => 5,
                'title' => 'Fake post',
                'content' => 'Fake post',
                'image' => 'posts/babies.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
                'user_id' => 2,
                'category_id' => 1
            ], [
                'id' => 6,
                'title' => 'Fake post',
                'content' => 'Fake post',
                'image' => 'posts/babies.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
                'user_id' => 3,
                'category_id' => 1
            ],
        ];
        Post::insert($posts);
    }
}
