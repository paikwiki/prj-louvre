@extends('layouts.master')


@section('content')
<div class="settings">
  <h2>Settings</h2>
  <h3>작품 관련</h3>
  <ul>
    <li><a href="/tags">태그</a></li>
    <li><a href="/types">작품 유형</a></li>
    <li><a href="#" class="link-disable">재료</a></li>
  </ul>
  <h3>사용자 관련</h3>
  <ul>
    <li><a href="/users/logout">logout</a></li>
  </ul>
</div>
@endsection

@section('footer')

@endsection
