@extends('layouts.master')


@section('content')
<div class='a-wrap'>
    <div class="a-photo-box">
      <img src="http://placehold.it/640x480" alt="" class="a-photo">
      <a href="#" class="like-btn">좋아요!</a>
    </div>
    <div class="a-info-full">
        <div class="a-info">
            <p>작품명 : <span>{{ $artwork->name }}</span>({{ $type->name }})</p>
            <p>학생이름 : <a href="/students/{{ $student->id }}"<span>{{ $student->name }}</span><a></p>

          <p><span>@foreach ( $tags as $tag )
            #{{ $tag->name }}&nbsp;
          @endforeach</span></p>
          <p>그린 날짜 : <span>{{ $artwork->date }}</span></p>
        </div>
        <div class="a-point">
          <div class="width-half a-engagement">
            <p>{{ $artwork->engagement }}</p> <span>몰입도</span>
          </div>
          <div class="width-half a-point">
             <p>{{ $artwork->completeness }}</p> <span>완성도</span>
          </div>
        </div>
        <div class="a-comment-box">
          <div class="a-comment">
            {{ $artwork->feedback }}
          </div>
        </div>
    </div>
</div>
@endsection

@section('footer')

@endsection
