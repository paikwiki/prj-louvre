<?php

use Illuminate\Database\Seeder;

class DummyDataSeeder extends Seeder
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
          'name' => '스튜디오420',
        ]);

        // tags
        App\Tag::create([
          'name' => '수채화',
        ]);
        App\Tag::create([
          'name' => '유화',
        ]);
        App\Tag::create([
          'name' => '판화',
        ]);
        App\Tag::create([
          'name' => '풍경화',
        ]);
        App\Tag::create([
          'name' => '오전반',
        ]);
        App\Tag::create([
          'name' => '오후반',
        ]);
        App\Tag::create([
          'name' => '사진',
        ]);
        App\Tag::create([
          'name' => '입체물',
        ]);
        App\Tag::create([
          'name' => '사진',
        ]);

        // types
        App\Type::create([
          'name' => '취미반',
        ]);
        App\Type::create([
          'name' => '입시반',
        ]);
        App\Type::create([
          'name' => '유학반',
        ]);
        App\Type::create([
          'name' => '편입반',
        ]);

        // user
        App\User::create([
          'uid' => 'test',
          'password' => bcrypt('test123'),
          'name' => 'test',
          'email' => 'test@test.com',
          'course_id' => 1,
        ]);

        // students
        App\Student::create([
          'name' => '백창현',
          'tel' => '010-000-1234',
          'email' => 'chpaik@minimue.com',
          'user_id'=> 1,
          // 'profile_pic' => 'mpfpic1',
          'birth' => '1990-07-17',
          'enroll_date' => '2016-12-01',
          'course_id'=> 1,
          'purpose' => '학원차리기',
          'status' =>'재학',
          'comment' =>'말을 잘 들음'
        ]);

        App\Student::create([
          'name' => '정준수',
          'tel' => '010-000-4321',
          'email' => 'sky@minimue.com',
          'user_id'=> 1,
          // 'profile_pic' => 'mpfpic1',
          'birth' => '1990-02-25',
          'enroll_date' => '2016-12-02',
          'course_id'=> 1,
          'purpose' => '상장하기',
          'status' =>'재학',
          'comment' =>'말을 잘 함'
        ]);

        App\Student::create([
          'name' => '손승우',
          'tel' => '010-000-5678',
          'email' => 'urustin@minimue.com',
          'user_id'=> 1,
          // 'profile_pic' => 'mpfpic1',
          'birth' => '1990-03-21',
          'enroll_date' => '2016-12-03',
          'course_id'=> 1,
          'purpose' => '프런트엔드 개발자 되기',
          'status' => '복무중',
          'comment' => '야간에 활동함'
        ]);

        App\Student::create([
          'name' => '김재훈',
          'tel' => '010-000-8765',
          'email' => 'jayjay88@minimue.com',
          'user_id'=> 1,
          // 'profile_pic' => 'mpfpic1',
          'birth' => '1990-05-11',
          'enroll_date' => '2016-10-13',
          'course_id'=> 1,
          'purpose' => '모두와 함께 커피 마시기',
          'status' => '재학',
          'comment' => '두콩 커피를 마심'
        ]);

        App\Student::create([
          'name' => '유웅기',
          'tel' => '080-330-8877',
          'email' => 'darren@minimue.com',
          'user_id'=> 1,
          // 'profile_pic' => 'mpfpic1',
          'birth' => '1990-08-11',
          'enroll_date' => '2016-10-03',
          'course_id'=> 1,
          'purpose' => '고객 가치 창출',
          'status' => '재학',
          'comment' => '애플을 매우 아낌'
        ]);

        App\Student::create([
          'name' => '김보영',
          'tel' => '010-000-1000',
          'email' => 'bong@minimue.com',
          'user_id'=> 1,
          // 'profile_pic' => 'mpfpic1',
          'birth' => '1990-01-11',
          'enroll_date' => '2016-09-13',
          'course_id'=> 1,
          'purpose' => '팀원 찾기',
          'status' => '재학',
          'comment' => '최근 맥북을 구입함'
        ]);

        // artwork
        App\Artwork::create([
          'photo' => 'placehold.it/640x480',
          'name' => '훌륭한 수채화!',
          'date' => '2016-01-01',
          'type_id' => 1,
          'student_id'=> 1,
          'size'=>'100호',
          'engagement' => 5,
          'completeness' => 2,
          'feedback' => '훌륭하다고 칭찬을 해줘야 할 것 같았습니다.'
        ]);
        App\Artwork::create([
          'photo' => 'placehold.it/640x480',
          'name' => '멋진 유화~',
          'date' => '2016-01-02',
          'type_id' => 1,
          'student_id'=> 1,
          'size'=>'50호',
          'engagement' => 4,
          'completeness' => 3,
          'feedback' => '훌륭하다고 칭찬을 해줘야 할 것 같았습니다.'
        ]);
        App\Artwork::create([
          'photo' => 'placehold.it/640x480',
          'name' => '멋진 정물화~',
          'date' => '2016-02-02',
          'type_id' => 1,
          'student_id'=> 1,
          'size'=>'30호',
          'engagement' => 2,
          'completeness' => 4,
          'feedback' => '훌륭하다고 칭찬을 해줘야 할 것 같았습니다.'
        ]);

        App\Artwork::create([
          'photo' => 'placehold.it/640x480',
          'name' => '훌륭한 수채화!',
          'date' => '2016-01-01',
          'type_id' => 2,
          'student_id'=> 2,
          'size'=>'100호',
          'engagement' => 2,
          'completeness' => 5,
          'feedback' => '훌륭하다고 칭찬을 해줘야 할 것 같았습니다.'
        ]);
        App\Artwork::create([
          'photo' => 'placehold.it/640x480',
          'name' => '멋진 유화~',
          'date' => '2016-01-02',
          'type_id' => 2,
          'student_id'=> 2,
          'size'=>'50호',
          'engagement' => 1,
          'completeness' => 4,
          'feedback' => '좀 잘 그렸네요.'
        ]);
        App\Artwork::create([
          'photo' => 'placehold.it/640x480',
          'name' => '멋진 정물화~',
          'date' => '2016-02-02',
          'type_id' => 2,
          'student_id'=> 2,
          'size'=>'30호',
          'engagement' => 2,
          'completeness' => 5,
          'feedback' => '멋집니다. 멋져요.'
        ]);

        App\Artwork::create([
          'photo' => 'placehold.it/640x480',
          'name' => '훌륭한 수채화!',
          'date' => '2016-01-01',
          'type_id' => 2,
          'student_id'=> 2,
          'size'=>'100호',
          'engagement' => 5,
          'completeness' => 1,
          'feedback' => '훌륭하다고 칭찬을 해줘야 할 것 같았습니다.'
        ]);
        App\Artwork::create([
          'photo' => 'placehold.it/640x480',
          'name' => '멋진 유화~',
          'date' => '2016-01-02',
          'type_id' => 3,
          'student_id'=> 3,
          'size'=>'50호',
          'engagement' => 4,
          'completeness' => 2,
          'feedback' => '좀 잘 그렸네요.'
        ]);
        App\Artwork::create([
          'photo' => 'placehold.it/640x480',
          'name' => '멋진 정물화~',
          'date' => '2016-02-02',
          'type_id' => 3,
          'student_id'=> 3,
          'size'=>'30호',
          'engagement' => 5,
          'completeness' => 3,
          'feedback' => '멋집니다. 멋져요.'
        ]);

        App\Artwork::create([
          'photo' => 'placehold.it/640x480',
          'name' => '훌륭한 수채화!',
          'date' => '2016-01-11',
          'type_id' => 1,
          'student_id'=> 4,
          'size'=>'100호',
          'engagement' => 5,
          'completeness' => 5,
          'feedback' => '훌륭하다고 칭찬을 해줘야 할 것 같았습니다.'
        ]);
        App\Artwork::create([
          'photo' => 'placehold.it/640x480',
          'name' => '멋진 그림',
          'date' => '2016-01-22',
          'type_id' => 1,
          'student_id'=> 4,
          'size'=>'50호',
          'engagement' => 4,
          'completeness' => 4,
          'feedback' => '좀 잘 그렸네요.'
        ]);
        App\Artwork::create([
          'photo' => 'placehold.it/640x480',
          'name' => '멋진 정물화~',
          'date' => '2016-02-12',
          'type_id' => 1,
          'student_id'=> 4,
          'size'=>'30호',
          'engagement' => 4,
          'completeness' => 5,
          'feedback' => '멋집니다. 멋져요.'
        ]);

        App\Artwork::create([
          'photo' => 'placehold.it/640x480',
          'name' => '훌륭한 수채화!',
          'date' => '2016-01-11',
          'type_id' => 2,
          'student_id'=> 5,
          'size'=>'100호',
          'engagement' => 1,
          'completeness' => 1,
          'feedback' => '훌륭하다고 칭찬을 해줘야 할 것 같았습니다.'
        ]);
        App\Artwork::create([
          'photo' => 'placehold.it/640x480',
          'name' => '멋진 그림',
          'date' => '2016-01-22',
          'type_id' => 2,
          'student_id'=> 5,
          'size'=>'50호',
          'engagement' => 5,
          'completeness' => 4,
          'feedback' => '좀 잘 그렸네요.'
        ]);
        App\Artwork::create([
          'photo' => 'placehold.it/640x480',
          'name' => '멋진 정물화~',
          'date' => '2016-02-12',
          'type_id' => 2,
          'student_id'=> 5,
          'size'=>'30호',
          'engagement' => 3,
          'completeness' => 5,
          'feedback' => '멋집니다. 멋져요.'
        ]);

        App\Artwork::create([
          'photo' => 'placehold.it/640x480',
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
          'photo' => 'placehold.it/640x480',
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
          'photo' => 'placehold.it/640x480',
          'name' => '멋진 사진!',
          'date' => '2016-02-12',
          'type_id' => 3,
          'student_id'=> 6,
          'size'=>'30호',
          'engagement' => 3,
          'completeness' => 3,
          'feedback' => '잘 찍은 사진이네요.'
        ]);


        // artwork_tag
        App\Artwork_tag::create([
          'artwork_id' => 1,
          'tag_id' => 1,
        ]);
        App\Artwork_tag::create([
          'artwork_id' => 1,
          'tag_id' => 3,
        ]);
        App\Artwork_tag::create([
          'artwork_id' => 1,
          'tag_id' => 6,
        ]);

        App\Artwork_tag::create([
          'artwork_id' => 2,
          'tag_id' => 2,
        ]);
        App\Artwork_tag::create([
          'artwork_id' => 2,
          'tag_id' => 3,
        ]);
        App\Artwork_tag::create([
          'artwork_id' => 2,
          'tag_id' => 7,
        ]);

        App\Artwork_tag::create([
          'artwork_id' => 3,
          'tag_id' => 4,
        ]);
        App\Artwork_tag::create([
          'artwork_id' => 3,
          'tag_id' => 5,
        ]);
        App\Artwork_tag::create([
          'artwork_id' => 3,
          'tag_id' => 6,
        ]);
        App\Artwork_tag::create([
          'artwork_id' => 3,
          'tag_id' => 7,
        ]);
        App\Artwork_tag::create([
          'artwork_id' => 3,
          'tag_id' => 8,
        ]);
        App\Artwork_tag::create([
          'artwork_id' => 3,
          'tag_id' => 9,
        ]);

        App\Artwork_tag::create([
          'artwork_id' => 4,
          'tag_id' => 1,
        ]);
        App\Artwork_tag::create([
          'artwork_id' => 4,
          'tag_id' => 3,
        ]);
        App\Artwork_tag::create([
          'artwork_id' => 4,
          'tag_id' => 5,
        ]);
        App\Artwork_tag::create([
          'artwork_id' => 4,
          'tag_id' => 6,
        ]);
        App\Artwork_tag::create([
          'artwork_id' => 4,
          'tag_id' => 7,
        ]);

        App\Artwork_tag::create([
          'artwork_id' => 5,
          'tag_id' => 2,
        ]);
        App\Artwork_tag::create([
          'artwork_id' => 5,
          'tag_id' => 4,
        ]);
        App\Artwork_tag::create([
          'artwork_id' => 5,
          'tag_id' => 6,
        ]);
        App\Artwork_tag::create([
          'artwork_id' => 5,
          'tag_id' => 7,
        ]);

        App\Artwork_tag::create([
          'artwork_id' => 6,
          'tag_id' => 5,
        ]);
        App\Artwork_tag::create([
          'artwork_id' => 6,
          'tag_id' => 6,
        ]);
        App\Artwork_tag::create([
          'artwork_id' => 6,
          'tag_id' => 8,
        ]);

        App\Artwork_tag::create([
          'artwork_id' => 7,
          'tag_id' => 8,
        ]);
        App\Artwork_tag::create([
          'artwork_id' => 7,
          'tag_id' => 9,
        ]);

        App\Artwork_tag::create([
          'artwork_id' => 8,
          'tag_id' => 1,
        ]);
        App\Artwork_tag::create([
          'artwork_id' => 8,
          'tag_id' => 6,
        ]);

        App\Artwork_tag::create([
          'artwork_id' => 9,
          'tag_id' => 8,
        ]);
        App\Artwork_tag::create([
          'artwork_id' => 9,
          'tag_id' => 9,
        ]);

        App\Artwork_tag::create([
          'artwork_id' => 10,
          'tag_id' => 1,
        ]);
        App\Artwork_tag::create([
          'artwork_id' => 10,
          'tag_id' => 2,
        ]);
        App\Artwork_tag::create([
          'artwork_id' => 10,
          'tag_id' => 7,
        ]);
        App\Artwork_tag::create([
          'artwork_id' => 10,
          'tag_id' => 8,
        ]);

        App\Artwork_tag::create([
          'artwork_id' => 11,
          'tag_id' => 4,
        ]);
        App\Artwork_tag::create([
          'artwork_id' => 11,
          'tag_id' => 5,
        ]);
        App\Artwork_tag::create([
          'artwork_id' => 11,
          'tag_id' => 7,
        ]);
        App\Artwork_tag::create([
          'artwork_id' => 11,
          'tag_id' => 9,
        ]);

        App\Artwork_tag::create([
          'artwork_id' => 12,
          'tag_id' => 6,
        ]);
        App\Artwork_tag::create([
          'artwork_id' => 12,
          'tag_id' => 7,
        ]);
        App\Artwork_tag::create([
          'artwork_id' => 12,
          'tag_id' => 8,
        ]);

        App\Artwork_tag::create([
          'artwork_id' => 13,
          'tag_id' => 2,
        ]);
        App\Artwork_tag::create([
          'artwork_id' => 13,
          'tag_id' => 3,
        ]);
        App\Artwork_tag::create([
          'artwork_id' => 13,
          'tag_id' => 4,
        ]);

        App\Artwork_tag::create([
          'artwork_id' => 14,
          'tag_id' => 7,
        ]);
        App\Artwork_tag::create([
          'artwork_id' => 14,
          'tag_id' => 5,
        ]);
        App\Artwork_tag::create([
          'artwork_id' => 14,
          'tag_id' => 3,
        ]);

        App\Artwork_tag::create([
          'artwork_id' => 15,
          'tag_id' => 6,
        ]);
        App\Artwork_tag::create([
          'artwork_id' => 15,
          'tag_id' => 3,
        ]);
        App\Artwork_tag::create([
          'artwork_id' => 15,
          'tag_id' => 2,
        ]);

        App\Artwork_tag::create([
          'artwork_id' => 16,
          'tag_id' => 4,
        ]);
        App\Artwork_tag::create([
          'artwork_id' => 16,
          'tag_id' => 1,
        ]);
        App\Artwork_tag::create([
          'artwork_id' => 16,
          'tag_id' => 3,
        ]);

        App\Artwork_tag::create([
          'artwork_id' => 17,
          'tag_id' => 3,
        ]);
        App\Artwork_tag::create([
          'artwork_id' => 17,
          'tag_id' => 4,
        ]);
        App\Artwork_tag::create([
          'artwork_id' => 17,
          'tag_id' => 5,
        ]);

        App\Artwork_tag::create([
          'artwork_id' => 18,
          'tag_id' => 4,
        ]);
        App\Artwork_tag::create([
          'artwork_id' => 18,
          'tag_id' => 6,
        ]);
        App\Artwork_tag::create([
          'artwork_id' => 18,
          'tag_id' => 9,
        ]);












        // album
        App\Album::create([
          'user_id' => 1,
          'artwork_id' => 1,
        ]);
        App\Album::create([
          'user_id' => 1,
          'artwork_id' => 3,
        ]);
        App\Album::create([
          'user_id' => 1,
          'artwork_id' => 4,
        ]);
        App\Album::create([
          'user_id' => 1,
          'artwork_id' => 5,
        ]);
        App\Album::create([
          'user_id' => 1,
          'artwork_id' => 8,
        ]);
        App\Album::create([
          'user_id' => 1,
          'artwork_id' => 10,
        ]);
        App\Album::create([
          'user_id' => 1,
          'artwork_id' => 12,
        ]);
        App\Album::create([
          'user_id' => 1,
          'artwork_id' => 15,
        ]);
        App\Album::create([
          'user_id' => 1,
          'artwork_id' => 18,
        ]);

        // attendances
        App\Attendance::create([
          'student_id' => 1,
          'mon' => 1,
          'tue' => 0,
          'wed' => 0,
          'thu' => 0,
          'fri' => 0,
          'sat' => 0,
          'sun' => 0
        ]);

        App\Attendance::create([
          'student_id' => 2,
          'mon' => 1,
          'tue' => 0,
          'wed' => 0,
          'thu' => 0,
          'fri' => 0,
          'sat' => 0,
          'sun' => 0
        ]);

        App\Attendance::create([
          'student_id' => 3,
          'mon' => 0,
          'tue' => 1,
          'wed' => 0,
          'thu' => 1,
          'fri' => 0,
          'sat' => 0,
          'sun' => 0
        ]);

        App\Attendance::create([
          'student_id' => 4,
          'mon' => 0,
          'tue' => 0,
          'wed' => 1,
          'thu' => 0,
          'fri' => 1,
          'sat' => 0,
          'sun' => 0
        ]);

        App\Attendance::create([
          'student_id' => 5,
          'mon' => 0,
          'tue' => 0,
          'wed' => 0,
          'thu' => 1,
          'fri' => 1,
          'sat' => 0,
          'sun' => 0
        ]);

        App\Attendance::create([
          'student_id' => 6,
          'mon' => 1,
          'tue' => 1,
          'wed' => 0,
          'thu' => 1,
          'fri' => 0,
          'sat' => 0,
          'sun' => 0
        ]);
    }
}
