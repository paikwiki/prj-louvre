<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon; //오늘의 date호출용

class StudentsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $currentUser = Auth::user();
      $students = Auth::user()->student()->get();
      //요일 구하기
      $weekdayArr = ['sun', 'mon', 'tue', 'wed', 'thu', 'fri', 'sat', ];
      // var_dump(date('w'));
      $weekdayOfToday = $weekdayArr[date("w")];
      // $weekdayOfToday = 'thu';
      // var_dump($weekdayOfToday);

/***************/
/***바뀐코드*****///student collection에 계속 이상한 null객체 생겨서 에러남. 그래서 다시짬.
/*****시작******/

      // 모든선생님들의 '오늘의 수강생' 아이디 확인하기
      $todayAttendances = \App\Attendance::where($weekdayOfToday, 1)->get();
      $todayStudents = [];
      foreach($todayAttendances as $todayAttendance)
      {
        array_push($todayStudents, $todayAttendance->student);
      }

      // '오늘의 수강생'중 '오늘의 나의 수강생'구하기
      $todayMyStudents = [];
      foreach($todayStudents as $todayStudent)
      {
        if($todayStudent->course_id==Auth::user()->course_id)
        {array_push($todayMyStudents, $todayStudent);}

      }

/***************/
/***바뀐코드*****/
/*****끝******/



