@extends('layouts.master')


@section('content')
<div class="login-box">
  <p>비밀번호 리셋을 위해 가입 E-mail 주소를 입력해주세요.</p>
  <form class="login" method="get" action="/users" role="">
    <label for="userid">ID(이메일주소)</label>
    <input type="text" id="userid">
    <button>전송하기</button>
  </form>

  @if (session('status'))
      <div class="alert alert-success">
          {{ session('status') }}
      </div>
  @endif

  <form class="form-horizontal" role="form" method="POST" action="{{ url('/users/find') }}">
      {{ csrf_field() }}

      <input type="hidden" name="token" value="{{ $token }}">

      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <label for="email" class="col-md-4 control-label">E-Mail Address</label>

          <div class="col-md-6">
              <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>

              @if ($errors->has('email'))
                  <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
          </div>
      </div>

      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
          <label for="password" class="col-md-4 control-label">Password</label>

          <div class="col-md-6">
              <input id="password" type="password" class="form-control" name="password" required>

              @if ($errors->has('password'))
                  <span class="help-block">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
          </div>
      </div>

      <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
          <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
          <div class="col-md-6">
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

              @if ($errors->has('password_confirmation'))
                  <span class="help-block">
                      <strong>{{ $errors->first('password_confirmation') }}</strong>
                  </span>
              @endif
          </div>
      </div>

      <div class="form-group">
          <div class="col-md-6 col-md-offset-4">
              <button type="submit" class="btn btn-primary">
                  Reset Password
              </button>
          </div>
      </div>
  </form>
</div>
@endsection

@section('footer')

@endsection
