@extends('layouts.master')

@section('title', 'Artwork-'.$artwork->id)

@section('content')
<div class='a-wrap box-container'>
  <div class="a-photo-box">
    @if($artwork->photo=="default")
      <img src="https://louvrebucket.s3.amazonaws.com/defaultuploads/defaultartwork.png" alt="artwork" class="a-photo">
    @else
      <img src="https://louvrebucket.s3.amazonaws.com/artworkuploads/{{$artwork->photo}}" alt="artwork" class="a-photo">
    @endif
    <form class="like-btn" action="{{ route('albums.store') }}" method="POST" enctype="multipart/form-data">
      {!! csrf_field() !!}
      <input type="hidden" name="artwork_id" value="{{ $artwork->id }}">
      @if(\App\Album::where('user_id','=',Auth::user()->id)->first() and App\Album::where('artwork_id','=', $artwork->id)->first())
        <button type="submit" id="like_red" name="button">좋아요</button>
      @else
        <button type="submit" id="like_empty" name="button">좋아요</button>
      @endif
    </form>
  </div>
  <div class="artwork-delete-box">
    <a href="javascript:void(0);" onclick="$(this).find('form').submit();" >
        <form id="myform" action="{{ route('artworks.destroy', $artwork->id) }}" method="post">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </form>
    </a>
  </div>
  <script>
  jQuery(document).ready(function($){
       $('#myform').on('submit',function(e){
          if(!confirm('삭제하시겠습니까?')){
                e.preventDefault();
          }
        });
  });
  </script>
  <div class="artwork-modify-box">
    <a href="{{route('artworks.edit', $artwork->id)}}">수정하기</a>
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
      @if( count($tags) > 0)
        @foreach ( $tags as $tag )
        <li><span>{{ $tag->name }}</span></li>
        @endforeach
      @else
        <li><span>태그가 없습니다.</span></li>
      @endif
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