/*******************/
/***바뀌기 전코드***/
/******시작*******/

      /*
      $todayStudentIds = \App\Attendance::where($weekdayOfToday, 1)->get();
      $todayStudentIdArr = [];
      foreach($todayStudentIds as $todayStudentId)
      {
        array_push($todayStudentIdArr, $todayStudentId->id);
      }
      //  var_dump($todayStudentIdArr);
      // 오늘의 수강생 목록 만들기
      $todayStudents = [];
      foreach( $todayStudentIdArr as $todayStudentId   ) {
        $target = $students->where('id', $todayStudentId)->first();
        array_push($todayStudents, $target);
        // var_dump($target->name);
        // if($target->id = $todayStudentIdArr)

      }

/*******************/
/***바뀌기 전코드***/
/******끝*********/



      //수강생 요일 보여주기
      $attendances = \App\Attendance::get();


      //생일 보내기
      $birthdayArr=[];
      foreach($students as $student)
      {
        $birthTemp = $student->birth;
        $birthday = substr($birthTemp,-5);
        array_push($birthdayArr, $birthday);
      }
      $today=date("m-d");


      return view('students.index', [
        'students' => $students,
        'todayStudents' => $todayMyStudents,
        'weekdayOfToday' => $weekdayOfToday,
        'attendances' => $attendances,
        'birthdayArr' => $birthdayArr,
        'today' => $today,
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $student = new \App\Student;
      $current_user_course = Auth::user()->course->name;
      // var_dump($student);
      return view('students.create', compact('student','current_user_course'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $rules = [
        'name' => 'required',
        // 'tel' => [],
        // 'email' => [],
        // 'user_id' => [],
        // 'profile_pic' => [],
        // 'birth' => [],
        // 'enroll_date' => [],
        // 'course_id' => [],
        // 'purpose' => [],
        // 'status' => [],
        // 'comment' => [],
      ];
      // var_dump($request->all());
      $validator = \Validator::make($request->all(), $rules);
      if ($validator->fails()) {
        // var_dump('발리데이터 실패');
        return back()->withErrors($validator)->withInput();
      }

      // 사진 경로 따고 옮기기
      $url = $_FILES["profile_pic"]["tmp_name"];
      $target_dir = "pfpic/";
      $target_file = $target_dir . basename($_FILES["profile_pic"]["name"]);
      move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $target_file);

      // 사진 경로를 profile_pic에 저장하기
      if ( isset($_FILES["profile_pic"]["name"]) ) {
        $profilePicUrl = '/pfpic/'.$_FILES["profile_pic"]["name"];
      } else {
        $profilePicUrl = '/pfpic/noimg.png';
      }

      //$student = /App/User::find(Auth::user()->id)->student()->create([
      $student = Auth::user()->student()->create([
        'name' => $request['name'],
        'tel' => $request['tel'],
        'email' => $request['email'],
        'user_id' => $request['user_id'],
        'profile_pic' => $profilePicUrl,
        'birth' => $request['birth'],
        'enroll_date' => $request['enroll_date'],
        'course_id' => Auth::user()->course->id,
        'purpose' => $request['purpose'],
        'status' => $request['status'],
        'comment' => $request['comment'],
      ]);
      // 요일
      $weekdayNameArr = ['sun', 'mon', 'tue', 'wed', 'thu', 'fri', 'sat'];
      $attendValueArr = [];
      foreach( $weekdayNameArr as $key=>$weekdayName )
      {
        if( $request[$weekdayName] == 'on' )
        {
          $attendValueArr[$key] = 1;
        } else {
          $attendValueArr[$key] = 0;
        }
      }
      $student->attendance()->create([
        'sun' => $attendValueArr[0],
        'mon' => $attendValueArr[1],
        'tue' => $attendValueArr[2],
        'wed' => $attendValueArr[3],
        'thu' => $attendValueArr[4],
        'fri' => $attendValueArr[5],
        'sat' => $attendValueArr[6],
      ]);

      if (! $student) {
        return back()->with('flash_message', '글이 저장되지 않았습니다.')->withInput();
      }

      //student를 신규생성할때 artwork가 없으므로 student상세보기를 할수 없기에 임시방편
      \App\Artwork::create([
        // 'photo' => $request['photo'],
        'photo' => "http://www.pacinno.eu/wp-content/uploads/2014/05/placeholder1.png",
        'name' => "sample작품",
        'date' => Carbon::now(),
        'type_id' => 1,
        'student_id' => $student->id,
        'size' => "0호",
        'engagement' => 10,
        'completeness' => 10,
        'feedback' => "sample작품입니다.",
      ]);


      return redirect('students/'.$student->id)->with('flash_message', '작성하신 글이 저장되었습니다.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = \App\Student::where('id', $id)->first();

        // 수강일 구하기
        $attendanceInfo = \App\Attendance::where('student_id', $id)->first();
        $weekdayArr = ['mon', 'tue', 'wed', 'thu', 'fri', 'sat', 'sun'];
        $attends = [];
        foreach ($weekdayArr as $weekday) {
          if( $attendanceInfo->$weekday == 1 )
          {
            array_push($attends, $weekday);
          }
        }

        // 강사 이름 구하기
        $user = \App\User::where('id', $student->user_id)->first();
        $userName = $user->name;

        // 등록일 구하기
        $startDateTime = $student->enroll_date.' 00:00:00';
        $start = new \DateTime($startDateTime);
        $now = new \DateTime();
        $dDay = date_diff($start, $now)->days;
        $a=[];
        // var_dump($dDay);

        // 작품 가져오기
        $artworks = \App\Artwork::where('student_id', $id)->orderBy('id', 'desc')->get();


        //최근 작품
        $artwork_recent=\App\Artwork::where('student_id', $id)->orderBy('id', 'desc')->first();
        //많이 그린 작품
        // $typesmany=\App\Type::get();
        // foreach($typesmany as $typesman)
        // {
        //   for($i=1;$i<=count($typesman);$i++)
        //   {
        //     if($typesman->id==$i)
        //     {
        //       $a[$i]++;
        //     }
        //   }
        // }
        // for($i=1; $i <= count($a); $i++)
        // {
        //   for($j=1; $j <= count($a); $j++)
        //   {
        //     if(max($a[$i]=$j))
        //     {
        //       $k=$j;
        //     }
        //   }
        // }
        // foreach($typeman as $typema)
        // {
        //   if($typema->id == $k)
        //   {
        //     $type=$typema->name;
        //   }
        // }


        // 총 작품 수 구하기
        $artworksCount = count($artworks);
        // var_dump($artworksCount);

        // 작품 유형 가져오기
        $artworkTypeArr = [];
        foreach( $artworks as $artwork )
        {
          array_push($artworkTypeArr, $artwork->type->name);
        }

        $eachTypeCounts = array_count_values($artworkTypeArr);
        arsort($eachTypeCounts);
        // dd($eachTypeCounts);

        $maxType = array_search(max($eachTypeCounts),$eachTypeCounts);
        // var_dump(array_pop($eachTypeCounts));
        // dd($eachTypeCounts);
        // $test = ['a'=>1,'b'=>5,'c'=>5];
        // dd(array_search(max($test),$test));

        // 지금까지한 태그 구하기
        $tagArr = \App\Tag::get();
        $artworkTagArr = \App\Artwork_tag::get();
        $artworkTags = [];
        foreach( $artworkTagArr as $artworkTag )
        {
          foreach( $artworks as $artwork )
          {
            if( $artworkTag->artwork_id == $artwork->id )
            {
              // var_dump($tagArr->where('id', $artworkTag->tag_id)->first()->name);
              array_push($artworkTags, $tagArr->where('id', $artworkTag->tag_id)->first()->name);
            }
          }
        }
        $artworkTagsUniques = array_unique($artworkTags);
        $artworkTagsCounts = [];
        // var_dump($artworkTagsUniques);

        // 개별 태그 수 세기
        $eachTagCounts = array_count_values($artworkTags);

        // 몰입도와 작품 완성도 평균 구하기
        $engagementSum = 0;
        $engagementAvg = 0;
        $completenessSum = 0;
        $completenessAvg = 0;
        foreach( $artworks as $artwork )
        {
          $engagementSum += $artwork->engagement;
          $completenessSum += $artwork->completeness;
        }

        // 참여도 평균
        if ( $engagementSum > 0 )
        {
          $engagementAvg = round($engagementSum/count($artworks), 2);
        } else {
          $engagementAvg = 0;
        }

        // 완성도 평균
        if ( $completenessSum > 0 )
        {
          $completenessAvg = round($completenessSum/count($artworks), 2);
        } else {
          $completenessAvg = 0;
        }

        // // 그래프
        // $studentData = [];
        // $student1 = array("date" => "1/2", "engagement" =>	10, "difficulty" =>	3);
        // $student2 = array("date" => "1/4", "engagement" =>	7, "difficulty" =>	5);
        // $student3 = array("date" => "1/8", "engagement" =>	3, "difficulty" =>	9);
        //
        // // 3명의 정보를 memberData변수에 저장
        // array_push($studentData, $student1);
        // array_push($studentData, $student2);
        // array_push($studentData, $student3);
        //
        // // 3명의 데이터가 JSON Array 문자열로 변환됨
        // $graph_data = json_encode($studentData);
        // // $graph_data = '{"test": "123", "test2": "456"}';


        // $graph_data = [];
        // $artwork01 = array(
        //   "date" => $artworks[0]->date,
        //   "engagement" => $artworks[0]->engagement,
        //   "completeness" => $artworks[0]->completeness,
        // );
        // array_push($graph_data, $artwork01);

        // $graph_data = \App\Artwork::where('student_id', $id)->orderBy('id', 'desc')->get()->toJson();
        $graph_data = \App\Artwork::whereStudentId($id)->orderBy('date', 'asc')->get(['id', 'date', 'engagement', 'completeness']);
        foreach ($graph_data as $value) {
          // $year = preg_match("/[0-9]{4}-/", $value['date']);

          $value['date']= preg_replace("/[0-9]{4}-/", '', $value['date']);
        }
        // dd($graph_data);


        return view('students.show', [
          'student' => $student,
          'attends' => $attends,
          'userName' => $userName,
          'artworks' => $artworks,
          'artworksCount' => $artworksCount,
          'eachTagCounts' => $eachTagCounts,
          'eachTypeCounts' => $eachTypeCounts,
          'engagementAvg' => $engagementAvg,
          'completenessAvg' => $completenessAvg,
          'dDay' => $dDay,
          'artwork_recent' => $artwork_recent,
          'maxType' => $maxType,
          'graphData' => $graph_data,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(\App\Student $student)
    {
        return view('students.edit', compact('student'));
        // var_dump($student);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, \App\Student $student)
    {
      // var_dump($student->id);
        // $student=\App\Student::where('id',$id)->get();
        $student ->update([
          'name' => $request['name'],
          'tel' => $request['tel'],
          'email' => $request['email'],
          'profile_pic' => $request['profile_pic'],
          'birth' => $request['birth'],
          'enroll_date' => $request['enroll_date'],
          // 'course_id' => $request['course_id'],
          'purpose' => $request['purpose'],
          // 'status' => $request['status'],
          'comment' => $request['comment'],

        ]);
        return redirect(route('students.show',$student->id));
      }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
