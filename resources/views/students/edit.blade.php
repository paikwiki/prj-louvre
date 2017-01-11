@extends('layouts.master')


@section('content')
<form class="s-add" action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">

  {!! csrf_field() !!}
  <div class="s-info form-group">
       <div class="edge-triangle">
        </div>
    @if(session()->has('flash_message'))
      <div class="alert alert-info" role="alert">
        {{ session('flash_message') }}
      </div>
    @endif
    <div class="top-box clearfix">
        <div class="edge-triangle">
        </div>
    <div class="s-box1">

         <div class="top-left">
          <label for="profile-pic">
            <img src='/image/final-image/icon_input_profile.png'>
          </label>
          <input type="file" id="profile-pic" name="profile_pic" value="{{ old('profile_pic') }}">
        </div>

        <div class="top-right">

              <div class="name">
              <label for="name"></label><input type="text" id="name" name="name" value="{{ old('name') }}"placeholder="학생명">
               </div>
                <div class="birth">
              <label for="birth"></label><input type="date" id="birth" name="birth" value="{{ old('birth') }}">
               </div>

            <div class="phone">
              <label for="tel"></label><input type="text" id="tel" name="tel" value="{{ old('tel') }}"placeholder="전화번호">
            </div>
            <div class="email">
              <label for="email"></label><input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="이메일">
            </div>
        </div>
    </div>
  </div>
    <div class="bottom">
      <ul>

        <li class="enroll-date">
          <label for="enroll-date">등록일</label>
          <input type="date" id="enroll-date" name="enroll_date" value="{{ old('enroll_date') }}">

        </li>
        <li class="attendance-day">
          <label class="inner-day" for="attendance">수강요일</label>
          <!-- <select type="checkbox" id="attendance" name="attendance"> -->
            <input type="checkbox" id="sun" name="sun">
            <label for="sun">
               <span>일</span>
            </label>
            <input type="checkbox" id="mon" name="mon">
            <label for="mon">
               <span>월</span>
            </label>
            <input type="checkbox" id="tue" name="tue">
            <label for="tue">
               <span>화</span>
            </label>
            <input type="checkbox" id="wed" name="wed">
            <label for="wed">
               <span>수</span>
            </label>
            <input type="checkbox" id="thu" name="thu">
            <label for="thu">
               <span>목</span>
            </label>
            <input type="checkbox" id="fri" name="fri">
            <label for="fri">
               <span>금</span>
            </label>
            <input type="checkbox" id="sat" name="sat">
            <label for="sat">
               <span>토</span>
            </label>
        </li>
        <li>
          <label for="purpose">수강 목적</label><input type="text" id="purpose" name="purpose" value="{{ old('purpose') }}">
        </li>
        <li class="comment-box">
          <label for="comment">메모</label><textarea cols="52" rows= "4"id="comment" name="comment" value="{{ old('comment') }}"></textarea>

<!--          <input type="textarea" placeholder="메모하세요">-->
        </li>
        <li class="course-id-box">
          <label for="course-id">수강반</label><input type="text" id="course-id" name="course_id"  value={{$current_user_course}}>
        </li>
        <li class="status-box">
          <label>학적 상태</label>
          <label for="yes" class="radiobutton">재학</label>
          <input type="radio" id="yes" name="status" value="재학" >
          <label for="no" class="radiobutton">휴학</label>
          <input type="radio" id="no" name="status" value="휴학">
        </li>

        <li>
          <div class="attend">
            <button type="summit">등록하기</button>
          </div>
        </li>
      </ul>
    </div>
  </div>
</form>
@endsection

@section('footer')

@endsection
