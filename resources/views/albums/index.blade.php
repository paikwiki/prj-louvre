@extends('layouts.master')


@section('content')
<div class="album-box">
  <div class="album-artworks">
    @foreach( $albumArtworks as $albumArtwork )
      <figure class="a-item">
        <a href="/artworks/{{ $albumArtwork->id }}"><img src="https://louvrebucket.s3.amazonaws.com/artworkuploads/{{ $albumArtwork->photo }}" alt=""></a>
        {{--<figcaption><a href="/artworks/{{ $albumArtwork->id }}">{{ $albumArtwork->name }}</a></figcaption>--}}
      </figure>
    @endforeach
  </div>
</div>

@endsection

@section('footer')

@endsection
