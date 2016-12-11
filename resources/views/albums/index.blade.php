@extends('layouts.master')


@section('content')
<div class="album-box">
  <div class="album-artworks">
    @foreach( $albumArtworks as $albumArtwork )
      <figure class="a-item">
        <a href="/artworks/{{ $albumArtwork->id }}"><img src="http://{{ $albumArtwork->photo ? $albumArtwork->photo : 'placehold.it/120x120' }}" alt=""></a>
        <figcaption><a href="/artworks/{{ $albumArtwork->id }}">{{ $albumArtwork->name }}</a></figcaption>
      </figure>
    @endforeach
  </div>
</div>

@endsection

@section('footer')

@endsection
