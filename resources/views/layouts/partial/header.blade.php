<div class="header-box">
  <div class="header">
    <!-- <div class="logo-box">
      <h1 class="logo"><a href="/">mini:MUE</a></h1>
    </div> -->
      <ul class="clearfix">
        <li class="item01 {{ Request::is('students')||Request::is('students/*') ? 'active' : null }}"><a href="/students">학생리스트</a></li>
        <li class="item02 {{ Request::is('artworks')||(Request::is('artworks/*')&&!Request::is('artworks/create')) ? 'active' : null }}"><a href="/artworks">검색</a></li>
        <li class="item03 {{ Request::is('artworks/create') ? 'active' : null }}"><a href="/artworks/create">촬영</a></li>
        <li class="item04 {{ Request::is('albums') ? 'active' : null }}"><a href="/albums">앨범</a></li>
        <li class="item05 {{ Request::is('settings') ? 'active' : null }}"><a href="/settings">설정</a></li>
      </ul>
  </div>
</div>
