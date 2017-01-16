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
          <input type="file" id="profile-pic" name="profile_pic" value="{{ old('profile_pic', $student->profile_pic) }}">
        </div>

        <div class="top-right">

              <div class="name">
              <label for="name"></label><input type="text" id="name" name="name" value="{{ old('name', $student->name) }}"placeholder="학생명">
               </div>
                <div class="birth">
              <label for="birth"></label><input type="date" id="birth" name="birth" value="{{ old('birth', $student->birh) }}">
               </div>

            <div class="phone">
              <label for="tel"></label><input type="text" id="tel" name="tel" value="{{ old('tel', $student->tel) }}"placeholder="전화번호">
            </div>
            <div class="email">
              <label for="email"></label><input type="email" id="email" name="email" value="{{ old('email', $student->email) }}" placeholder="이메일">
            </div>
        </div>
    </div>
  </div>

    <div class="bottom">
      <ul>
        <li class="enroll-date">
          <label for="enroll-date">등록일</label>
          <input type="date" id="enroll-date" name="enroll_date" value="{{ old('enroll_date', $student->enroll_date) }}">
        </li>
        <li class="attendance-day">
          <label class="inner-day" for="attendance">수강요일</label>
          <!-- <select type="checkbox" id="attendance" name="attendance"> -->
            <input type="checkbox" id="sun" name="sun" value="sun" {{ $attendValueArr[0]==1 ? 'checked' : ''}}>
            <label for="sun">
               <span>일</span>
            </label>
            <input type="checkbox" id="mon" name="mon" value="mon" {{ $attendValueArr[1]==1 ? 'checked' : ''}}>
            <label for="mon">
               <span>월</span>
            </label>
            <input type="checkbox" id="tue" name="tue" value="tue" {{ $attendValueArr[2]==1 ? 'checked' : ''}}>
            <label for="tue">
               <span>화</span>
            </label>
            <input type="checkbox" id="wed" name="wed" value="wed" {{ $attendValueArr[3]==1 ? 'checked' : ''}}>
            <label for="wed">
               <span>수</span>
            </label>
            <input type="checkbox" id="thu" name="thu" value="thu" {{ $attendValueArr[4]==1 ? 'checked' : ''}}>
            <label for="thu">
               <span>목</span>
            </label>
            <input type="checkbox" id="fri" name="fri" value="fri" {{ $attendValueArr[5]==1 ? 'checked' : ''}}>
            <label for="fri">
               <span>금</span>
            </label>
            <input type="checkbox" id="sat" name="sat" value="sat" {{ $attendValueArr[6]==1 ? 'checked' : ''}}>
            <label for="sat">
               <span>토</span>
            </label>
        </li>
        <li>
          <label for="purpose">수강 목적</label><input type="text" id="purpose" name="purpose" value="{{ old('purpose',$student->purpose) }}">
        </li>
        <li class="comment-box">
          <label for="comment">메모</label><textarea cols="52" rows= "4"id="comment" name="comment" value="{{ old('comment',$student->comment) }}"></textarea>

<!--          <input type="textarea" placeholder="메모하세요">-->
        </li>
        <li class="status-box">
          <label>학적 상태</label>


          <label for="yes" class="radiobutton">재학</label>
          <input type="radio" id="yes" name="status" value="재학" {{ $student->status=="재학" ? 'checked' : ''}}>
          <label for="no" class="radiobutton">휴학</label>
          <input type="radio" id="no" name="status" value="휴학" {{ $student->status=="휴학" ? 'checked' : ''}}>
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
