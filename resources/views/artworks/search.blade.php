@extends('layouts.master')


@section('content')
<div class="search-box">
  <form class="search" method="post" action="{{ route('artworks.store') }}" role="">
    {!! csrf_field() !!}
<input type="hidden" id="search-word" name="testName" value="louvre">
    <select name="a_type" id="a-type">
      <option value="0">작품명</option>
      <option value="1">날짜</option>
      <option value="2">유형</option>
      <option value="3">태그</option>
    </select>
    <input type="text" id="search-word" name="search_word" placeholder="">
    <button type="submit">검색</button>
  </form>
</div>
<div class="search-recent">
  <h2>최근검색</h2>
  <ul>
    <li><a href="#">수채화</a></li>
    <li><a href="#">김지훈</a></li>
    <li><a href="#">기초반</a></li>
  </ul>
</div>
@endsection

@section('footer')

@endsection
