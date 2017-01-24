@extends('layouts.master')
@section('title', 'Student-'.$student->id)

@section('content')

  <div class="s-profile clearfix">
    @if($artworkBool)
      @if($artwork_recent['photo']=="default") <!--첫번째 등록작품에 사진이 등록되어있지 않을때-->
        <div class="profile-artwork" style="background-image: url('https://louvrebucket.s3.amazonaws.com/defaultuploads/defaultartwork.png');">
        </div>
      @else
        <div class="profile-artwork" style="background-image: url('https://louvrebucket.s3.amazonaws.com/artworkuploads/{{ $artwork_recent['photo'] }}');">
        </div>
      @endif
    @else
    <div class="profile-artwork" style="background-image: url('http://placehold.it/460x250');">
    </div>
    @endif
    <div class="profile-div">
        <div class="profile-pic-box">
          @if($student->profile_pic=="default")
            <img src="https://louvrebucket.s3.amazonaws.com/defaultuploads/defaultpfpic.png" alt="artwork" class="a-photo centered-image">
          @else
            <img src="https://louvrebucket.s3.amazonaws.com/studentuploads/{{$student->profile_pic}}" alt="artwork" class="a-photo centered-image">
          @endif
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

    <div class="student-delete-box">
      <a href="javascript:void(0);" onclick="$(this).find('form').submit();" >
          <form id="myform" action="{{ route('students.destroy', $student->id) }}" method="post">
              <input type="hidden" name="_method" value="DELETE">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
          </form>
      </a>
    </div>
    <script>
    jQuery(document).ready(function($){
         $('#myform').on('submit',function(e){
            if(!confirm('삭제하시겠습니까?')){
                  e.preventDefault();
            }
          });
    });
    </script>

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
          @if( $dDay < 0 )
            <li>첫 수업까지 <span>"{{ -($dDay) }}일"</span> 남았어요.</li>
          @elseif ( $dDay == 0 )
            <li>오늘이 학원 첫 수업하는 날입니다.</li>
          @else
            <li>등록한지 <span>"{{ $dDay }}일"</span> 됐어요.</li>
          @endif
          @if($artworkBool)
            <li><span>"{{ $maxType }}"</span>를 가장 많이 그렸어요.</li>
            <li>최근에 <a href="/artworks/{{ $artworks[0]->id }}"><span>"{{$artwork_recent->name}}"</span></a> 작품을 그렸어요.</li>
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
          <h3>수업흥미도 평균</h3>
          <p>{{ $engagementAvg }}</p>
        </div>
        <div class="width-half s-completeness">
          <h3>작품만족도 평균</h3>
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
          @if(count($eachTagCounts)>1)
          <!--원래는  eachTagCoungs>0 이였는데 에러나서 고쳤어요 한번봐주세요 -수지-->
            @foreach ( $eachTagCounts as $key=>$value )
              <li><span>{{ $key }}</span></li>
            @endforeach
          @else
            <li>태그가 없습니다.</li>
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
                @if($artwork->photo=="default")
                  <img src="https://louvrebucket.s3.amazonaws.com/defaultuploads/defaultartwork.png" alt="artwork" class="a-photo">
                @else
                  <img src="https://louvrebucket.s3.amazonaws.com/artworkuploads/{{$artwork->photo}}" alt="artwork" class="a-photo">
                @endif
                <figcaption>
                    <a href="/artworks/{{ $artwork->id }}">
                      {{ $artwork->name }}</a>
                </figcaption>
            </figure>
          @endforeach
        @else
          <figure class="myartwork no-artwork">
            <a href="/artworks/create?std_id={{  $student->id }}">
              <img src="/image/final-image/icon_plus.png" alt="temp-image"></a>
              <figcaption>
                  <a href="/artworks/create?std_id={{  $student->id }}">아직 그린 그림이 없습니다.</a>
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
