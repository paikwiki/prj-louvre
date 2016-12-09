@extends('layouts.master')


@section('content')
<div class="search-box">
  <form class="search" method="get" action="artworks/tags" role="">
    <select name="a-type" id="a-type">
      <option value="0">작품명</option>
      <option value="1">학생명</option>
      <option value="2">학생명</option>
      <option value="3">태그검색</option>
    </select>
    <input type="text" id="search-word" placeholder="">
    <button>검색</button>
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
