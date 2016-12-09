@extends('layouts.master')


@section('content')
<div class="login-box">
  <form class="login" method="get" action="/students" role="">
    <div>
      <label for="userid">ID(이메일주소)</label>
      <input type="text" id="userid">
      <label for="password">PW</label>
      <input type="text" id="password">
      <label for="password">PW확인</label>
      <input type="text" id="password_re">
    </div>
    <div>
      <label for="username">이름</label>
      <input type="text" id="username">
      <label for="studio">소속학원</label>
      <input type="text" id="studio">
    </div>
    <button>가입하기</button>
  </form>
</div>
@endsection

@section('footer')

@endsection
