@extends('layouts.master')


@section('content')
<div class="login-box">
  <form class="login" method="get" action="/students" role="">
    <label for="userid">ID</label>
    <input type="text" id="userid">
    <label for="password">PW</label>
    <input type="text" id="password">
    <button>Login</button>
  </form>
  <a href="/users/join">회원가입</a> / <a href="/users/find">ID,PW 찾기</a>
  <div class="sns-login">
    <ul>
      <li><a href="">Twitter</a></li>
      <li><a href="">Facebook</a></li>
      <li><a href="">Kakao</a></li>
      <li><a href="">Naver</a></li>
    </ul>
  </div>
</div>
@endsection

@section('footer')

@endsection
