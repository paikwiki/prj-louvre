@extends('layouts.master')

@section('title', 'Album')

@section('content')
<div class="album-box">
  @if( empty($albumArtworks) )
    <p class="artworks-empty">아직 앨범에 담긴 작품이 없어요. :(</p>
  @else
    <div class="album-artworks">
        @foreach( $albumArtworks as $albumArtwork )
          <figure class="a-item">
            <a href="/artworks/{{ $albumArtwork->id }}">
              @if($albumArtwork->photo=="default")
                  <img src="https://louvrebucket.s3.amazonaws.com/defaultuploads/defaultartwork.png" alt="artwork" class="a-photo">
              @else
                  <img src="https://louvrebucket.s3.amazonaws.com/artworkuploads/{{$albumArtwork->photo}}" alt="artwork" class="a-photo">
              @endif</a>
            {{--<figcaption><a href="/artworks/{{ $albumArtwork->id }}">{{ $albumArtwork->name }}</a></figcaption>--}}
          </figure>
        @endforeach
    </div>
  @endif
</div>

@endsection

@section('footer')

@endsection
