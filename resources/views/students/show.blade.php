@extends('layouts.master')

@section('content')

  <div class="s-profile clearfix">
    @if($artworkBool)
      <div class="profile-artwork" style="background-image: url('https://louvrebucket.s3.amazonaws.com/artworkuploads/{{ $artwork_recent['photo'] }}');">
      </div>
    @else
    <div class="profile-artwork" style="background-image: url('http://placehold.it/460x250');">
    </div>
    @endif
    <div class="profile-div">
        <div class="profile-pic-box">
          <img src="{{ $student->profile_pic }}" alt="" class="profile-pic">
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
      <li class="tab-item tab-info tab01"><div class=tab-text>정보</div></li>
      <li class="tab-item tab-artworks tab02"><div class="tab-text">작품</div></li>
    </ul>
  </div>
  <div class="box-container">
    <div class="tab-box info-box tab-content01 clearfix show">
      <div class="section summary-box">
        <div class="edge-triangle"></div>
        <div class="box-header">
          <h2><span class="box-header-icon icon-summary"></span>Summary</h2>
        </div>
        <ul>
          <li>등록한지 <span>"{{ $dDay }}"</span>일 됐어요.</li>
          @if($artworkBool)
            <li><span>"{{ $maxType }}"</span>를 가장 많이 그렸어요.</li>
            <li>최근에 <span>"{{$artwork_recent->name}}"</span> 작품을 그렸어요.</li>
          @else
            <li>아직 그린 작품이 없어요.</li>
          @endif
          <li>앞으로 하고 싶은 건 <span>"{{ $student->purpose }}"</span>입니다.</li>
        </ul>
        <div class="s-total">
          <div class="s-total-all">
            <span>총 작품</span>
            <p>{{ $artworksCount }}점</p>
          </div>
          <div class="s-total-detail">
            <ul>
              @if($artworkBool)
                @foreach ( $eachTypeCounts as $key=>$value )
                <li><p>{{ $key }}<span> {{ $value }}개</span></p></li>
                @endforeach
              @else
                <li><p></p></li>
              @endif
            </ul>
          </div>
        </div>
      </div>
      <div class="section s-evaluate clearfix">
        <div class="edge-triangle"></div>
        <div class="box-header">
          <h2><span class="box-header-icon icon-evaluate"></span>Evaluation</h2>
        </div>
        <div class="width-half s-engagement">
          <h3>몰입도 평균</h3>
          <p>{{ $engagementAvg }}</p>
        </div>
        <div class="width-half s-completeness">
          <h3>난이도 평균</h3>
          <p>{{ $completenessAvg }}</p>
        </div>
        <div id="graph-wrapper" class="width-full">
          <div id="graph"></div>
        </div>
      </div>
      <div class="section s-tagcloud clearfix">
        <div class="box-header">
          <h2><span class="box-header-icon icon-tagcloud"></span>Tag Cloud</h2>
        </div>
       <div class="edge-triangle"></div>
       <ul>
          @if($artworkBool)
            @foreach ( $eachTagCounts as $key=>$value )
              <li><span>{{ $key }}</span></li>
            @endforeach
          @else
            <li>아직 없습니다.</li>
          @endif
       </ul>
      </div>
      <div class="section s-comment clearfix">
        <div class="edge-triangle"></div>
        <div class="box-header">
          <h2><span class="box-header-icon icon-comment"></span>Comments</h2>
        </div>
        <ul>
          @if($artworkBool)
            @foreach( $artworks as $artwork )
              <li><a href="/artworks/{{ $artwork->id }}">{{ $artwork->feedback }}</a> <span>{{ $artwork->date }}</span></li>
            @endforeach
          @else
            <li>아직 코멘트가 없습니다.</li>
          @endif
        </ul>
      </div>
    </div>
    <div class="tab-box artworks-box tab-content02 clearfix hide">
      <div class="artworks">
        @if($artworkBool)
          @foreach( $artworks as $artwork )
            <figure class="myartwork">
              <a href="/artworks/{{ $artwork->id }}">
                <img src="https://louvrebucket.s3.amazonaws.com/artworkuploads/{{ $artwork->photo }}" alt=""> </a>
                <figcaption>
                    <a href="/artworks/{{ $artwork->id }}">
                      {{ $artwork->name }}</a>
                </figcaption>
            </figure>
          @endforeach
        @else
          <figure class="myartwork">
            <a>
              <img src="http://placehold.it/360x360" alt="temp-image"> </a>
              <figcaption>
                  <a>아직 그린 그림이 없습니다.</a>
              </figcaption>
          </figure>
        @endif
      </div>
    </div>
  </div>
<div class="artwork-add-box">
  <div class="artwork-add-btn">
    <a href="/artworks/create?std_id={{  $student->id }}">작품 추가</a>
  </div>
</div>
<script src="http://d3js.org/d3.v3.min.js" charset="utf-8"></script>
<script type="text/javascript">
  var graphData = {!! $graphData !!};
</script>
<script src="/js/student.js" charset="utf-8"></script>
@endsection

@section('footer')

@endsection
