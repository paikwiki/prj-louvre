@extends('layouts.master')


@section('content')
<div class="students students-today">
  <h2>오늘의 수강생! - {{ $weekdayOfToday }}</h2>
  <ul class="clearfix">
    @if( !$todayStudents )
      <li class="clearfix">오늘의 수강생이 없습니다.</li>
    @else
      @foreach( $todayStudents as $todayStudent)
        <li class="clearfix">
          <div class="photo-box"><a href="/students/{{ $todayStudent->id }}"><img src="http://{{ $todayStudent->profile_pic ? $todayStudent->profile_pic : 'placehold.it/50x50' }}" alt="" class="photo"></a></div>
          <div class="info-box">
            <a href="/students/{{ $todayStudent->id }}">{{ $todayStudent->name }}</a>
{{--            <p>        @foreach( $attends as $attend )
                    {{ $attend.' ' }}
                  @endforeach</p>--}}
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
