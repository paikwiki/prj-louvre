<div class="header-box">
  <div class="header">
    <div class="logo-box">
      <h1 class="logo"><a href="/">mini:MUE</a></h1>
    </div>
    @if(auth()->check())
      <ul class="clearfix">
        <li class="item01"><a href="/students">학생리스트</a></li>
        <li class="item02"><a href="/artworks">검색</a></li>
        <li class="item03"><a href="/artworks/create">촬영</a></li>
        <li class="item04"><a href="/albums">앨범</a></li>
        <li class="item05"><a href="/settings">설정</a></li>
      </ul>
    @endif
  </div>
</div>

