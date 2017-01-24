<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon; //오늘의 date호출용
use Illuminate\Support\Facades\Schema;

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
        if($todayStudent->user_id==Auth::user()->id)
        {array_push($todayMyStudents, $todayStudent);}

      }

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
      $today = date("m-d");
      $localizedToday = date("n"."/ "."j"); // 0월 0일

      return view('students.index', [
        'students' => $students,
        'todayStudents' => $todayMyStudents,
        'weekdayOfToday' => $weekdayOfToday,
        'attendances' => $attendances,
        'birthdayArr' => $birthdayArr,
        'today' => $today,
        'localizedToday' => $localizedToday,
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
      // $current_user_course = Auth::user()->course->name;
      // var_dump($student);
      return view('students.create', compact('student'));
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
        'name' => ['required'],
        'tel' => ['required'],
        // 'email' => [],
        // 'user_id' => [],
        // 'profile_pic' => [],
        // 'birth' => [],
        'enroll_date' => ['required'],
        // 'course_id' => [],
        // // 'purpose' => [],
        // 'status' => [],
        // 'comment' => [],
      ];
      $messages = [
        'name.required' => '이름을 입력해 주세요.',
        'tel.required' => '연락처를 입력해 주세요.',
        'enroll_date.required' => '학원에 나오는 요일을 알려주세요.',
      ];
      $validator = \Validator::make($request->all(), $rules, $messages);
      if ($validator->fails()) {
        // var_dump('발리데이터 실패');
          return back()->withErrors($validator)->withInput();

      }

      // 사진 경로 따고 옮기기
      if(strlen($_FILES["profile_pic"]["name"])>0)
      {
        $imageFileName = time() . '.' . basename($_FILES["profile_pic"]["name"]);
        $s3 = \Storage::disk('s3');
        $photoPath = '/studentuploads/' . $imageFileName;
        $s3->put($photoPath, file_get_contents($_FILES["profile_pic"]["tmp_name"]), 'public');
        //$photoUrl=\Storage::url($imageFileName);
        //$photo = Storage::disk('s3')->get($photoPath);
      } else {
        $imageFileName = "default";
        //dd('사진이 없는 경우 에러처리 해야함-StudentsController');
      }
      $user = Auth::user();
      // dd($user);
      //$student = /App/User::find(Auth::user()->id)->student()->create([
      $student = Auth::user()->student()->create([
        'name' => $request['name'],
        'tel' => $request['tel'],
        'email' => $request['email'],
        'user_id' => $user->id,
        'profile_pic' => $imageFileName,
        'birth' => $request['birth'],
        'enroll_date' => $request['enroll_date'],
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
        return back()->with('flash_message', '글이 저장되지 않았습니다.')->withInput();
      }

      return redirect('students/'.$student->id)->with('flash_message', '새로운 학생을 생성했습니다.');
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
        if( $start > $now ) {
            $dDay = -(date_diff($start, $now)->days);
        } else {
            $dDay = date_diff($start, $now)->days;
        }

        $artworkTypeArr = []; // 작품 유형
        $artworkTagsCounts = []; // 태그별 갯수
        // 작품 가져오기
        $artworks = \App\Artwork::where('student_id', $id)->orderBy('id', 'desc')->get();
        // 작품이 있는지 확인
        if( count($artworks)>0 )
        { // 작품이 있을 경우!
          $artworkBool = true;
          // 총 작품 수
          $artworksCount = count($artworks);
          // 작품 유형 가져오기
          foreach( $artworks as $artwork )
          {
            array_push($artworkTypeArr, $artwork->type->name);
          }
          $eachTypeCounts = array_count_values($artworkTypeArr);
          arsort($eachTypeCounts);
          $maxType = array_search(max($eachTypeCounts),$eachTypeCounts);
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
                array_push($artworkTags, $tagArr->where('id', $artworkTag->tag_id)->first()->name);
              }
            }
          }
          $artworkTagsUniques = array_unique($artworkTags);
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
          // 그래프
          $graph_data = \App\Artwork::whereStudentId($id)->orderBy('date', 'asc')->get(['id', 'date', 'engagement', 'completeness']);
          $sameDayIndex = 2;
          foreach ($graph_data as $value) {
            $value['date']= preg_replace("/[0-9]{4}-/", '', $value['date']);
            if( isset($preDateVal) && $preDateVal == $value['date'] ) {
              $preDateVal = $value['date'];
              $value['date'] .= '('.$sameDayIndex.')';
              $sameDayIndex += 1;
            } else {
              $preDateVal = $value['date'];
            }
          }
          // dd($graph_data);
          // array_push(['id', 'date', 'engagement', 'completeness'], $graph_data);
          // dd($graph_data);
        } else { // 작품이 없을 경우!
          $artworkBool = false;
          $artworks[0] = [];
          $artworksCount = 0;
          $eachTypeCounts = 0;
          $eachTagCounts = 0;
          $maxType = '';
          $engagementAvg = 0;
          $completenessAvg = 0;
          $graph_data = "[]";
        }

        //최근 작품
        $artwork_recent = $artworks[0];


        return view('students.show', [
          'artworkBool' => $artworkBool,
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

      $attendValueArr = [];

      $attendValueArr[0] = $student->attendance()->first()->sun;
      $attendValueArr[1] = $student->attendance()->first()->mon;
      $attendValueArr[2] = $student->attendance()->first()->tue;
      $attendValueArr[3] = $student->attendance()->first()->wed;
      $attendValueArr[4] = $student->attendance()->first()->thu;
      $attendValueArr[5] = $student->attendance()->first()->fri;
      $attendValueArr[6] = $student->attendance()->first()->sat;

        return view('students.edit', compact('student', 'attendValueArr'));
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
      if(isset($_FILES["profile_pic"]["name"]) && strlen($_FILES["profile_pic"]["name"]) > 0)
      {
        $imageFileName = time() . '.' . basename($_FILES["profile_pic"]["name"]);
        $s3 = \Storage::disk('s3');
        $photoPath = '/studentuploads/' . $imageFileName;
        $s3->put($photoPath, file_get_contents($_FILES["profile_pic"]["tmp_name"]), 'public');
      } else {
        // 프로필 사진이 텍스트 값으로 넘어올 경우엔 그 값을 그대로 유지, 그렇지 않으면 기본값으로 설정
        $imageFileName = isset($request["profile_pic"]) ? $request["profile_pic"] : "default";
      }
      $student ->update([
        'name' => $request['name'],
        'tel' => $request['tel'],
        'email' => $request['email'],
        'profile_pic' => $imageFileName,
        'birth' => $request['birth'],
        'enroll_date' => $request['enroll_date'],
        'purpose' => $request['purpose'],
        'status' => $request['status'],
        'comment' => $request['comment'],

      ]);


      // 요일
      $weekdayNameArr = ['sun', 'mon', 'tue', 'wed', 'thu', 'fri', 'sat'];
      $attendValueArr = [];
      foreach( $weekdayNameArr as $key=>$weekdayName )
      {
        if( $request[$weekdayName] == $weekdayNameArr[$key] ) //왜.. create 코드랑 다르지.. -수지-
        {
          $attendValueArr[$key] = 1;
        } else {
          $attendValueArr[$key] = 0;
        }
      }

      $student->attendance()->update([
        'sun' => $attendValueArr[0],
        'mon' => $attendValueArr[1],
        'tue' => $attendValueArr[2],
        'wed' => $attendValueArr[3],
        'thu' => $attendValueArr[4],
        'fri' => $attendValueArr[5],
        'sat' => $attendValueArr[6],
      ]);

      if (! $student) {
        return back()->with('flash_message', '글이 저장되지 않았습니다.')->withInput();
      }



      return redirect(route('students.show',$student->id));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(\App\Student $student)
    {
        $student->delete();
        return redirect('/')->with('message','프로젝트'.$student->name.'이 삭제되었습니다.');
    }
}
