<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $categories = \App\Models\Category::factory(5)->create();
        $users = \App\Models\User::factory(10)->create();
        $posts = \App\Models\Post::factory(10)
            ->withImages()
            ->recycle($users)
            ->create()
            ->each(fn ($p) => $p->categories()->attach($categories->random(rand(1, 3))));


        User::create([
          'name' => 'Alex',
          'email' => 'kokov.alexander@gmail.com',
          'password' => 'alex2003',
          'is_admin' => true,
        ]);

    }
}
