<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

      $students = \App\Student::get();
      // $student2 = \App\Student::where('id', $id)->first();//수강일구하기용

      //요일 구하기
      $weekdayArr = ['sun', 'mon', 'tue', 'wed', 'thu', 'fri', 'sat', ];
      // var_dump(date('w'));
      $weekdayOfToday = $weekdayArr[date("w")];
      // $weekdayOfToday = 'thu';
      // var_dump($weekdayOfToday);

      // 오늘의 수강생 아이디 확인하기
      $todayStudentIds = \App\Attendance::where($weekdayOfToday, 1)->get();
      $todayStudentIdArr = [];
      foreach($todayStudentIds as $todayStudentId)
      {
        array_push($todayStudentIdArr, $todayStudentId->id);
      }
      // var_dump($todayStudentIdArr);
      // 오늘의 수강생 목록 만들기
      $todayStudents = [];
      foreach( $todayStudentIdArr as $todayStudentId ) {
        $target = $students->where('id', $todayStudentId)->first();
        array_push($todayStudents, $target);
        // var_dump($target->name);
      }
      // 수강일 구하기
      // $attendanceInfo = \App\Attendance::where('student_id', $id)->first();
      // $weekdayArr = ['mon', 'tue', 'wed', 'thu', 'fri', 'sat', 'sun'];
      // $attends = [];
      // foreach ($weekdayArr as $weekday) {
      //   if( $attendanceInfo->$weekday == 1 )
      //   {
      //     array_push($attends, $weekday);
      //   }
      // }
      return view('students.index', [
        // 'student2' => $student2,
        'students' => $students,
        'todayStudents' => $todayStudents,
        'weekdayOfToday' => $weekdayOfToday,
        // 'attends' => $attends,
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('students.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        // var_dump($dDay);


        // 작품 가져오기
        $artworks = \App\Artwork::where('student_id', $id)->get();

        // 총 작품 수 구하기
        $artworksCount = count($artworks);
        // var_dump($artworksCount);

        // 지금까지한 유형 구하기
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
        $engagementAvg = round($engagementSum/count($artworks), 2);
        $completenessAvg = round($completenessSum/count($artworks), 2);


        return view('students.show', [
          'student' => $student,
          'attends' => $attends,
          'userName' => $userName,
          'artworks' => $artworks,
          'artworksCount' => $artworksCount,
          'eachTagCounts' => $eachTagCounts,
          'engagementAvg' => $engagementAvg,
          'completenessAvg' => $completenessAvg,
          'dDay' => $dDay,
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
