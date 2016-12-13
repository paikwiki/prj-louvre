@extends('layouts.master')


@section('content')
<div class="students students-today">

  <h2>오늘의 수강생! -
    @if($weekdayOfToday=='mon' )월 @endif
    @if($weekdayOfToday=='tue' )화 @endif
    @if($weekdayOfToday=='wed' )수 @endif
    @if($weekdayOfToday=='thu' )목 @endif
    @if($weekdayOfToday=='fri' )금 @endif
    @if($weekdayOfToday=='sat' )토 @endif
    @if($weekdayOfToday=='sun' )일 @endif
 </h2>
  <ul class="clearfix">
    @if( !$todayStudents )
      <li class="clearfix">오늘의 수강생이 없습니다.</li>
    @else
      @foreach( $todayStudents as $todayStudent)
        <li class="clearfix">
          <div class="photo-box"><a href="/students/{{ $todayStudent->id }}"><img src="http://{{ $todayStudent->profile_pic ? $todayStudent->profile_pic : 'placehold.it/50x50' }}" alt="" class="photo"></a></div>
          <div class="info-box">
            <a href="/students/{{ $todayStudent->id }}">{{ $todayStudent->name }}</a>
            <p>             @foreach ($attendances as $attendance)
                          @if( $attendance->student_id == $todayStudent->id )
                            @if($attendance->mon==1 )월&nbsp; @endif
                            @if($attendance->tue==1)화&nbsp; @endif
                            @if($attendance->wed==1)수&nbsp; @endif
                            @if($attendance->thu==1)목&nbsp; @endif
                            @if($attendance->fri==1)금&nbsp; @endif
                            @if($attendance->sat==1)토&nbsp; @endif
                            @if($attendance->sun==1)일&nbsp; @endif

                          @endif
                        @endforeach
            </p>
            <p> dd


            </p>

          </div>
          <div class="call-box">
            <a href="tel://{{ $todayStudent->tel }}">Call</a>
          </div>
        </li>
      @endforeach
    @endif
  </ul>
</div>
<div class="students stuendts-all clearfix">
  <h2>수강생 전체 목록</h2>
  <ul class="clearfix">
    @foreach( $students as $student)
      <li class="clearfix">
        <div class="photo-box"><a href="/students/{{ $student->id }}"><img src="http://{{ $todayStudent->profile_pic ? $todayStudent->profile_pic : 'placehold.it/50x50' }}" alt="" class="photo"></a></div>
        <div class="info-box">
          <a href="/students/{{ $student->id }}">{{ $student->name }}</a>
          <p>
            @foreach ($attendances as $attendance)
              @if( $attendance->student_id == $student->id )
                @if( $attendance->mon ==1 )월&nbsp; @endif
                @if($attendance->tue==1)화&nbsp; @endif
                @if($attendance->wed==1)수&nbsp; @endif
                @if($attendance->thu==1)목&nbsp; @endif
                @if($attendance->fri==1)금&nbsp; @endif
                @if($attendance->sat==1)토&nbsp; @endif
                @if($attendance->sun==1)일&nbsp; @endif

              @endif
            @endforeach

        </p>
        <p>

          @if($birthdayArr[($student->id)-1]==$tod)
          생일축하^^
          @endif

        </p>
        </div>
        <div class="call-box">
          <a href="tel://{{ $student->tel }}">Call</a>
        </div>
      </li>
    @endforeach
  </ul>
</div>
<div class="student-add-box">
  <div class="student-add-btn">
    <a href="students/create">학생 추가</a>
  </div>
</div>
@endsection

@section('footer')

@endsection
