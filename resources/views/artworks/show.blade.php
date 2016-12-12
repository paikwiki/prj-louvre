@extends('layouts.master')


@section('content')
<div class="a-photo-box">
  <img src="http://placehold.it/640x480" alt="" class="a-photo">
  <a href="#" class="like-btn">좋아요!</a>
</div>
<div class="section a-info">
  {{ $artwork->name }}({{ $type->name }}) / {{ $student->name }} /
  @foreach ( $tags as $tag )
    #{{ $tag->name }}&nbsp;
  @endforeach
   / {{ $artwork->date }}
</div>
<div class="section a-point">
  <div class="width-half a-engagement">
    몰입도 {{ $artwork->engagement }}
  </div>
  <div class="width-half a-point">
    완성도 {{ $artwork->completeness }}
  </div>
</div>
<div class="section a-comment-box">
  <div class="a-comment">
    {{ $artwork->feedback }}
  </div>
</div>

@endsection

@section('footer')

@endsection
