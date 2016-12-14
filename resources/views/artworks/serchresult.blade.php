@extends('layouts.master')


@section('content')

@if($op_val ==0)
<div class="search-result-box">
  <div class="search-result-text">
    <p>총 {{$sum_result or 'Default'}}개의 결과가 있습니다.</p>
    <p>작품명검색결과:
      @foreach ($result_aw_names as $result_name)
      {{$result_name->name or 'Default'}} &nbsp;&nbsp;
      @endforeach </p>
  </div>
  <div class="search-result-artworks">
    @foreach( $result_aw_names as $result_name )
      <figure class="a-item">
        <a href="/artworks/{{ $result_name->id }}"><img src="http://{{ $result_name->photo ? $result_name->photo : 'placehold.it/120x120' }}" alt=""></a>
        <figcaption><a href="/artworks/{{ $result_name->id }}">{{ $result_name->name }}</a></figcaption>
      </figure>
    @endforeach
    @endif
    </div>
</div>

@if($op_val ==1)
<div class="search-result-box">
  <div class="search-result-text">
    <p>날짜검색결과:
      @foreach($result_a_d as $result_date)
      {{$result_date->name or 'Default'}} &nbsp;&nbsp;
      @endforeach</p>
    </div>
    <div class="search-result-artworks">
      @foreach( $result_a_d as $result_date )
        <figure class="a-item">
          <a href="/artworks/{{ $result_date->id }}"><img src="http://{{ $result_date->photo ? $result_date->photo : 'placehold.it/120x120' }}" alt=""></a>
          <figcaption><a href="/artworks/{{ $result_date->id }}">{{ $result_date->name }}</a></figcaption>
        </figure>
      @endforeach
    </div>
</div>
@endif
@if($op_val==2)
<div class="search-result-box">
  <div class="search-result-text">
    <p>유형검색결과:
      @foreach($result_types as $result_type)
      {{$result_type->name or 'Default'}}&nbsp;&nbsp;
      @endforeach</p>
  </div>
  <div class="search-result-artworks">
    @foreach( $result_types as $result_type )
      <figure class="a-item">
        <a href="/artworks/{{ $result_type->id }}"><img src="http://{{ $result_type->photo ? $result_type->photo : 'placehold.it/120x120' }}" alt=""></a>
        <figcaption><a href="/artworks/{{ $result_type->id }}">{{ $result_type->name }}</a></figcaption>
      </figure>
    @endforeach
  </div>
</div>
@endif

@if($op_val==3)
<div class="search-result-box">
  <div class="search-result-text">
    <p>태그검색결과:
      @foreach($result_tags as $result_tag)
      {{$result_tag->name or 'Default'}} &nbsp;&nbsp;
      @endforeach</p>
  </div>
  <div class="search-result-artworks">
    @foreach( $result_tags as $result_tag )
      <figure class="a-item">
        <a href="/artworks/{{ $result_tag->id }}"><img src="http://{{ $result_tag->photo ? $result_tag->photo : 'placehold.it/120x120' }}" alt=""></a>
        <figcaption><a href="/artworks/{{ $result_tag->id }}">{{ $result_tag->name }}</a></figcaption>
      </figure>
    @endforeach
  </div>
</div>
@endif

@endsection

@section('footer')

@endsection
