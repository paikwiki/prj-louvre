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
      <div class="edge-triangle"></div>
      <div class="s-box1">
        <div class="top-left">
          <ul>
             <li class="addpicture">
                <label for="imgInp"><img src='/image/final-image/icon_input_profile.png'></label>
                <input type="file" id="imgInp" name="profile_pic" value="{{ old('profile_pic') }}">
              </li>
                <img id="blah" src="#" alt="your image"/>
          </ul>
        </div>
        <div class="top-right">
          <div class="name">
            <label for="name"></label><input type="text" id="name" name="name" value="{{ old('name') }}"placeholder="학생명">
            {!! $errors->first('name', '<span class="form-error">:message</span>') !!}
          </div>
          <div class="birth">
            <input type="date" id="birth" name="birth" value="{{ old('birth') }}"><label for="birth">생일</label>
          </div>
          <div class="phone">
            <label for="tel"></label><input type="text" id="tel" name="tel" value="{{ old('tel') }}"placeholder="전화번호">
            {!! $errors->first('tel', '<span class="form-error">:message</span>') !!}
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
          <input type="checkbox" id="sun" name="sun" @if(old('sun')) checked @endif>
          <label for="sun" class="weekday">
             <span>일</span>
          </label>
          <input type="checkbox" id="mon" name="mon" @if(old('mon')) checked @endif>
          <label for="mon" class="weekday">
             <span>월</span>
          </label>
          <input type="checkbox" id="tue" name="tue" @if(old('tue')) checked @endif>
          <label for="tue" class="weekday">
             <span>화</span>
          </label>
          <input type="checkbox" id="wed" name="wed" @if(old('wed')) checked @endif>
          <label for="wed" class="weekday">
             <span>수</span>
          </label>
          <input type="checkbox" id="thu" name="thu" @if(old('thu')) checked @endif>
          <label for="thu" class="weekday">
             <span>목</span>
          </label>
          <input type="checkbox" id="fri" name="fri" @if(old('fri')) checked @endif>
          <label for="fri" class="weekday">
             <span>금</span>
          </label>
          <input type="checkbox" id="sat" name="sat" @if(old('sat')) checked @endif>
          <label for="sat" class="weekday">
             <span>토</span>
          </label>
          {!! $errors->first('enroll_date', '<span class="form-error">:message</span>') !!}
        </li>
        <li>
          <label for="purpose">수강 목적</label>
          <input type="text" id="purpose" name="purpose" value="{{ old('purpose') }}">
        </li>
        <li class="comment-box">
          <label for="comment">메모</label><textarea cols="52" rows= "4" id="comment" name="comment">{{ old('comment') }}</textarea>
        </li>
        <li class="status-box">
          <label>학적 상태</label>
          <input type="radio" id="yes" name="status" value="재학" checked>
          <label for="yes" class="radiobutton"><span>재학</span></label>
          <input type="radio" id="no" name="status" value="휴학">
          <label for="no" class="radiobutton"><span>휴학</span></label>

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
