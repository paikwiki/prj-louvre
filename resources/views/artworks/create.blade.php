@extends('layouts.master')


@section('content')
<div class="a-photo-box">
  <img src="http://placehold.it/640x480" alt="" class="a-photo">
</div>
<div class="a-add-box">
  <form class="a-add" method="get" action="/artworks/1" role="">
    <div class="section a-info">
      <label for="a-name">작품명</label>
      <input type="text" id="a-name">
      <select name="a-type" id="a-type">
        <option value="0">유형A</option>
        <option value="1">유형B</option>
        <option value="2">유형C</option>
        <option value="2">유형D</option>
      </select>
      <input type="date"></input>
    </div>
    <div class="section a-points">
      <div class="width-half">
        <label for="a-engagement">몰입도</label>
        <input type="range" id="a-engagement" value="10" name="a-engagement"> <div id="output"></div>
      </div>
      <div class="width-half">
        <label for="a-completeness">완성도</label>
        <input type="range" id="a-completeness" value="10" name="a-completeness"> <div id="output"></div>
      </div>
    </div>


    <button>등록하기</button>
  </form>
</div>
@endsection

@section('footer')

@endsection
