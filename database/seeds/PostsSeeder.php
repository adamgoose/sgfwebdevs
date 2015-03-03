<?php

use App\Post;
use Faker\Factory;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder {

  public function run()
  {
    Post::truncate();

    $faker = Factory::create();

    foreach(range(1, 20) as $i)
    {
      Post::create([
        'title'   => $faker->sentence(3),
        'content' => $faker->paragraph(25)
      ]);
    }
  }
}