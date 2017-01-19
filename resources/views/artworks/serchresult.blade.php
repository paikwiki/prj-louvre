@extends('layouts.master')

@section('content')
<div class="search-result-box">
  <div class="search-result-text">
    @if( count($resultArtworkArr) == 0 )
      <p>검색어에 해당하는 작품이 없어요. :(</p>
    @elseif ( $searchWord == '' )
      <p>검색어를 입력하지 않았어요 :( 모든 작품 목록을 보여드릴게요.</p>
    @else
      <p>"{{ $searchCategory[$optionVal] }}"에서 "{{ $searchWord }}" 찾기 : {{ count($resultArtworkArr) }}개 찾았습니다.</p>
    @endif
  </div>
  <div class="search-result-artworks">
    @foreach( $resultArtworkArr as $resultArtwork )
      <figure class="a-item">
        <a href="/artworks/{{ $resultArtwork->id }}">
          @if($resultArtwork->photo=="default")
            <img src="https://louvrebucket.s3.amazonaws.com/defaultuploads/defaultartwork.png" alt="artwork" class="a-photo">
          @else
            <img src="https://louvrebucket.s3.amazonaws.com/artworkuploads/{{$resultArtwork->photo}}" alt="artwork" class="a-photo">
          @endif
        </a>
        <figcaption>
          <ul>
            <li><a href="/artworks/{{ $resultArtwork->id }}}">{{ $resultArtwork->name }}</a></li>
            <li><span class="name">{{ $resultArtwork->student->name }}</span><span class="date">{{ $resultArtwork->date }}</span></li>
          </ul>
        </figcaption>
      </figure>
    @endforeach
    </div>
</div>
@endsection

@section('footer')

@endsection
