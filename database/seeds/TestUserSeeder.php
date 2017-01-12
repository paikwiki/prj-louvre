<?php

use Illuminate\Database\Seeder;

class TestUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // user
      $user = App\User::create([
        'uid' => 'test',
        'password' => bcrypt('test123'),
        'name' => '피카소',
        'email' => 'test@test.com',
        'course' => '피카소미술학원',
      ]);

      // type
      App\Type::create([
        'name' => '기본 유형',
        'user_id' => $user->id,
      ]);
    }
}
