<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Comment;
use App\Models\alfad;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

      $this->call([
          UserSeader::class,
          CategorySeeder::class,
          PostSeader::class,
          CommentSeeder::class,
          TagSeeder::class
      ]);
    }
}
