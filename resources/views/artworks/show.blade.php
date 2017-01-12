@extends('layouts.master')


@section('content')
<div class='a-wrap box-container'>
  <div class="a-photo-box">
    <img src="https://louvrebucket.s3.amazonaws.com/artworkuploads/{{$artwork->photo}}" alt="artwork" class="a-photo">
    <form class="like-btn" action="{{ route('albums.store') }}" method="POST" enctype="multipart/form-data">
      {!! csrf_field() !!}
      <input type="hidden" name="aid" value="{{ $artwork->id }}">
      <button type="submit" name="button">좋아요</button>
    </form>
  </div>
  <div class="a-info-box">
    <div class="a-info">
      <h2 class="a-name">{{ $artwork->name }}</h2>
      <p class="a-date">{{ $artwork->date }}</p>
      <p calss=""><span class="a-student-name"><a href="/students/{{ $student->id }}">{{ $student->name }}</a></span> | <span class="a-type"> {{ $type->name }}</span></p>
    </div>
  </div>
  <div class="section clearfix">
    <div class="edge-triangle"></div>
    <div class="box-header">
      <h2><span class="box-header-icon icon-evaluate"></span>Evaluation</h2>
    </div>
    <div class="a-point">
      <div class="width-half a-engagement">
        <span>강의 몰입도</span>
        <p>{{ $artwork->engagement }}</p>
      </div>
      <div class="width-half a-point">
        <span>학습 난이도</span>
         <p>{{ $artwork->completeness }}</p>
      </div>
    </div>
  </div>
  <div class="section s-tagcloud clearfix">
    <div class="edge-triangle"></div>
    <div class="box-header">
      <h2><span class="box-header-icon icon-tagcloud"></span>Tag Cloud</h2>
    </div>
    <ul>
      @foreach ( $tags as $tag )
      <li><span>{{ $tag->name }}</span></li>
    @endforeach
    </ul>
  </div>
  <div class="section clearfix">
    <div class="edge-triangle"></div>
    <div class="box-header">
      <h2><span class="box-header-icon icon-comment"></span>Comment</h2>
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
