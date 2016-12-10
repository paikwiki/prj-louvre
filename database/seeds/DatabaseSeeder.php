<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Schema::disableForeignKeyConstraints();
      /*   $this->call(CourseTableSeeder::class);
         $this->call(TagTableSeeder::class);
         $this->call(TypeTableSeeder::class);
         $this->call(UserTableSeeder::class);
         */
        //  App\Course::create([
        //    'name' => 'mname1',
        //  ]);
        //  App\Tag::create([
        //    'name' => 'mtagname1',
        //  ]);
        //  App\Type::create([
        //    'name' => 'mtypename1',
        //  ]);
        //   App\User::create([
        //     'uid' => 'muid1',
        //     'name' => 'musername1',
        //     'email' => 'muemail1@a.b',
        //     'course_id'=>1,
        //     'password' => bcrypt('password')
        //   ]);
        //  App\Album::create([
        //    'user_id' => 1,
        //    'artwork_id' => 1
        //  ]);
        //  App\Student::create([
        //    'name' => 'mname1',
        //    'tel' => 'mtel1',
        //    'email' => 'memail1',
        //    'user_id'=> 1,
        //    'profile_pic' => 'mpfpic1',
        //    'birth' => 'mbirth1',
        //    'enroll_date' =>'menrolldate1',
        //    'course_id'=>1,
        //    'purpose' =>'mpurpose1',
        //    'status' =>'mstatus1',
        //    'comment' =>'mcomment1'
        //  ]);
        //  App\Artwork::create([
        //    'photo' => 'mphoto1',
        //    'name' => 'mname1',
        //    'date' => '2016-01-01',
        //    'type_id' => 1,
        //    'student_id'=> 1,
        //    'size'=>'msize1',
        //    'engagement' => 1,
        //    'completeness' =>1,
        //    'feedback' => 'mfeedback1'
        //  ]);
        //  App\Attendance::create([
        //    'student_id' => 1,
        //    'mon' => 1,
        //    'tue' => 1,
        //    'wed' => 1,
        //    'thu' => 1,
        //    'fri' => 1,
        //    'sat' => 1,
        //    'sun' => 1
        //  ]);

         App\Artwork_tag::create([
           'artwork_id' => 1,
           'tag_id' => 1
         ]);
         App\Artwork_tag::create([
           'artwork_id' => 1,
           'tag_id' => 2
         ]);
         App\Artwork_tag::create([
           'artwork_id' => 1,
           'tag_id' => 3
         ]);


    }
}
