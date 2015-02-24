<?php

use App\Post;
use Faker\Factory;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder {

  public function run()
  {
    $faker = Factory::create();

    foreach(range(1, $faker->numberBetween(5, 10)) as $i)
    {
      Post::create([
        'title' => $faker->sentence(3),
        'content' => $faker->paragraph(5)
      ]);
    }
  }

}