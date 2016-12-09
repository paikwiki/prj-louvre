@extends('layouts.master')


@section('content')

<div class="a-photo-box">
  <img src="http://placehold.it/640x480" alt="" class="a-photo">
  <a href="#" class="like-btn">좋아요!</a>
</div>
<div class="section a-info">
  작품명(유형) / 학생명 / #태그 #태그 / 2016.12.28.
</div>
<div class="section a-point">
  <div class="width-half a-engagement">
    몰입도 7.9
  </div>
  <div class="width-half a-point">
    완성도 5.6
  </div>
</div>
<div class="section a-comment-box">
  <div class="a-comment">
    한줄 코멘트
  </div>
</div>


@endsection

@section('footer')

@endsection
