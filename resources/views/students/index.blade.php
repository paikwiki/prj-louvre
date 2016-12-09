@extends('layouts.master')


@section('content')
<div class="students students-today">
  <h2>오늘의 수강생</h2>
  <ul>
    @for ($i = 0; $i < 4; $i++)
      <li>
        <div class="photo-box"><a href="2-2.html"><img src="" alt="" class="photo"></a></div>
        <div class="info-box">
          <a href="/students/1">이름</a>
        </div>
        <div class="call-box">
          <a href="tel://000-000-0000">Call</a>
        </div>
      </li>
    @endfor
  </ul>
</div>
<div class="students stuendts-all">
  <h2>수강생 전체 목록</h2>
  <ul>
    @for ($i = 0; $i < 4; $i++)
      <li>
        <div class="photo-box"><a href="2-2.html"><img src="" alt="" class="photo"></a></div>
        <div class="info-box">
          <a href="/students/1">이름</a>
        </div>
        <div class="call-box">
          <a href="tel://000-000-0000">Call</a>
        </div>
      </li>
    @endfor
  </ul>
</div>
<div class="student-add-box">
  <div class="student-add-btn">
    <a href="students/add">학생 추가</a>
  </div>
</div>
@endsection

@section('footer')

@endsection
