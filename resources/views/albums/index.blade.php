@extends('layouts.master')

@section('header')
<div class="logo-box">
  <h1 class="logo"><a href="2-1.html">Louvre</a></h1>
</div>
<ul>
  <li><a href="2-1.html">학생리스트</a></li>
  <li><a href="3-1.html">검색</a></li>
  <li><a href="2-6.html">촬영</a></li>
  <li><a href="5-1.html">앨범</a></li>
  <li><a href="6-1.html">설정</a></li>
</ul>
@endsection

@section('content')
<div class="album-list-box">
  <ul>
    <li>
      <a href="5-2.html">
        <figure>
          <img src="http://placehold.it/30x30" alt="">
        </figure>
        <p>전체사진보기</p>
      </a>
    </li>
    <li>
      <a href="5-2.html">
        <figure>
          <img src="http://placehold.it/30x30" alt="">
        </figure>
        <p>즐겨찾기</p>
      </a>
    </li>
  </ul>
</div>
@endsection

@section('footer')

@endsection
