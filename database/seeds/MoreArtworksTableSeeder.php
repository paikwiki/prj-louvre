<?php

use Illuminate\Database\Seeder;

class MoreArtworksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      아직 미완성!!!
      // artwork
      App\Artwork::create([
        'photo' => 'placehold.it&#47;640x480',
        'name' => '신나는 일러스트',
        'date' => '2016-03-01',
        'type_id' => 4,
        'student_id'=> 1,
        'size'=>'100호',
        'engagement' => 2,
        'completeness' => 4,
        'feedback' => '매우 훌륭하다고 칭찬을 해줘야 할 것 같았습니다.'
      ]);
      App\Artwork::create([
        'photo' => 'placehold.it&#47;640x480',
        'name' => '열심히 만든 가구',
        'date' => '2016-01-02',
        'type_id' => 2,
        'student_id'=> 1,
        'size'=>'50호',
        'engagement' => 2,
        'completeness' => 5,
        'feedback' => '꽤 오래 그렸네요.'
      ]);
      App\Artwork::create([
        'photo' => 'placehold.it&#47;640x480',
        'name' => '꽤 괜찮은 드로잉',
        'date' => '2016-02-02',
        'type_id' => 1,
        'student_id'=> 1,
        'size'=>'30호',
        'engagement' => 2,
        'completeness' => 4,
        'feedback' => '훌륭하다고 칭찬을 해줘야 할 것 같았습니다.'
      ]);

      App\Artwork::create([
        'photo' => 'placehold.it&#47;640x480',
        'name' => '신나는 일러스트',
        'date' => '2016-01-01',
        'type_id' => 2,
        'student_id'=> 2,
        'size'=>'100호',
        'engagement' => 2,
        'completeness' => 5,
        'feedback' => '훌륭하다고 칭찬을 해줘야 할 것 같았습니다.'
      ]);
      App\Artwork::create([
        'photo' => 'placehold.it&#47;640x480',
        'name' => '열심히 만든 가구',
        'date' => '2016-01-02',
        'type_id' => 2,
        'student_id'=> 2,
        'size'=>'50호',
        'engagement' => 1,
        'completeness' => 4,
        'feedback' => '좀 잘 그렸네요.'
      ]);
      App\Artwork::create([
        'photo' => 'placehold.it&#47;640x480',
        'name' => '꽤 괜찮은 드로잉',
        'date' => '2016-02-02',
        'type_id' => 2,
        'student_id'=> 2,
        'size'=>'30호',
        'engagement' => 2,
        'completeness' => 5,
        'feedback' => '멋집니다. 멋져요.'
      ]);

      App\Artwork::create([
        'photo' => 'placehold.it&#47;640x480',
        'name' => '신나는 일러스트',
        'date' => '2016-01-01',
        'type_id' => 2,
        'student_id'=> 2,
        'size'=>'100호',
        'engagement' => 5,
        'completeness' => 1,
        'feedback' => '훌륭하다고 칭찬을 해줘야 할 것 같았습니다.'
      ]);
      App\Artwork::create([
        'photo' => 'placehold.it&#47;640x480',
        'name' => '열심히 만든 가구',
        'date' => '2016-01-02',
        'type_id' => 3,
        'student_id'=> 3,
        'size'=>'50호',
        'engagement' => 4,
        'completeness' => 2,
        'feedback' => '좀 잘 그렸네요.'
      ]);
      App\Artwork::create([
        'photo' => 'placehold.it&#47;640x480',
        'name' => '꽤 괜찮은 드로잉',
        'date' => '2016-02-02',
        'type_id' => 3,
        'student_id'=> 3,
        'size'=>'30호',
        'engagement' => 5,
        'completeness' => 3,
        'feedback' => '멋집니다. 멋져요.'
      ]);

      App\Artwork::create([
        'photo' => 'placehold.it&#47;640x480',
        'name' => '신나는 일러스트',
        'date' => '2016-01-11',
        'type_id' => 1,
        'student_id'=> 4,
        'size'=>'100호',
        'engagement' => 5,
        'completeness' => 5,
        'feedback' => '훌륭하다고 칭찬을 해줘야 할 것 같았습니다.'
      ]);
      App\Artwork::create([
        'photo' => 'placehold.it&#47;640x480',
        'name' => '열심히 그린 그림',
        'date' => '2016-01-22',
        'type_id' => 1,
        'student_id'=> 4,
        'size'=>'50호',
        'engagement' => 4,
        'completeness' => 4,
        'feedback' => '좀 잘 그렸네요.'
      ]);
      App\Artwork::create([
        'photo' => 'placehold.it&#47;640x480',
        'name' => '꽤 괜찮은 드로잉',
        'date' => '2016-02-12',
        'type_id' => 1,
        'student_id'=> 4,
        'size'=>'30호',
        'engagement' => 4,
        'completeness' => 5,
        'feedback' => '멋집니다. 멋져요.'
      ]);

      App\Artwork::create([
        'photo' => 'placehold.it&#47;640x480',
        'name' => '신나는 일러스트',
        'date' => '2016-01-11',
        'type_id' => 2,
        'student_id'=> 5,
        'size'=>'100호',
        'engagement' => 1,
        'completeness' => 1,
        'feedback' => '훌륭하다고 칭찬을 해줘야 할 것 같았습니다.'
      ]);
      App\Artwork::create([
        'photo' => 'placehold.it&#47;640x480',
        'name' => '열심히 그린 그림',
        'date' => '2016-01-22',
        'type_id' => 2,
        'student_id'=> 5,
        'size'=>'50호',
        'engagement' => 5,
        'completeness' => 4,
        'feedback' => '좀 잘 그렸네요.'
      ]);
      App\Artwork::create([
        'photo' => 'placehold.it&#47;640x480',
        'name' => '꽤 괜찮은 드로잉',
        'date' => '2016-02-12',
        'type_id' => 2,
        'student_id'=> 5,
        'size'=>'30호',
        'engagement' => 3,
        'completeness' => 5,
        'feedback' => '멋집니다. 멋져요.'
      ]);

      App\Artwork::create([
        'photo' => 'placehold.it&#47;640x480',
        'name' => '아름다운 풍경화!',
        'date' => '2016-01-11',
        'type_id' => 3,
        'student_id'=> 6,
        'size'=>'100호',
        'engagement' => 5,
        'completeness' => 5,
        'feedback' => '훌륭하다고 칭찬을 해줘야 할 것 같았습니다.'
      ]);
      App\Artwork::create([
        'photo' => 'placehold.it&#47;640x480',
        'name' => '끝내주는 인물화',
        'date' => '2016-01-22',
        'type_id' => 3,
        'student_id'=> 6,
        'size'=>'50호',
        'engagement' => 4,
        'completeness' => 3,
        'feedback' => '좀 잘 그렸네요.'
      ]);
      App\Artwork::create([
        'photo' => 'placehold.it&#47;640x480',
        'name' => '멋진 사진!',
        'date' => '2016-02-12',
        'type_id' => 3,
        'student_id'=> 6,
        'size'=>'30호',
        'engagement' => 3,
        'completeness' => 3,
        'feedback' => '잘 찍은 사진이네요.'
      ]);
    }
}
