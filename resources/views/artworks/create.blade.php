@extends('layouts.master')

@section('content')
<div class="a-add-box">
  <form class="a-add" action="{{ route('artworks.store') }}" method="POST" enctype="multipart/form-data">
    <ul>
      <li>
        <label for="profile-pic">프로필 사진</label><input type="file" id="photo" name="photo" value="{{ old('profile_pic') }}">
      </li>
      <li>
        <label for="name">작품명</label><input type="text" id="name" name="name">
        <select id="type-id" name="type_id">
          <option value="0">유형A</option>
          <option value="1">유형B</option>
          <option value="2">유형C</option>
          <option value="2">유형D</option>
        </select>
      </li>
      <li>
        <label for="student-id">학생명</label><input type="text" id="student-id" name="student_id">
      </li>
      <li>
        <label for="date">등록일</label>
        <input id="date" type="date"></input>
      </li>
      <li>
        <label for="completeness">완성도</label>
        <div id="output"></div>
        <input type="range" id="completeness" value="10" name="completeness">
      </li>
      <li>
        <label for="engagement">몰입도</label>
        <div id="output"></div>
        <input type="range" id="engagement" value="10" name="engagement">
      </li>
      <li>
        <label for="tags">태그</label>
        <input type="text" id="tags" name="tags">
      </li>
      <li>
        <label for="feedback">코멘트</label>
        <input type="text" id="feedback" name="feedback">
      </li>
    </ul>
    <button><span class="icon-cancel"></span>취소</button>
    <button type="submit"><span class="icon-submit"></span>저장</button>
  </form>
</div>
@endsection

@section('footer')

@endsection
