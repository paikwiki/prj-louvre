<?php

use Illuminate\Database\Seeder;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Type::Create([
          'name'=>'타입A',
        ]);
        App\Type::Create([
          'name'=>'타입B',
        ]);
        App\Type::Create([
          'name'=>'타입C',
        ]);
        App\Type::Create([
          'name'=>'타입D',
        ]);
    }
}
