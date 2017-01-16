@extends('layouts.master')


@section('content')
<div class="album-box">
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
</div>

@endsection

@section('footer')

@endsection
