<div class="header-box">
  <div class="header">
    <div class="logo-box">
      <h1 class="logo"><a href="/">mini:MUE</a></h1>
    </div>
    @if(auth()->check())
      <ul class="clearfix">
        <li class="item01" data-item="item-1"><a href="/students">학생리스트</a></li>
        <li class="item02" data-item="item-2"><a href="/artworks">검색</a></li>
        <li class="item03" data-item="item-3"><a href="/artworks/create">촬영</a></li>
        <li class="item04" data-item="item-4"><a href="/albums">앨범</a></li>
        <li class="item05" data-item="item-5"><a href="/settings">설정</a></li>
      </ul>
    @endif
  </div>
</div>

