@extends('layouts.master')


@section('content')

<div class="s-profile clearfix">
  <div class="profile-artwork">
      {{-- <img src="/image/final-image/artwork01.png" alt=""> --}}
      <img src="{{ $artworks[0]->photo }}" alt="" />
  </div>
  <div class="profile-div">
      <div class="profile-pic-box">
        <img src="{{ $student->profile_pic ? $student->profile_pic : 'http://placehold.it/96x96' }}" alt="" class="profile-pic">
      </div>
  </div>
  <div class="student-info-box">
    <ul class="student-info">
      <li class='student-name'>{{  $student->name }}</li>
      <li class='student-enroll-date'>{{  $student->enroll_date }}</li>
      <li class='student-attendant-day'>
        {{  $userName }} 선생님 /
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
      <li class='icon-call'><a href="tel://{{  $student->tel }}"><img src='/image/final-image/icon_call.png' alt="전화하기"></a><span>Phone</span></li>
      <li class='icon-mail'><a href="mailto:{{  $student->email }}"><img src='/image/final-image/icon_mail.png' alt="메일보내기"></a><span>Mail</span></li>
    </ul>
  </div>
  <div class="student-modify-box">
    <a href="/students/{{$student->id}}/edit">수정하기</a>
  </div>
</div> <!-- /.s-profile -->
<div class="tab-selector clearfix">
  <ul>
    <li><div class="tab-info tab01">정보</div></li>
    <li><div href="" class="tab-artworks tab02">작품</div></li>
  </ul>
</div>
<div class="box-container">
  <div class="tab-box info-box tab-content01 clearfix show">
    <div class="section summary-box">
        <div class="edge-triangle">
        </div>
         <div class="icon-summary">
             <img src='/image/final-image/icon_translate.png'><span>Summary</span>
         </div>
         <div class="dotdotdot">
             <img src='/image/final-image/dotdotdot.png'>
         </div>

          <ul>
            <li>등록한지 <span>"{{ $dDay }}"</span>일 됐어요.</li>
            <li><span>{{--"{{$type}}"--}}유화</span>를 많이 그렸어요.</li>
            <li>최근에 <span>"{{$artwork_recent->name}}"</span>를 그렸어요.</li>
            <li>앞으로 하고 싶은 건 <span>"{{ $student->purpose }}"</span>입니다.</li>
          </ul>
          <div class="s-total">
            <div class="s-total-all">
            <span>총 작품</span>
            <p>{{ $artworksCount }}점</p>
            </div>

            <div class="s-total-detail">

            <ul>
              @foreach ( $eachTagCounts as $key=>$value )
              <li><p>{{ $key }}<span> {{ $value }}개</span></p></li>
              @endforeach
            </ul>
            </div>
        </div>
    </div>

    <div class="section s-average clearfix">
        <div class="edge-triangle"></div>

      <div class="width-half">
        <h2>몰입도</h2>
        <p>{{ $engagementAvg }}</p>
      </div>
      <div class="width-half">
        <h2>작품 완성도</h2>
        <p>{{ $completenessAvg }}</p>
      </div>
      <div class="width-full">
        <img src="/image/s-graph.jpg" alt="" />
      </div>
    </div>

    <div class="section s-tagcloud clearfix">
      <h2>태그 클라우드</h2>
     <div class="edge-triangle"></div>
     <ul>
       @foreach ( $eachTagCounts as $key=>$value )
         <li><span>{{ $key }}</span></li>
       @endforeach
     </ul>
    </div>

    <div class="section s-comment-box clearfix">
     <div class="edge-triangle"></div>
      <div class="s-comment">
        코멘트 모아보기
        <ul>
            @foreach( $artworks as $artwork )
              <li>
                <a href="/artworks/{{ $artwork->id }}">{{ $artwork->feedback }}</a> <span>{{ $artwork->date }}</span>
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
            <img src="{{ $artwork->photo }}" alt=""> </a>
            <figcaption>
                <a href="/artworks/{{ $artwork->id }}">
                  {{ $artwork->name }}</a>
            </figcaption>

        </figure>

      @endforeach
    </div>
  </div>
</div>
<div class="artwork-add-box">
  <div class="artwork-add-btn">
    <a href="/artworks/create?std_id={{  $student->id }}">작품 추가</a>
  </div>
</div>

@endsection

@section('footer')

@endsection
