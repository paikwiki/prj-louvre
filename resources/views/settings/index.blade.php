@extends('layouts.master')
@section('title', 'Settings')

@section('content')
<div class="settings">
  <h2>Settings</h2>
  <h3>작품 관련</h3>
  <ul>
    <li><a href="/types">유형</a></li>
    <li><a href="/materials">재료</a></li>
    <li><a href="/tags">태그</a></li>
  </ul>
  <h3>사용자 관련</h3>
  <ul>
    <li><a href="/users/logout">logout</a></li>
    <li><a href="">사용 가이드</a></li>
  </ul>
</div>
@endsection

@section('footer')

@endsection
