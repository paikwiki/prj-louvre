<div class="header">
  <div class="logo-box">
    <h1 class="logo"><a href="/">mini:MUE</a></h1>
  </div>
  @if(auth()->check())
    <ul class="clearfix">
      <li><a href="/students">학생리스트</a></li>
      <li><a href="/artworks">검색</a></li>
      <li><a href="/artworks/add">촬영</a></li>
      <li><a href="/albums">앨범</a></li>
      <li><a href="/settings">설정</a></li>
    </ul>
  @endif
</div>
