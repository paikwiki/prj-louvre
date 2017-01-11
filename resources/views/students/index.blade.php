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
    @if( empty($todayStudents) )
      <li class="clearfix">오늘의 수강생이 없습니다.</li>
    @else
      @foreach( $todayStudents as $todayStudent)
        @if($todayStudent) <!--null값 때문에 에러나서 if문추가한거임 -수지- -->
          <li class="clearfix">
            <div class="photo-box"><a href="/students/{{ $todayStudent->id }}"><img src="{{ $todayStudent->profile_pic ? $todayStudent->profile_pic : 'http://placehold.it/50x50' }}" alt="" class="photo"></a></div>
            <div class="info-box">
              <a href="/students/{{ $todayStudent->id }}">{{ $todayStudent->name }} </a>
              <p>
                @foreach ($attendances as $attendance)
                  @if( $attendance->student_id == $todayStudent->id )
                    @if($attendance->mon==1)<span>월</span>@endif
                    @if($attendance->tue==1)<span>화</span>@endif
                    @if($attendance->wed==1)<span>수</span>@endif
                    @if($attendance->thu==1)<span>목</span>@endif
                    @if($attendance->fri==1)<span>금</span>@endif
                    @if($attendance->sat==1)<span>토</span>@endif
                    @if($attendance->sun==1)<span>일</span>@endif
                  @endif
                @endforeach
              </p>
              @if(substr($todayStudent->birth,-5)==$today)
                <p>생일축하^^</p>
              @endif
            </div>
            <div class="call-box">
              <a href="tel://{{ $todayStudent->tel }}">Call</a>
            </div>
          </li>
        @endif
      @endforeach
    @endif
  </ul>
</div>
<div class="students students-all clearfix">
  <h2>수강생 전체 목록</h2>
  <ul class="clearfix">
    @foreach( $students as $student)
      <li class="clearfix">
        <div class="photo-box"><a href="/students/{{ $student->id }}"><img src="{{ $student->profile_pic ? $student->profile_pic : 'http://placehold.it/50x50' }}"></a></div>
        <div class="info-box">
          <a href="/students/{{ $student->id }}">{{ $student->name }}</a>
          <p>
            @foreach ($attendances as $attendance)
              @if( $attendance->student_id == $student->id )
                @if( $attendance->mon ==1 )<span>월</span>@endif
                @if($attendance->tue==1)<span>화</span>@endif
                @if($attendance->wed==1)<span>수</span>@endif
                @if($attendance->thu==1)<span>목</span>@endif
                @if($attendance->fri==1)<span>금</span>@endif
                @if($attendance->sat==1)<span>토</span>@endif
                @if($attendance->sun==1)<span>일</span>@endif
              @endif
            @endforeach
        </p>
        @if(substr($student->birth,-5)==$today)
        <p>생일축하^^</p>
        @endif
        <div class="student-delete-box">
          <a href="{{route('students.destroy', $student->id)}}">삭제</a>
        </div>
        <div class="student-delete-box">
          <form method="POST" action="{{route('students.destroy', $student->id)}}">
            {{ csrf_field()}}
            {{method_field('DELETE')}}
            <button type="submit" class="btn btn-danger">삭제</button>
          </form>
        </div>
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
