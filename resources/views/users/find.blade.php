@extends('layouts.master')


@section('content')
<div class="login-box">
  <p>비밀번호를 받을 가입 E-mail 주소를 입력해주세요.</p>
  <form class="login" method="get" action="/users" role="">
    <label for="userid">ID(이메일주소)</label>
    <input type="text" id="userid">
    <button>가입하기</button>
  </form>
</div>
@endsection

@section('footer')

@endsection
