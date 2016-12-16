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
  <h2>최근검색어</h2>
  <ul>
    <li>
      <a href="">
        <span class="item-name">유웅기</span>
      </a>
      <div class="box">
        <span class="search-date">12.25</span>
        <a><span class="close-btn">x</a>
      </div>
    </li>
    <li>
      <a href="">
        <span class="item-name">타이포그래피</span>
      </a>
      <div class="box">
        <span class="search-date">12.24</span>
        <a><span class="close-btn">x</a>
      </div>
    </li>
    <li>
      <a href="">
        <span class="item-name">손승우</span>
      </a>
      <div class="box">
        <span class="search-date">12.24</span>
        <a><span class="close-btn">x</a>
      </div>
    </li>
    <li>
      <a href="">
        <span class="item-name">정준수</span>
      </a>
      <div class="box">
        <span class="search-date">12.23</span>
        <a><span class="close-btn">x</a>
      </div>
    </li>
    <li>
      <a href="">
        <span class="item-name">유화</span>
      </a>
      <div class="box">
        <span class="search-date">12.19</span>
        <a><span class="close-btn">x</a>
      </div>
    </li>
  </ul>
</div>
@endsection

@section('footer')

@endsection
