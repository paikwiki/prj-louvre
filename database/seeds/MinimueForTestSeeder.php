<?php

use Illuminate\Database\Seeder;

class MinimueForTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // course
      App\Course::create([
        'name' => '미니뮤스튜디오',
      ]);

      // tags
      App\Tag::create([
        'name' => '정물화',
      ]);
      App\Tag::create([
        'name' => '인물화',
      ]);
      App\Tag::create([
        'name' => '풍경화',
      ]);
      App\Tag::create([
        'name' => '드로잉',
      ]);
      App\Tag::create([
        'name' => '에스키스',
      ]);
      App\Tag::create([
        'name' => '모범작',
      ]);
      App\Tag::create([
        'name' => '야외',
      ]);
      App\Tag::create([
        'name' => '실내',
      ]);
      App\Tag::create([
        'name' => '계절',
      ]);

      // types
      App\Type::create([
        'name' => '유화',
      ]);
      App\Type::create([
        'name' => '수채화',
      ]);
      App\Type::create([
        'name' => '판화',
      ]);
      App\Type::create([
        'name' => '수묵화',
      ]);
      App\Type::create([
        'name' => '목탄화',
      ]);
    }
}
