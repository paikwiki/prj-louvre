@extends('layouts.master')


@section('content')
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
          Login
      </button>

      <a class="btn btn-link" href="{{ url('/password/reset') }}">
          Forgot Your Password?
      </a>
    </div>
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
