@extends('layouts.master', [
'intro' => 'true'
])


@section('content')

<div class="intro-logo">
    mini:mue
</div>

<div class="instruction">
   미니뮤에서 작품을 쉽고 체계적으로
   <br>
   관리하실 수 있습니다. 
</div>

<div class="login-box">
  <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
    {{ csrf_field() }}

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label for="email" class="col-md-4 control-label">E-Mail Address</label>
          <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

          @if ($errors->has('email'))
              <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
          @endif
    </div>

    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <label for="password" class="col-md-4 control-label">Password</label>
          <input id="password" type="password" class="form-control" name="password" required>

          @if ($errors->has('password'))
              <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
              </span>
          @endif
    </div>

    <div class="form-group">
      <div class="checkbox">
          <label>
              <input type="checkbox" name="remember"> Remember Me
          </label>
      </div>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">
          로그인
      </button>
      
     <p></p>
     
      <a href="/users/join">회원가입</a> / <a href="{{ url('/password/reset') }}">ID,PW 찾기</a>
    </div>
  </form>


  <div class="sns-login">
    <ul>
      <li class='item01'><a href="">Twitter</a></li>
      <li class='item02'><a href="">Facebook</a></li>
      <li class='item03'><a href="">Kakao</a></li>
      <li class='item04'><a href="">Naver</a></li>
    </ul>
  </div>
  <div class="user-agreement">
      계정을 만들면 미니뮤의 <span>서비스 약관</span> 및 <span>개인정보 보호정책에</span> <br>동의하는 것으로 간주합니다
  </div>
</div>
@endsection

@section('footer')

@endsection
