@extends('layouts.master')


@section('content')

<div class="s-profile clearfix">
  <div class="profile-artwork">
      <img src="/image/final-image/artwork01.png" alt="">
  </div>
  <div class="profile-div">
      <div class="profile-pic-box">
        <img src="http://placehold.it/96x96" alt="" class="profile-pic">
      </div>
  </div>
  <div class="student-info-box">
    <ul class="student-info">
      <li>{{  $student->name }}</li>
      <li>{{  $student->enroll_date }}</li>
      <li>
        {{  $userName }} /
        @foreach($attends as $attend)
          @if($attend == 'mon')월&nbsp;@endif
          @if($attend == 'tue')화&nbsp;@endif
          @if($attend == 'wed')수&nbsp;@endif
          @if($attend == 'thu')목&nbsp;@endif
          @if($attend == 'fri')금&nbsp;@endif
          @if($attend == 'sat')토&nbsp;@endif
          @if($attend == 'sun')일&nbsp;@endif
        @endforeach
      </li>
    </ul>
  </div>
  <div class="contact-box">
    <ul>
      <li><a href="tel://{{  $student->tel }}">전화하기</a></li>
      <li><a href="mailto:{{  $student->email }}">메일보내기</a></li>
    </ul>
  </div>
  <div class="student-modify-box">
    <a href="/students/create">수정하기</a>
  </div>
</div> <!-- /.s-profile -->
<div class="tab-selector clearfix">
  <ul>
    <li><a href="#" class="tab-info tab01">정보</a></li>
    <li><a href="#" class="tab-artworks tab02">작품</a></li>
  </ul>
</div>
<div class="box-container">
  <div class="tab-box info-box tab-content01 clearfix show">
    <div class="section summary-box">
      <ul>
        <li>등록한지 {{ $dDay }}일 됐어요.</li>
        <li>유화를 많이 그렸어요.</li>
        <li>현재 소묘를 그리고 있어요.</li>
        <li>앞으로 하고 싶은 건 "{{ $student->purpose }}"입니다.</li>
      </ul>
    </div>
    <div class="section s-total clearfix">
      <div class="width-half s-total-all">
        <h2>총 작품</h2>
        <p>{{ $artworksCount }}점</p>
      </div>
      <div class="width-half s-total-detail">
        <h2>태그 보기</h2>
        <ul>
          @foreach ( $eachTagCounts as $key=>$value )
          <li><p><span>{{ $key }}</span> {{ $value }}개</p></li>
          @endforeach
        </ul>
      </div>
    </div>
    <div class="section s-average clearfix">
      <div class="width-half">
        몰입도 {{ $engagementAvg }}
      </div>
      <div class="width-half">
        작품 완성도 {{ $completenessAvg }}
      </div>
    </div>
    <div class="section s-graph-box clearfix">
      <div class="width-full">
        강의 몰입도 그래프
      </div>
      <div class="width-full">
        작품 완성도 그래프
      </div>
    </div>
    <div class="section s-tagcloud clearfix">
      태그 클라우드
    </div>
    <div class="section s-comment-box clearfix">
      <div class="s-comment">
        <h2>코멘트 모아보기</h2>
        <ul>
            @foreach( $artworks as $artwork )
              <li>
                <a href="/artworks/{{ $artwork->id }}">{{ $artwork->feedback }}</a>
              </li>
            @endforeach
        </ul>
      </div>
    </div>
  </div>
  <div class="tab-box artworks-box tab-content02 clearfix hide">
    <div class="artworks">
      @foreach( $artworks as $artwork )
        <figure class="myartwork">
          <a href="/artworks/{{ $artwork->id }}">
            <img src="http://{{ $artwork->photo ? $artwork->photo : 'placehold.it/120x120' }}" alt=""> </a>
            <figcaption>
                <a href="/artworks/{{ $artwork->id }}">
                        {{ $artwork->name }}</a>
            </figcaption>

        </figure>

      @endforeach
    </div>
  </div>
</div>
<div class="student-add-box">
  <div class="student-add-btn">
    <a href="/artworks/create">작품 추가</a>
  </div>
</div>

@endsection

@section('footer')

@endsection
