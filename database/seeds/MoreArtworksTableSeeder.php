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

      // course
      App\Course::create([
        'name' => '빠리지앵스튜디오',
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

      // user
      App\User::create([
        'uid' => 'test',
        'password' => bcrypt('test123'),
        'name' => '피카소',
        'email' => 'test@test.com',
        'course_id' => 1,
      ]);

// 학생
      App\Student::create([
      "name" => "고영준",
      "tel" => "010-4451-3738",
      "email" => "yjko@gmail.com",
      "user_id" =>1,
      "profile_pic" => "/pfpic/s0001.jpg",
      "birth" => "1980-04-12",
      "enroll_date" => "2016-07-03",
      "course_id" => 1,
      "purpose" => "세계최고의 일러스트레이터 되기",
      "status" =>"재학",
      "comment" =>"",
      ]);

      App\Student::create([
      "name" => "김미환",
      "tel" => "010-4451-3738",
      "email" => "beautyhwani@gmail.com",
      "user_id" =>1,
      "profile_pic" => "/pfpic/s0002.jpg",
      "birth" => "1985-03-28",
      "enroll_date" => "2016-09-13",
      "course_id" => 1,
      "purpose" => "여행다니며 스케치 하기",
      "status" =>"재학",
      "comment" =>"",
      ]);

      App\Student::create([
      "name" => "김소희",
      "tel" => "010-4451-3738",
      "email" => "sooohee2@gmail.com",
      "user_id" =>1,
      "profile_pic" => "/pfpic/s0003.jpg",
      "birth" => "1987-09-11",
      "enroll_date" => "2016-03-06",
      "course_id" => 1,
      "purpose" => "원하는대로 표현하기",
      "status" =>"재학",
      "comment" =>"",
      ]);

      App\Student::create([
      "name" => "김태현",
      "tel" => "010-4451-3738",
      "email" => "xogusrla@gmail.com",
      "user_id" =>1,
      "profile_pic" => "/pfpic/s0001.jpg",
      "birth" => "1979-12-16",
      "enroll_date" => "2016-04-07",
      "course_id" => 1,
      "purpose" => "유화를 잘 그리기",
      "status" =>"재학",
      "comment" =>"",
      ]);

      App\Student::create([
      "name" => "민나림",
      "tel" => "010-4451-3738",
      "email" => "naforrestmin@hanmail.net",
      "user_id" =>1,
      "profile_pic" => "/pfpic/s0002.jpg",
      "birth" => "1983-02-18",
      "enroll_date" => "2016-09-13",
      "course_id" => 1,
      "purpose" => "전반적인 그림 실력 향상하기",
      "status" =>"재학",
      "comment" =>"",
      ]);

      App\Student::create([
      "name" => "박원표",
      "tel" => "010-4451-3738",
      "email" => "votemeplz@naver.com",
      "user_id" =>1,
      "profile_pic" => "/pfpic/s0003.jpg",
      "birth" => "1984-12-19",
      "enroll_date" => "2016-03-01",
      "course_id" => 1,
      "purpose" => "그냥 재밌게 그리기",
      "status" =>"재학",
      "comment" =>"",
      ]);

      App\Student::create([
      "name" => "손경환",
      "tel" => "010-4451-3738",
      "email" => "handhand01@gmail.com",
      "user_id" =>1,
      "profile_pic" => "/pfpic/s0001.jpg",
      "birth" => "1981-03-17",
      "enroll_date" => "2016-03-17",
      "course_id" => 1,
      "purpose" => "한 달에 작품 하나 만들기",
      "status" =>"재학",
      "comment" =>"",
      ]);

      App\Student::create([
      "name" => "이희욱",
      "tel" => "010-4451-3738",
      "email" => "happyday86@gmail.com",
      "user_id" =>1,
      "profile_pic" => "/pfpic/s0002.jpg",
      "birth" => "1986-07-14",
      "enroll_date" => "2016-04-19",
      "course_id" => 1,
      "purpose" => "사람을 잘 그리기",
      "status" =>"재학",
      "comment" =>"",
      ]);

      App\Student::create([
      "name" => "정석우",
      "tel" => "010-4451-3738",
      "email" => "torrestantan@naver.com",
      "user_id" =>1,
      "profile_pic" => "/pfpic/s0003.jpg",
      "birth" => "1982-03-03",
      "enroll_date" => "2016-04-22",
      "course_id" => 1,
      "purpose" => "미술이 어떤 건지 알아보기",
      "status" =>"재학",
      "comment" =>"",
      ]);


      // 출석
App\Attendance::create([
"student_id" =>1,
"mon" =>1,
"tue" =>0,
"wed" =>1,
"thu" =>0,
"fri" =>0,
"sat" =>0,
"sun" =>0,
]);


App\Attendance::create([
"student_id" =>2,
"mon" =>0,
"tue" =>1,
"wed" =>0,
"thu" =>1,
"fri" =>0,
"sat" =>0,
"sun" =>0,
]);

App\Attendance::create([
"student_id" =>3,
"mon" =>1,
"tue" =>0,
"wed" =>1,
"thu" =>0,
"fri" =>0,
"sat" =>1,
"sun" =>1,
]);

App\Attendance::create([
"student_id" =>4,
"mon" =>0,
"tue" =>1,
"wed" =>0,
"thu" =>1,
"fri" =>0,
"sat" =>0,
"sun" =>0,
]);

App\Attendance::create([
"student_id" =>5,
"mon" =>0,
"tue" =>0,
"wed" =>1,
"thu" =>0,
"fri" =>1,
"sat" =>0,
"sun" =>0,
]);

App\Attendance::create([
"student_id" =>6,
"mon" =>0,
"tue" =>0,
"wed" =>0,
"thu" =>0,
"fri" =>0,
"sat" =>1,
"sun" =>1,
]);

App\Attendance::create([
"student_id" =>7,
"mon" =>1,
"tue" =>0,
"wed" =>0,
"thu" =>0,
"fri" =>1,
"sat" =>0,
"sun" =>0,
]);

App\Attendance::create([
"student_id" =>8,
"mon" =>0,
"tue" =>0,
"wed" =>1,
"thu" =>0,
"fri" =>0,
"sat" =>1,
"sun" =>0,
]);

App\Attendance::create([
"student_id" =>9,
"mon" =>0,
"tue" =>1,
"wed" =>0,
"thu" =>1,
"fri" =>0,
"sat" =>0,
"sun" =>0,
]);

// 작품
App\Artwork::create([
"photo" => "/files/s010001.jpg",
"name" => "붉은벽",
"date" => "2016-07-05",
"type_id" =>1,
"student_id"=>1,
"size"=>"10호",
"engagement" =>10,
"completeness" =>10,
"feedback" => "정말 붉습니다.",
]);



App\Artwork::create([
"photo" => "/files/s010002.jpg",
"name" => "뿔-1",
"date" => "2016-07-11",
"type_id" =>2,
"student_id"=>1,
"size"=>"10호",
"engagement" =>9,
"completeness" =>9,
"feedback" => "잘 하고 있습니다.",
]);

App\Artwork::create([
"photo" => "/files/s010003.jpg",
"name" => "뿔-2",
"date" => "2016-08-12",
"type_id" =>2,
"student_id"=>1,
"size"=>"10호",
"engagement" =>9,
"completeness" =>8,
"feedback" => "잘 하고 있습니다.",
]);



App\Artwork::create([
"photo" => "/files/s010004.jpg",
"name" => "우리는어디로가는가",
"date" => "2016-09-20",
"type_id" =>4,
"student_id"=>1,
"size"=>"10호",
"engagement" =>3,
"completeness" =>7,
"feedback" => "색을 좀 더 강하게 쓰면 좋겠습니다.",
]);

App\Artwork::create([
"photo" => "/files/s010005.jpg",
"name" => "영역표시",
"date" => "2016-10-14",
"type_id" =>5,
"student_id"=>1,
"size"=>"10호",
"engagement" =>5,
"completeness" =>6,
"feedback" => "명확한 형태가 매력적인 그림입니다.",
]);



App\Artwork::create([
"photo" => "/files/s010006.jpg",
"name" => "뿔-3",
"date" => "2016-11-04",
"type_id" =>3,
"student_id"=>1,
"size"=>"10호",
"engagement" =>4,
"completeness" =>5,
"feedback" => "전작에 비해 완성도가 떨어지고 있습니다.",
]);


App\Artwork::create([
"photo" => "/files/s010007.jpg",
"name" => "습작1",
"date" => "2016-12-11",
"type_id" =>5,
"student_id"=>1,
"size"=>"10호",
"engagement" =>2,
"completeness" =>4,
"feedback" => "완성도도 떨어지고, 수업시간에 몰입을 못 하고 있습니다.",
]);



App\Artwork::create([
"photo" => "/files/s010008.jpg",
"name" => "습작2",
"date" => "2016-12-15",
"type_id" =>1,
"student_id"=>1,
"size"=>"10호",
"engagement" =>2,
"completeness" =>3,
"feedback" => "완성도도 떨어지고, 수업시간에 몰입을 못 하고 있습니다.",
]);

App\Artwork::create([
"photo" => "/files/s020001.jpg",
"name" => "연습1",
"date" => "2016-09-17",
"type_id" =>2,
"student_id"=>2,
"size"=>"10호",
"engagement" =>1,
"completeness" =>1,
"feedback" => "첫 작품입니다. 앞으로 많이 배워야 합니다.",
]);



App\Artwork::create([
"photo" => "/files/s020002.jpg",
"name" => "시계에대한단상",
"date" => "2016-09-19",
"type_id" =>1,
"student_id"=>2,
"size"=>"10호",
"engagement" =>2,
"completeness" =>2,
"feedback" => "형태를 더 명확하게 그려야합니다.",
]);

App\Artwork::create([
"photo" => "/files/s020003.jpg",
"name" => "자화상",
"date" => "2016-09-24",
"type_id" =>1,
"student_id"=>2,
"size"=>"10호",
"engagement" =>4,
"completeness" =>3,
"feedback" => "자신의 얼굴을 그린 그림입니다.",
]);



App\Artwork::create([
"photo" => "/files/s020004.jpg",
"name" => "우리엄마가너랑놀지말래",
"date" => "2016-10-10",
"type_id" =>3,
"student_id"=>2,
"size"=>"10호",
"engagement" =>5,
"completeness" =>4,
"feedback" => "얼굴에 관심이 많은 것 같습니다.",
]);

App\Artwork::create([
"photo" => "/files/s020005.jpg",
"name" => "닭의탈을쓴",
"date" => "2016-10-14",
"type_id" =>4,
"student_id"=>2,
"size"=>"10호",
"engagement" =>6,
"completeness" =>5,
"feedback" => "몰입도와 완성도 모두 높아지고 있습니다.",
]);



App\Artwork::create([
"photo" => "/files/s020006.jpg",
"name" => "행렬이말한다",
"date" => "2016-10-19",
"type_id" =>5,
"student_id"=>2,
"size"=>"10호",
"engagement" =>6,
"completeness" =>6,
"feedback" => "세계에 대한 고민을 담은 작품입니다.",
]);


App\Artwork::create([
"photo" => "/files/s020007.jpg",
"name" => "그래서우리는",
"date" => "2016-11-05",
"type_id" =>1,
"student_id"=>2,
"size"=>"10호",
"engagement" =>5,
"completeness" =>7,
"feedback" => "관계에 대한 고민을 담은 작품입니다.",
]);



App\Artwork::create([
"photo" => "/files/s020008.jpg",
"name" => "푸른실내",
"date" => "2016-11-11",
"type_id" =>2,
"student_id"=>2,
"size"=>"10호",
"engagement" =>7,
"completeness" =>8,
"feedback" => "색채가 강렬합니다.",
]);

App\Artwork::create([
"photo" => "/files/s020007.jpg",
"name" => "그래서우리는",
"date" => "2016-11-05",
"type_id" =>1,
"student_id"=>2,
"size"=>"10호",
"engagement" =>5,
"completeness" =>7,
"feedback" => "관계에 대한 고민을 담은 작품입니다.",
]);



App\Artwork::create([
"photo" => "/files/s020008.jpg",
"name" => "푸른실내",
"date" => "2016-11-11",
"type_id" =>2,
"student_id"=>2,
"size"=>"10호",
"engagement" =>7,
"completeness" =>8,
"feedback" => "색채가 강렬합니다.",
]);

App\Artwork::create([
"photo" => "/files/s020009.jpg",
"name" => "붉은야외",
"date" => "2016-11-20",
"type_id" =>4,
"student_id"=>2,
"size"=>"10호",
"engagement" =>8,
"completeness" =>9,
"feedback" => "색채가 강렬합니다.",
]);



App\Artwork::create([
"photo" => "/files/s020010.jpg",
"name" => "연습2",
"date" => "2016-11-28",
"type_id" =>3,
"student_id"=>2,
"size"=>"10호",
"engagement" =>9,
"completeness" =>10,
"feedback" => "연습작품입니다.",
]);

App\Artwork::create([
"photo" => "/files/s020011.jpg",
"name" => "하하하하",
"date" => "2016-11-30",
"type_id" =>1,
"student_id"=>2,
"size"=>"10호",
"engagement" =>9,
"completeness" =>10,
"feedback" => "훌륭합니다.",
]);



App\Artwork::create([
"photo" => "/files/s020012.jpg",
"name" => "카프카",
"date" => "2016-12-02",
"type_id" =>1,
"student_id"=>2,
"size"=>"10호",
"engagement" =>10,
"completeness" =>9,
"feedback" => "내면의 변화를 그렸다고합니다.",
]);

App\Artwork::create([
"photo" => "/files/s020013.jpg",
"name" => "그녀의얼굴",
"date" => "2016-12-10",
"type_id" =>5,
"student_id"=>2,
"size"=>"10호",
"engagement" =>10,
"completeness" =>10,
"feedback" => "초상화를 그리고 있습니다.",
]);



App\Artwork::create([
"photo" => "/files/s020014.jpg",
"name" => "그녀의얼굴2",
"date" => "2016-12-14",
"type_id" =>1,
"student_id"=>2,
"size"=>"10호",
"engagement" =>10,
"completeness" =>10,
"feedback" => "초상화를 그리고 있습니다.",
]);

App\Artwork::create([
"photo" => "/files/s030001.jpg",
"name" => "공중정원",
"date" => "2016-03-04",
"type_id" =>1,
"student_id"=>3,
"size"=>"10호",
"engagement" =>8,
"completeness" =>9,
"feedback" => "평화로운 분위기가 매력적입니다.",
]);



App\Artwork::create([
"photo" => "/files/s030002.jpg",
"name" => "어느더운날의제주도",
"date" => "2016-03-14",
"type_id" =>2,
"student_id"=>3,
"size"=>"10호",
"engagement" =>8,
"completeness" =>8,
"feedback" => "여행의 스케치를 담고 있습니다.",
]);

App\Artwork::create([
"photo" => "/files/s030003.jpg",
"name" => "여행기3",
"date" => "2016-04-01",
"type_id" =>2,
"student_id"=>3,
"size"=>"10호",
"engagement" =>9,
"completeness" =>9,
"feedback" => "여행의 스케치를 담고 있습니다.",
]);



App\Artwork::create([
"photo" => "/files/s030004.jpg",
"name" => "여행기4",
"date" => "2016-04-08",
"type_id" =>2,
"student_id"=>3,
"size"=>"10호",
"engagement" =>9,
"completeness" =>8,
"feedback" => "여행의 스케치를 담고 있습니다.",
]);


App\Artwork::create([
"photo" => "/files/s030005.jpg",
"name" => "트럼프와느와르",
"date" => "2016-05-05",
"type_id" =>2,
"student_id"=>3,
"size"=>"10호",
"engagement" =>8,
"completeness" =>7,
"feedback" => "인물의 구도가 인상적입니다.",
]);



App\Artwork::create([
"photo" => "/files/s030006.jpg",
"name" => "아맛있다",
"date" => "2016-05-20",
"type_id" =>2,
"student_id"=>3,
"size"=>"10호",
"engagement" =>9,
"completeness" =>8,
"feedback" => "선을 잘 씁니다.",
]);


App\Artwork::create([
"photo" => "/files/s030007.jpg",
"name" => "땡글땡글",
"date" => "2016-05-30",
"type_id" =>3,
"student_id"=>3,
"size"=>"10호",
"engagement" =>7,
"completeness" =>9,
"feedback" => "선을 잘 씁니다.",
]);



App\Artwork::create([
"photo" => "/files/s040001.jpg",
"name" => "시위의불길",
"date" => "2016-04-10",
"type_id" =>4,
"student_id"=>4,
"size"=>"10호",
"engagement" =>5,
"completeness" =>7,
"feedback" => "구성이 매력적입니다.",
]);

App\Artwork::create([
"photo" => "/files/s040002.jpg",
"name" => "오늘의서울",
"date" => "2016-04-30",
"type_id" =>5,
"student_id"=>4,
"size"=>"10호",
"engagement" =>4,
"completeness" =>8,
"feedback" => "색을 좀 더 강하게 쓰면 좋겠습니다.",
]);



App\Artwork::create([
"photo" => "/files/s040003.jpg",
"name" => "야이거봐",
"date" => "2016-05-07",
"type_id" =>5,
"student_id"=>4,
"size"=>"10호",
"engagement" =>5,
"completeness" =>7,
"feedback" => "몰입도와 완성도 모두 높아지고 있습니다.",
]);


App\Artwork::create([
"photo" => "/files/s040004.jpg",
"name" => "짐은세종이니라",
"date" => "2016-06-09",
"type_id" =>5,
"student_id"=>4,
"size"=>"10호",
"engagement" =>6,
"completeness" =>8,
"feedback" => "세계에 대한 고민을 담은 작품입니다.",
]);



App\Artwork::create([
"photo" => "/files/s040005.jpg",
"name" => "선서",
"date" => "2016-07-18",
"type_id" =>4,
"student_id"=>4,
"size"=>"10호",
"engagement" =>5,
"completeness" =>9,
"feedback" => "관계에 대한 고민을 담은 작품입니다.",
]);

App\Artwork::create([
"photo" => "/files/s040006.jpg",
"name" => "이게뭐야",
"date" => "2016-08-15",
"type_id" =>2,
"student_id"=>4,
"size"=>"10호",
"engagement" =>4,
"completeness" =>8,
"feedback" => "색채가 강렬합니다.",
]);



App\Artwork::create([
"photo" => "/files/s040007.jpg",
"name" => "어서옵쇼",
"date" => "2016-09-20",
"type_id" =>1,
"student_id"=>4,
"size"=>"10호",
"engagement" =>7,
"completeness" =>7,
"feedback" => "색채가 강렬합니다.",
]);

App\Artwork::create([
"photo" => "/files/s050001.jpg",
"name" => "사과1",
"date" => "2016-09-21",
"type_id" =>3,
"student_id"=>5,
"size"=>"10호",
"engagement" =>10,
"completeness" =>4,
"feedback" => "잘 하고 있습니다.",
]);



App\Artwork::create([
"photo" => "/files/s050002.jpg",
"name" => "사과2",
"date" => "2016-09-30",
"type_id" =>4,
"student_id"=>5,
"size"=>"10호",
"engagement" =>10,
"completeness" =>5,
"feedback" => "사물을 잘 뜯어봅니다.",
]);

App\Artwork::create([
"photo" => "/files/s050003.jpg",
"name" => "사과3",
"date" => "2016-10-08",
"type_id" =>5,
"student_id"=>5,
"size"=>"10호",
"engagement" =>10,
"completeness" =>5,
"feedback" => "완성도는 좋으나 수업시간에 몰입을 못 하고 있습니다.",
]);



App\Artwork::create([
"photo" => "/files/s050004.jpg",
"name" => "색연습1",
"date" => "2016-10-14",
"type_id" =>4,
"student_id"=>5,
"size"=>"10호",
"engagement" =>10,
"completeness" =>8,
"feedback" => "색을 헤아리는 능력이 뛰어납니다.",
]);

App\Artwork::create([
"photo" => "/files/s050005.jpg",
"name" => "사과4",
"date" => "2016-11-01",
"type_id" =>4,
"student_id"=>5,
"size"=>"10호",
"engagement" =>10,
"completeness" =>4,
"feedback" => "사물을 잘 뜯어봅니다.",
]);



App\Artwork::create([
"photo" => "/files/s050006.jpg",
"name" => "세포1",
"date" => "2016-11-09",
"type_id" =>4,
"student_id"=>5,
"size"=>"10호",
"engagement" =>10,
"completeness" =>7,
"feedback" => "랜덤한 형태에 관심이 많습니다.",
]);

App\Artwork::create([
"photo" => "/files/s050007.jpg",
"name" => "세포2",
"date" => "2016-11-22",
"type_id" =>1,
"student_id"=>5,
"size"=>"10호",
"engagement" =>10,
"completeness" =>8,
"feedback" => "랜덤한 형태에 관심이 많습니다. 몰입을 잘 합니다.",
]);



App\Artwork::create([
"photo" => "/files/s050008.jpg",
"name" => "고기",
"date" => "2016-12-04",
"type_id" =>2,
"student_id"=>5,
"size"=>"10호",
"engagement" =>8,
"completeness" =>8,
"feedback" => "고기를 좋아합니다.",
]);

App\Artwork::create([
"photo" => "/files/s060001.jpg",
"name" => "풍경1",
"date" => "2016-03-25",
"type_id" =>3,
"student_id"=>6,
"size"=>"10호",
"engagement" =>9,
"completeness" =>6,
"feedback" => "풍경 스케치를 담고 있습니다.",
]);



App\Artwork::create([
"photo" => "/files/s060002.jpg",
"name" => "풍경2",
"date" => "2016-04-04",
"type_id" =>1,
"student_id"=>6,
"size"=>"10호",
"engagement" =>8,
"completeness" =>5,
"feedback" => "풍경 스케치를 담고 있습니다.",
]);

App\Artwork::create([
"photo" => "/files/s060003.jpg",
"name" => "풍경3",
"date" => "2016-05-09",
"type_id" =>2,
"student_id"=>6,
"size"=>"10호",
"engagement" =>7,
"completeness" =>6,
"feedback" => "풍경 스케치를 담고 있습니다.",
]);



App\Artwork::create([
"photo" => "/files/s060004.jpg",
"name" => "풍경4",
"date" => "2016-06-17",
"type_id" =>2,
"student_id"=>6,
"size"=>"10호",
"engagement" =>5,
"completeness" =>7,
"feedback" => "풍경 스케치를 담고 있습니다.",
]);

App\Artwork::create([
"photo" => "/files/s060005.jpg",
"name" => "풍경5",
"date" => "2016-07-09",
"type_id" =>1,
"student_id"=>6,
"size"=>"10호",
"engagement" =>7,
"completeness" =>4,
"feedback" => "풍경 스케치를 담고 있습니다.",
]);



App\Artwork::create([
"photo" => "/files/s060006.jpg",
"name" => "황혼",
"date" => "2016-08-20",
"type_id" =>1,
"student_id"=>6,
"size"=>"10호",
"engagement" =>6,
"completeness" =>2,
"feedback" => "풍경 스케치를 담고 있습니다.",
]);

App\Artwork::create([
"photo" => "/files/s060007.jpg",
"name" => "wave",
"date" => "2016-09-11",
"type_id" =>2,
"student_id"=>6,
"size"=>"10호",
"engagement" =>8,
"completeness" =>9,
"feedback" => "풍경 스케치를 담고 있습니다.",
]);



App\Artwork::create([
"photo" => "/files/s060008.jpg",
"name" => "오지마",
"date" => "2016-11-05",
"type_id" =>2,
"student_id"=>6,
"size"=>"10호",
"engagement" =>9,
"completeness" =>10,
"feedback" => "걱정이 많은 것 같습니다.",
]);

App\Artwork::create([
"photo" => "/files/s070001.jpg",
"name" => "소폭발",
"date" => "2016-04-03",
"type_id" =>5,
"student_id"=>7,
"size"=>"10호",
"engagement" =>2,
"completeness" =>2,
"feedback" => "색채가 강렬합니다.",
]);



App\Artwork::create([
"photo" => "/files/s070002.jpg",
"name" => "멀리서가까이",
"date" => "2016-04-25",
"type_id" =>4,
"student_id"=>7,
"size"=>"10호",
"engagement" =>3,
"completeness" =>4,
"feedback" => "색채가 강렬합니다.",
]);

App\Artwork::create([
"photo" => "/files/s070003.jpg",
"name" => "seeing is believing",
"date" => "2016-05-30",
"type_id" =>3,
"student_id"=>7,
"size"=>"10호",
"engagement" =>4,
"completeness" =>3,
"feedback" => "색채가 강렬합니다.",
]);



App\Artwork::create([
"photo" => "/files/s070004.jpg",
"name" => "달과 그곳",
"date" => "2016-06-18",
"type_id" =>2,
"student_id"=>7,
"size"=>"10호",
"engagement" =>1,
"completeness" =>5,
"feedback" => "우주에 대한 관심이 많습니다. 몰입은 잘 못 해서 주제를 바꿨습니다.",
]);

App\Artwork::create([
"photo" => "/files/s070005.jpg",
"name" => "우투리",
"date" => "2016-07-27",
"type_id" =>4,
"student_id"=>7,
"size"=>"10호",
"engagement" =>2,
"completeness" =>4,
"feedback" => "얼굴에 관심이 많은 것 같습니다.",
]);



App\Artwork::create([
"photo" => "/files/s070006.jpg",
"name" => "흑, 점",
"date" => "2016-09-03",
"type_id" =>4,
"student_id"=>7,
"size"=>"10호",
"engagement" =>3,
"completeness" =>2,
"feedback" => "몰입도와 완성도 모두 높아지고 있습니다.",
]);

App\Artwork::create([
"photo" => "/files/s080001.jpg",
"name" => "나의혁명1",
"date" => "2016-05-01",
"type_id" =>3,
"student_id"=>8,
"size"=>"10호",
"engagement" =>10,
"completeness" =>10,
"feedback" => "세계에 대한 고민을 담은 작품입니다.",
]);



App\Artwork::create([
"photo" => "/files/s080002.jpg",
"name" => "나의혁명2",
"date" => "2016-05-19",
"type_id" =>2,
"student_id"=>8,
"size"=>"10호",
"engagement" =>9,
"completeness" =>10,
"feedback" => "관계에 대한 고민을 담은 작품입니다.",
]);

App\Artwork::create([
"photo" => "/files/s080003.jpg",
"name" => "나의혁명3",
"date" => "2016-06-18",
"type_id" =>1,
"student_id"=>8,
"size"=>"10호",
"engagement" =>8,
"completeness" =>9,
"feedback" => "색채가 강렬합니다.",
]);



App\Artwork::create([
"photo" => "/files/s080004.jpg",
"name" => "인민재판",
"date" => "2016-07-15",
"type_id" =>2,
"student_id"=>8,
"size"=>"10호",
"engagement" =>9,
"completeness" =>8,
"feedback" => "사물을 잘 뜯어봅니다.",
]);

App\Artwork::create([
"photo" => "/files/s080005.jpg",
"name" => "나의혁명4",
"date" => "2016-08-11",
"type_id" =>2,
"student_id"=>8,
"size"=>"10호",
"engagement" =>10,
"completeness" =>9,
"feedback" => "완성도도 떨어지고, 수업시간에 몰입을 못 하고 있습니다.",
]);



App\Artwork::create([
"photo" => "/files/s080006.jpg",
"name" => "나의혁명5",
"date" => "2016-09-25",
"type_id" =>3,
"student_id"=>8,
"size"=>"10호",
"engagement" =>9,
"completeness" =>10,
"feedback" => "첫 작품입니다. 앞으로 많이 배워야 합니다.",
]);
App\Artwork::create([
"photo" => "/files/s080007.jpg",
"name" => "나의혁명6",
"date" => "2016-11-12",
"type_id" =>3,
"student_id"=>8,
"size"=>"10호",
"engagement" =>7,
"completeness" =>8,
"feedback" => "표정을 잘 그립니다.",
]);



App\Artwork::create([
"photo" => "/files/s090001.jpg",
"name" => "한강대폭발",
"date" => "2016-05-08",
"type_id" =>3,
"student_id"=>9,
"size"=>"10호",
"engagement" =>10,
"completeness" =>6,
"feedback" => "랜덤한 형태에 관심이 많습니다. 몰입을 잘 합니다.",
]);

App\Artwork::create([
"photo" => "/files/s090002.jpg",
"name" => "단풍놀이",
"date" => "2016-05-30",
"type_id" =>4,
"student_id"=>9,
"size"=>"10호",
"engagement" =>9,
"completeness" =>7,
"feedback" => "고기를 좋아합니다.",
]);



App\Artwork::create([
"photo" => "/files/s090003.jpg",
"name" => "침몰",
"date" => "2016-07-02",
"type_id" =>4,
"student_id"=>9,
"size"=>"10호",
"engagement" =>8,
"completeness" =>8,
"feedback" => "풍경 스케치를 담고 있습니다.",
]);

App\Artwork::create([
"photo" => "/files/s090004.jpg",
"name" => "밤의내역서",
"date" => "2016-08-18",
"type_id" =>4,
"student_id"=>9,
"size"=>"10호",
"engagement" =>6,
"completeness" =>9,
"feedback" => "사물을 잘 뜯어봅니다.",
]);



App\Artwork::create([
"photo" => "/files/s090005.jpg",
"name" => "부활",
"date" => "2016-10-11",
"type_id" =>1,
"student_id"=>9,
"size"=>"10호",
"engagement" =>5,
"completeness" =>10,
"feedback" => "완성도는 높으나수업시간에 몰입을 못 하고 있습니다.",
]);

App\Artwork::create([
"photo" => "/files/s090006.jpg",
"name" => "산의폭풍",
"date" => "2016-11-01",
"type_id" =>2,
"student_id"=>9,
"size"=>"10호",
"engagement" =>4,
"completeness" =>10,
"feedback" => "잘 그립니다.",
]);



App\Artwork::create([
"photo" => "/files/s090007.jpg",
"name" => "나, 소용돌이",
"date" => "2016-12-04",
"type_id" =>3,
"student_id"=>9,
"size"=>"10호",
"engagement" =>3,
"completeness" =>10,
"feedback" => "훌륭합니다.",
]);

App\Album::create([
"user_id" => 1,
"artwork_id" => 1,
]);
App\Album::create([
"user_id" => 1,
"artwork_id" => 3,
]);
App\Album::create([
"user_id" => 1,
"artwork_id" => 6,
]);
App\Album::create([
"user_id" => 1,
"artwork_id" => 8,
]);
App\Album::create([
"user_id" => 1,
"artwork_id" => 10,
]);
App\Album::create([
"user_id" => 1,
"artwork_id" => 15,
]);
App\Album::create([
"user_id" => 1,
"artwork_id" => 30,
]);
App\Album::create([
"user_id" => 1,
"artwork_id" => 40,
]);
App\Album::create([
"user_id" => 1,
"artwork_id" => 50,
]);


// tag
App\Artwork_tag::create([  'artwork_id' => 1,  'tag_id' => 1, ]);
App\Artwork_tag::create([  'artwork_id' => 2,  'tag_id' => 2, ]);
App\Artwork_tag::create([  'artwork_id' => 3,  'tag_id' => 3, ]);
App\Artwork_tag::create([  'artwork_id' => 4,  'tag_id' => 4, ]);
App\Artwork_tag::create([  'artwork_id' => 5,  'tag_id' => 5, ]);
App\Artwork_tag::create([  'artwork_id' => 6,  'tag_id' => 6, ]);
App\Artwork_tag::create([  'artwork_id' => 7,  'tag_id' => 7, ]);
App\Artwork_tag::create([  'artwork_id' => 8,  'tag_id' => 8, ]);
App\Artwork_tag::create([  'artwork_id' => 9,  'tag_id' => 9, ]);
App\Artwork_tag::create([  'artwork_id' => 10,  'tag_id' => 1, ]);
App\Artwork_tag::create([  'artwork_id' => 11,  'tag_id' => 2, ]);
App\Artwork_tag::create([  'artwork_id' => 12,  'tag_id' => 3, ]);
App\Artwork_tag::create([  'artwork_id' => 13,  'tag_id' => 4, ]);
App\Artwork_tag::create([  'artwork_id' => 14,  'tag_id' => 5, ]);
App\Artwork_tag::create([  'artwork_id' => 15,  'tag_id' => 6, ]);
App\Artwork_tag::create([  'artwork_id' => 16,  'tag_id' => 7, ]);
App\Artwork_tag::create([  'artwork_id' => 17,  'tag_id' => 8, ]);
App\Artwork_tag::create([  'artwork_id' => 18,  'tag_id' => 9, ]);
App\Artwork_tag::create([  'artwork_id' => 19,  'tag_id' => 1, ]);
App\Artwork_tag::create([  'artwork_id' => 20,  'tag_id' => 2, ]);
App\Artwork_tag::create([  'artwork_id' => 21,  'tag_id' => 3, ]);
App\Artwork_tag::create([  'artwork_id' => 22,  'tag_id' => 4, ]);
App\Artwork_tag::create([  'artwork_id' => 23,  'tag_id' => 5, ]);
App\Artwork_tag::create([  'artwork_id' => 24,  'tag_id' => 6, ]);
App\Artwork_tag::create([  'artwork_id' => 25,  'tag_id' => 7, ]);
App\Artwork_tag::create([  'artwork_id' => 26,  'tag_id' => 8, ]);
App\Artwork_tag::create([  'artwork_id' => 27,  'tag_id' => 9, ]);
App\Artwork_tag::create([  'artwork_id' => 28,  'tag_id' => 1, ]);
App\Artwork_tag::create([  'artwork_id' => 29,  'tag_id' => 2, ]);
App\Artwork_tag::create([  'artwork_id' => 30,  'tag_id' => 3, ]);
App\Artwork_tag::create([  'artwork_id' => 31,  'tag_id' => 4, ]);
App\Artwork_tag::create([  'artwork_id' => 32,  'tag_id' => 5, ]);
App\Artwork_tag::create([  'artwork_id' => 33,  'tag_id' => 6, ]);
App\Artwork_tag::create([  'artwork_id' => 34,  'tag_id' => 7, ]);
App\Artwork_tag::create([  'artwork_id' => 35,  'tag_id' => 8, ]);
App\Artwork_tag::create([  'artwork_id' => 36,  'tag_id' => 9, ]);
App\Artwork_tag::create([  'artwork_id' => 37,  'tag_id' => 1, ]);
App\Artwork_tag::create([  'artwork_id' => 38,  'tag_id' => 2, ]);
App\Artwork_tag::create([  'artwork_id' => 39,  'tag_id' => 3, ]);
App\Artwork_tag::create([  'artwork_id' => 40,  'tag_id' => 4, ]);
App\Artwork_tag::create([  'artwork_id' => 41,  'tag_id' => 5, ]);
App\Artwork_tag::create([  'artwork_id' => 42,  'tag_id' => 6, ]);
App\Artwork_tag::create([  'artwork_id' => 43,  'tag_id' => 7, ]);
App\Artwork_tag::create([  'artwork_id' => 44,  'tag_id' => 8, ]);
App\Artwork_tag::create([  'artwork_id' => 45,  'tag_id' => 9, ]);
App\Artwork_tag::create([  'artwork_id' => 46,  'tag_id' => 1, ]);
App\Artwork_tag::create([  'artwork_id' => 47,  'tag_id' => 2, ]);
App\Artwork_tag::create([  'artwork_id' => 48,  'tag_id' => 3, ]);
App\Artwork_tag::create([  'artwork_id' => 49,  'tag_id' => 4, ]);
App\Artwork_tag::create([  'artwork_id' => 50,  'tag_id' => 5, ]);
App\Artwork_tag::create([  'artwork_id' => 51,  'tag_id' => 6, ]);
App\Artwork_tag::create([  'artwork_id' => 52,  'tag_id' => 7, ]);
App\Artwork_tag::create([  'artwork_id' => 53,  'tag_id' => 8, ]);
App\Artwork_tag::create([  'artwork_id' => 54,  'tag_id' => 9, ]);
App\Artwork_tag::create([  'artwork_id' => 55,  'tag_id' => 1, ]);
App\Artwork_tag::create([  'artwork_id' => 56,  'tag_id' => 2, ]);
App\Artwork_tag::create([  'artwork_id' => 57,  'tag_id' => 3, ]);
App\Artwork_tag::create([  'artwork_id' => 58,  'tag_id' => 4, ]);
App\Artwork_tag::create([  'artwork_id' => 59,  'tag_id' => 5, ]);
App\Artwork_tag::create([  'artwork_id' => 60,  'tag_id' => 6, ]);
App\Artwork_tag::create([  'artwork_id' => 61,  'tag_id' => 7, ]);
App\Artwork_tag::create([  'artwork_id' => 62,  'tag_id' => 8, ]);
App\Artwork_tag::create([  'artwork_id' => 63,  'tag_id' => 9, ]);
App\Artwork_tag::create([  'artwork_id' => 64,  'tag_id' => 1, ]);
App\Artwork_tag::create([  'artwork_id' => 65,  'tag_id' => 2, ]);
App\Artwork_tag::create([  'artwork_id' => 66,  'tag_id' => 3, ]);
App\Artwork_tag::create([  'artwork_id' => 67,  'tag_id' => 4, ]);
App\Artwork_tag::create([  'artwork_id' => 68,  'tag_id' => 5, ]);
App\Artwork_tag::create([  'artwork_id' => 69,  'tag_id' => 6, ]);
App\Artwork_tag::create([  'artwork_id' => 70,  'tag_id' => 7, ]);
App\Artwork_tag::create([  'artwork_id' => 71,  'tag_id' => 8, ]);
App\Artwork_tag::create([  'artwork_id' => 72,  'tag_id' => 9, ]);
App\Artwork_tag::create([  'artwork_id' => 1,  'tag_id' => 2, ]);
App\Artwork_tag::create([  'artwork_id' => 2,  'tag_id' => 3, ]);
App\Artwork_tag::create([  'artwork_id' => 3,  'tag_id' => 4, ]);
App\Artwork_tag::create([  'artwork_id' => 4,  'tag_id' => 5, ]);
App\Artwork_tag::create([  'artwork_id' => 5,  'tag_id' => 6, ]);
App\Artwork_tag::create([  'artwork_id' => 6,  'tag_id' => 7, ]);
App\Artwork_tag::create([  'artwork_id' => 7,  'tag_id' => 8, ]);
App\Artwork_tag::create([  'artwork_id' => 8,  'tag_id' => 9, ]);
App\Artwork_tag::create([  'artwork_id' => 9,  'tag_id' => 1, ]);
App\Artwork_tag::create([  'artwork_id' => 10,  'tag_id' => 2, ]);
App\Artwork_tag::create([  'artwork_id' => 11,  'tag_id' => 3, ]);
App\Artwork_tag::create([  'artwork_id' => 12,  'tag_id' => 4, ]);
App\Artwork_tag::create([  'artwork_id' => 13,  'tag_id' => 5, ]);
App\Artwork_tag::create([  'artwork_id' => 14,  'tag_id' => 6, ]);
App\Artwork_tag::create([  'artwork_id' => 15,  'tag_id' => 7, ]);
App\Artwork_tag::create([  'artwork_id' => 16,  'tag_id' => 8, ]);
App\Artwork_tag::create([  'artwork_id' => 17,  'tag_id' => 9, ]);
App\Artwork_tag::create([  'artwork_id' => 18,  'tag_id' => 1, ]);
App\Artwork_tag::create([  'artwork_id' => 19,  'tag_id' => 2, ]);
App\Artwork_tag::create([  'artwork_id' => 20,  'tag_id' => 3, ]);
App\Artwork_tag::create([  'artwork_id' => 21,  'tag_id' => 4, ]);
App\Artwork_tag::create([  'artwork_id' => 22,  'tag_id' => 5, ]);
App\Artwork_tag::create([  'artwork_id' => 23,  'tag_id' => 6, ]);
App\Artwork_tag::create([  'artwork_id' => 24,  'tag_id' => 7, ]);
App\Artwork_tag::create([  'artwork_id' => 25,  'tag_id' => 8, ]);
App\Artwork_tag::create([  'artwork_id' => 26,  'tag_id' => 9, ]);
App\Artwork_tag::create([  'artwork_id' => 27,  'tag_id' => 1, ]);
App\Artwork_tag::create([  'artwork_id' => 28,  'tag_id' => 2, ]);
App\Artwork_tag::create([  'artwork_id' => 29,  'tag_id' => 3, ]);
App\Artwork_tag::create([  'artwork_id' => 30,  'tag_id' => 4, ]);
App\Artwork_tag::create([  'artwork_id' => 31,  'tag_id' => 5, ]);
App\Artwork_tag::create([  'artwork_id' => 32,  'tag_id' => 6, ]);
App\Artwork_tag::create([  'artwork_id' => 33,  'tag_id' => 7, ]);
App\Artwork_tag::create([  'artwork_id' => 34,  'tag_id' => 8, ]);
App\Artwork_tag::create([  'artwork_id' => 35,  'tag_id' => 9, ]);
App\Artwork_tag::create([  'artwork_id' => 36,  'tag_id' => 1, ]);
App\Artwork_tag::create([  'artwork_id' => 37,  'tag_id' => 2, ]);
App\Artwork_tag::create([  'artwork_id' => 38,  'tag_id' => 3, ]);
App\Artwork_tag::create([  'artwork_id' => 39,  'tag_id' => 4, ]);
App\Artwork_tag::create([  'artwork_id' => 40,  'tag_id' => 5, ]);
App\Artwork_tag::create([  'artwork_id' => 41,  'tag_id' => 6, ]);
App\Artwork_tag::create([  'artwork_id' => 42,  'tag_id' => 7, ]);
App\Artwork_tag::create([  'artwork_id' => 43,  'tag_id' => 8, ]);
App\Artwork_tag::create([  'artwork_id' => 44,  'tag_id' => 9, ]);
App\Artwork_tag::create([  'artwork_id' => 45,  'tag_id' => 1, ]);
App\Artwork_tag::create([  'artwork_id' => 46,  'tag_id' => 2, ]);
App\Artwork_tag::create([  'artwork_id' => 47,  'tag_id' => 3, ]);
App\Artwork_tag::create([  'artwork_id' => 48,  'tag_id' => 4, ]);
App\Artwork_tag::create([  'artwork_id' => 49,  'tag_id' => 5, ]);
App\Artwork_tag::create([  'artwork_id' => 50,  'tag_id' => 6, ]);
App\Artwork_tag::create([  'artwork_id' => 51,  'tag_id' => 7, ]);
App\Artwork_tag::create([  'artwork_id' => 52,  'tag_id' => 8, ]);
App\Artwork_tag::create([  'artwork_id' => 53,  'tag_id' => 9, ]);
App\Artwork_tag::create([  'artwork_id' => 54,  'tag_id' => 1, ]);
App\Artwork_tag::create([  'artwork_id' => 55,  'tag_id' => 2, ]);
App\Artwork_tag::create([  'artwork_id' => 56,  'tag_id' => 3, ]);
App\Artwork_tag::create([  'artwork_id' => 57,  'tag_id' => 4, ]);
App\Artwork_tag::create([  'artwork_id' => 58,  'tag_id' => 5, ]);
App\Artwork_tag::create([  'artwork_id' => 59,  'tag_id' => 6, ]);
App\Artwork_tag::create([  'artwork_id' => 60,  'tag_id' => 7, ]);
App\Artwork_tag::create([  'artwork_id' => 61,  'tag_id' => 8, ]);
App\Artwork_tag::create([  'artwork_id' => 62,  'tag_id' => 9, ]);
App\Artwork_tag::create([  'artwork_id' => 63,  'tag_id' => 1, ]);
App\Artwork_tag::create([  'artwork_id' => 64,  'tag_id' => 2, ]);
App\Artwork_tag::create([  'artwork_id' => 65,  'tag_id' => 3, ]);
App\Artwork_tag::create([  'artwork_id' => 66,  'tag_id' => 4, ]);
App\Artwork_tag::create([  'artwork_id' => 67,  'tag_id' => 5, ]);
App\Artwork_tag::create([  'artwork_id' => 68,  'tag_id' => 6, ]);
App\Artwork_tag::create([  'artwork_id' => 69,  'tag_id' => 7, ]);
App\Artwork_tag::create([  'artwork_id' => 70,  'tag_id' => 8, ]);
App\Artwork_tag::create([  'artwork_id' => 71,  'tag_id' => 9, ]);
App\Artwork_tag::create([  'artwork_id' => 72,  'tag_id' => 1, ]);
App\Artwork_tag::create([  'artwork_id' => 1,  'tag_id' => 3, ]);
App\Artwork_tag::create([  'artwork_id' => 2,  'tag_id' => 4, ]);
App\Artwork_tag::create([  'artwork_id' => 3,  'tag_id' => 5, ]);
App\Artwork_tag::create([  'artwork_id' => 4,  'tag_id' => 6, ]);
App\Artwork_tag::create([  'artwork_id' => 5,  'tag_id' => 7, ]);
App\Artwork_tag::create([  'artwork_id' => 6,  'tag_id' => 8, ]);
App\Artwork_tag::create([  'artwork_id' => 7,  'tag_id' => 9, ]);
App\Artwork_tag::create([  'artwork_id' => 8,  'tag_id' => 1, ]);
App\Artwork_tag::create([  'artwork_id' => 9,  'tag_id' => 2, ]);
App\Artwork_tag::create([  'artwork_id' => 10,  'tag_id' => 3, ]);
App\Artwork_tag::create([  'artwork_id' => 11,  'tag_id' => 4, ]);
App\Artwork_tag::create([  'artwork_id' => 12,  'tag_id' => 5, ]);
App\Artwork_tag::create([  'artwork_id' => 13,  'tag_id' => 6, ]);
App\Artwork_tag::create([  'artwork_id' => 14,  'tag_id' => 7, ]);
App\Artwork_tag::create([  'artwork_id' => 15,  'tag_id' => 8, ]);
App\Artwork_tag::create([  'artwork_id' => 16,  'tag_id' => 9, ]);
App\Artwork_tag::create([  'artwork_id' => 17,  'tag_id' => 1, ]);
App\Artwork_tag::create([  'artwork_id' => 18,  'tag_id' => 2, ]);
App\Artwork_tag::create([  'artwork_id' => 19,  'tag_id' => 3, ]);
App\Artwork_tag::create([  'artwork_id' => 20,  'tag_id' => 4, ]);
App\Artwork_tag::create([  'artwork_id' => 21,  'tag_id' => 5, ]);
App\Artwork_tag::create([  'artwork_id' => 22,  'tag_id' => 6, ]);
App\Artwork_tag::create([  'artwork_id' => 23,  'tag_id' => 7, ]);
App\Artwork_tag::create([  'artwork_id' => 24,  'tag_id' => 8, ]);
App\Artwork_tag::create([  'artwork_id' => 25,  'tag_id' => 9, ]);
App\Artwork_tag::create([  'artwork_id' => 26,  'tag_id' => 1, ]);
App\Artwork_tag::create([  'artwork_id' => 27,  'tag_id' => 2, ]);
App\Artwork_tag::create([  'artwork_id' => 28,  'tag_id' => 3, ]);
App\Artwork_tag::create([  'artwork_id' => 29,  'tag_id' => 4, ]);
App\Artwork_tag::create([  'artwork_id' => 30,  'tag_id' => 5, ]);
App\Artwork_tag::create([  'artwork_id' => 31,  'tag_id' => 6, ]);
App\Artwork_tag::create([  'artwork_id' => 32,  'tag_id' => 7, ]);
App\Artwork_tag::create([  'artwork_id' => 33,  'tag_id' => 8, ]);
App\Artwork_tag::create([  'artwork_id' => 34,  'tag_id' => 9, ]);
App\Artwork_tag::create([  'artwork_id' => 35,  'tag_id' => 1, ]);
App\Artwork_tag::create([  'artwork_id' => 36,  'tag_id' => 2, ]);
App\Artwork_tag::create([  'artwork_id' => 37,  'tag_id' => 3, ]);
App\Artwork_tag::create([  'artwork_id' => 38,  'tag_id' => 4, ]);
App\Artwork_tag::create([  'artwork_id' => 39,  'tag_id' => 5, ]);
App\Artwork_tag::create([  'artwork_id' => 40,  'tag_id' => 6, ]);
App\Artwork_tag::create([  'artwork_id' => 41,  'tag_id' => 7, ]);
App\Artwork_tag::create([  'artwork_id' => 42,  'tag_id' => 8, ]);
App\Artwork_tag::create([  'artwork_id' => 43,  'tag_id' => 9, ]);
App\Artwork_tag::create([  'artwork_id' => 44,  'tag_id' => 1, ]);
App\Artwork_tag::create([  'artwork_id' => 45,  'tag_id' => 2, ]);
App\Artwork_tag::create([  'artwork_id' => 46,  'tag_id' => 3, ]);
App\Artwork_tag::create([  'artwork_id' => 47,  'tag_id' => 4, ]);
App\Artwork_tag::create([  'artwork_id' => 48,  'tag_id' => 5, ]);
App\Artwork_tag::create([  'artwork_id' => 49,  'tag_id' => 6, ]);
App\Artwork_tag::create([  'artwork_id' => 50,  'tag_id' => 7, ]);
App\Artwork_tag::create([  'artwork_id' => 51,  'tag_id' => 8, ]);
App\Artwork_tag::create([  'artwork_id' => 52,  'tag_id' => 9, ]);
App\Artwork_tag::create([  'artwork_id' => 53,  'tag_id' => 1, ]);
App\Artwork_tag::create([  'artwork_id' => 54,  'tag_id' => 2, ]);
App\Artwork_tag::create([  'artwork_id' => 55,  'tag_id' => 3, ]);
App\Artwork_tag::create([  'artwork_id' => 56,  'tag_id' => 4, ]);
App\Artwork_tag::create([  'artwork_id' => 57,  'tag_id' => 5, ]);
App\Artwork_tag::create([  'artwork_id' => 58,  'tag_id' => 6, ]);
App\Artwork_tag::create([  'artwork_id' => 59,  'tag_id' => 7, ]);
App\Artwork_tag::create([  'artwork_id' => 60,  'tag_id' => 8, ]);
App\Artwork_tag::create([  'artwork_id' => 61,  'tag_id' => 9, ]);
App\Artwork_tag::create([  'artwork_id' => 62,  'tag_id' => 1, ]);
App\Artwork_tag::create([  'artwork_id' => 63,  'tag_id' => 2, ]);
App\Artwork_tag::create([  'artwork_id' => 64,  'tag_id' => 3, ]);
App\Artwork_tag::create([  'artwork_id' => 65,  'tag_id' => 4, ]);
App\Artwork_tag::create([  'artwork_id' => 66,  'tag_id' => 5, ]);
App\Artwork_tag::create([  'artwork_id' => 67,  'tag_id' => 6, ]);
App\Artwork_tag::create([  'artwork_id' => 68,  'tag_id' => 7, ]);
App\Artwork_tag::create([  'artwork_id' => 69,  'tag_id' => 8, ]);
App\Artwork_tag::create([  'artwork_id' => 70,  'tag_id' => 9, ]);
App\Artwork_tag::create([  'artwork_id' => 71,  'tag_id' => 1, ]);
App\Artwork_tag::create([  'artwork_id' => 72,  'tag_id' => 2, ]);
    }
}
