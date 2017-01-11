@extends('layouts.master')


@section('content')
<div class="settings">
  <h2>Settings</h2>
  <ul>
    <li><a href="#">작품 관련</a></li>
    <li><a href="#">- 작품 유형</a></li>
    <li><a href="#">- 태그</a></li>
    <li><a href="#">- 재료</a></li>
  </ul>
  <ul>
    <li><a href="/users/logout">logout</a></li>
  </ul>
</div>
@endsection

@section('footer')

@endsection
