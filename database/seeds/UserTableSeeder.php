<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      App\User::create([
        'uid' => 'test',
        'password' => bcrypt('test123'),
        'name' => 'test',
        'email' => 'test@test.com',
        'course_id' => 1,
      ]);
    }
}
