@extends('layouts.master')


@section('content')

<div class="s-profile">
  <div class="profile-pic-box">
    <img src="http://placehold.it/50x50" alt="" class="profile-pic">
  </div>
  <div class="student-info-box">
    <ul class="student-info">
      <li>뭐시기</li>
      <li>1900.10.01</li>
      <li>선생님 / 1900.10.01 / 월, 수</li>
    </ul>
  </div>
  <div class="contact-box">
    <ul>
      <li><a href="tel://000-000-0000">전화하기</a></li>
      <li><a href="mailto://paikwiki@gmail.com">메일보내기</a></li>
    </ul>
  </div>
  <div class="student-modify-box">
    <a href="2-3.html">수정하기</a>
  </div>
</div> <!-- /.s-profile -->
<div class="tab-selector">
  <ul>
    <li><a href="#" class="tab-info">정보</a></li>
    <li><a href="#" class="tab-artworks">작품</a></li>
  </ul>
</div>
<div class="box-container">
  <div class="tab-box info-box">
    <div class="summary-box">
      <ul>
        <li>등록한지 101일 됐어요.</li>
        <li>유화를 많이 그렸어요.</li>
        <li>현재 소묘를 그리고 있어요.</li>
        <li>앞으로 전시회 개최 하고 싶어요.</li>
      </ul>
    </div>
    <div class="section s-total">
      <div class="width-half s-total-all">
        총 작품 68개
      </div>
      <div class="width-half s-total-detail">
        <ul>
          <li><p><span>유화</span> 00개</p></li>
          <li><p><span>일러스트</span> 00개</p></li>
          <li><p><span>수채화</span> 00개</p></li>
        </ul>
      </div>
    </div>
    <div class="section s-average">
      <div class="width-half">
        몰입도 9.7
      </div>
      <div class="width-half">
        작품 완성도 3.4
      </div>
    </div>
    <div class="section s-graph-box">
      <div class="width-full">
        강의 몰입도
      </div>
      <div class="width-full">
        작품 완성도 그래프
      </div>
    </div>
    <div class="section s-tagcloud">
      태그 클라우드
    </div>
    <div class="section s-comment-box">
      <div class="s-comment">
        코멘트가 들어가는 자리입니다.
      </div>
    </div>
  </div>
  <div class="tab-box artworks-box">
    <ul>
      <li><a href="/artworks/1"><img src="http://placehold.it/50x50" alt=""></a></li>
      <li><a href="/artworks/1"><img src="http://placehold.it/50x50" alt=""></a></li>
      <li><a href="/artworks/1"><img src="http://placehold.it/50x50" alt=""></a></li>
      <li><a href="/artworks/1"><img src="http://placehold.it/50x50" alt=""></a></li>
      <li><a href="/artworks/1"><img src="http://placehold.it/50x50" alt=""></a></li>
      <li><a href="/artworks/1"><img src="http://placehold.it/50x50" alt=""></a></li>
      <li><a href="/artworks/1"><img src="http://placehold.it/50x50" alt=""></a></li>
      <li><a href="/artworks/1"><img src="http://placehold.it/50x50" alt=""></a></li>
    </ul>
  </div>
</div>
<div class="student-add-box">
  <div class="student-add-btn">
    <a href="/artworks/add">작품 추가</a>
  </div>
</div>

@endsection

@section('footer')

@endsection
