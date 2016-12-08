<?php

use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      App\Tag::create([
        'name' => '태그A',
      ]);
      App\Tag::create([
        'name' => '태그B',
      ]);
      App\Tag::create([
        'name' => '태그C',
      ]);
      App\Tag::create([
        'name' => '태그D',
      ]);
    }
}
