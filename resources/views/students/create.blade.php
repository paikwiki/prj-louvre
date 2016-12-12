@extends('layouts.master')


@section('content')
<form class="s-add" action="{{ route('student.store') }}" method="POST" enctype="multipart/form-data">
{{--  <form class="s-add" action="/students/1" method="get" enctype="multipart/form-data"> --}}

  {!! csrf_field() !!}
  <div class="section a-info">
    <ul>
      <li>
        <label for="s-name">학생명</label><input type="text" id="s-name" value="{{ old('s-name') }}">
      </li>
      <li>
        <label for="s-tel">전화번호</label><input type="text" id="s-tel">
      </li>
      <li>
        <label for="s-email">이메일</label><input type="email" id="s-email">
      </li>
      <li>
        <label for="s-pfpic">프로필 사진</label><input type="file" id="s-pfpic">
      </li>
      <li>
        <label for="s-birth">생년월일</label><input type="date" id="s-birth">
      </li>
      <li>
        <label for="s-enroll-date">등록일</label><input type="date" id="s-enroll-date">
      </li>
      <li>
        <label for="s-purpose">수강 목적</label><input type="text" id="s-purpose">
      </li>
    </ul>
    <button type="summit">등록하기</button>
  </div>
</form>
@endsection

@section('footer')

@endsection
