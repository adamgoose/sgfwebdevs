<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder {

  public function run()
  {
    User::truncate();

    User::create([
      'name'     => 'Adam Engebretson',
      'email'    => 'adam@enge.me',
      'password' => Hash::make('applesauce'),
    ]);
  }
}