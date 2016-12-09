@extends('layouts.master')


@section('content')

<div class="search-box">
  <form class="search" method="get" action="3-2.html" role="">
    <select name="a-type" id="a-type">
      <option value="0">작품명</option>
      <option value="1">학생명</option>
      <option value="2">학생명</option>
      <option value="3">태그검색</option>
    </select>
    <input type="text" id="search-word" placeholder="학생이름">
    <button>검색</button>
  </form>
</div>
<div class="search-result-box">
  <div class="search-result-text">
    <p>총 9개의 결과가 있습니다.</p>
  </div>
  <div class="search-result-artworks">
    @for ($i = 0; $i < 9; $i++)
      <figure class="a-item">
        <a href="2-5.html"><img src="http://placehold.it/120x120" alt=""></a>
        <figcaption>
          <p class="a-name"><a href="/artworks/1">작품명</a></p>
          <p class="a-author"><a href="/students/2">학생이름</a></p>
        </figcaption>
      </figure>
    @endfor
  </div>
</div>

@endsection

@section('footer')

@endsection
