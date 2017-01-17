@extends('layouts.master')


@section('content')


@if($op_val ==0)
<div class="search-result-box">
  <div class="search-result-text">
    <p>총 {{$sum_result or 'Default'}}개의 결과가 있습니다.</p>
{{--    <p>작품명검색결과:
      @foreach ($result_aw_names as $result_name)
      {{$result_name->name or 'Default'}} &nbsp;&nbsp;
      @endforeach </p> --}}
  </div>
  <div class="search-result-artworks">
    @foreach( $result_n as $result_name )
      <figure class="a-item">
        <a href="/artworks/{{ $result_name->id }}">
          @if($result_name->photo=="default")
            <img src="https://louvrebucket.s3.amazonaws.com/defaultuploads/defaultartwork.png" alt="artwork" class="a-photo">
          @else
            <img src="https://louvrebucket.s3.amazonaws.com/artworkuploads/{{$result_name->photo}}" alt="artwork" class="a-photo">
          @endif
        </a>
        <figcaption>
          <ul>
            <li><a href="/artworks/{{ $result_name->id }}}">{{ $result_name->name }}</a></li>
            <li><span class="name">작가명</span><span class="date">2016.12.25.</span></li>
          </ul>
        </figcaption>
      </figure>
    @endforeach
    @endif
    </div>
</div>

@if($op_val ==1)
<div class="search-result-box">
  <div class="search-result-text">
    <p>총 {{$sum_result or 'Default'}}개의 결과가 있습니다.</p>
    </div>
    <div class="search-result-artworks">
      @foreach( $result_d as $result_date )
        <figure class="a-item">
          <a href="/artworks/{{ $result_date->id }}"><img src="https://louvrebucket.s3.amazonaws.com/artworkuploads/{{ $result_date->photo }}" alt=""></a>
          <figcaption>
            <ul>
              <li><a href="/artworks/{{ $result_date->id }}">{{ $result_date->name }}</a></li>
              <li><span class="name">작가명</span><span class="date">2016.12.25.</span></li>
            </ul>
          </figcaption>
        </figure>
      @endforeach
    </div>
</div>
@endif
@if($op_val==2)
<div class="search-result-box">
  <div class="search-result-text">
    <p>총 {{$sum_result or 'Default'}}개의 결과가 있습니다.</p>
  </div>
  <div class="search-result-artworks">
    @foreach( $result_tp as $result_type )
      <figure class="a-item">
        <a href="/artworks/{{ $result_type->id }}"><img src="https://louvrebucket.s3.amazonaws.com/artworkuploads/{{ $result_type->photo }}" alt=""></a>
        <figcaption>
          <ul>
              <li><a href="https://louvrebucket.s3.amazonaws.com/artworkuploads/{{ $result_type->id }}">{{ $result_type->name }}</a></li>
              <li class="name">작가명</li>
              <li class="date">2016.12.25</li>
            </ul>
        </figcaption>
      </figure>
    @endforeach
  </div>
</div>
@endif

@if($op_val==3)
<div class="search-result-box">
  <div class="search-result-text">
    <p>총 {{$sum_result or 'Default'}}개의 결과가 있습니다.</p>
  </div>
  <div class="search-result-artworks">
    @foreach( $result_tg as $result_tag )
      <figure class="a-item">
        <a href="/artworks/{{ $result_tag->id }}"><img src="https://louvrebucket.s3.amazonaws.com/artworkuploads/{{ $result_tag->photo }}" alt=""></a>
        <figcaption>
          <ul>
            <li><a href="/artworks/{{ $result_tag->id }}">{{ $result_tag->name }}</a></li>
            <li><span class="name">작가명</span><span class="date">2016.12.25.</span></li>
          </ul>
        </figcaption>
      </figure>
    @endforeach
  </div>
</div>
@endif

@endsection

@section('footer')

@endsection
