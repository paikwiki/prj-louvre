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

  <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
      {{ csrf_field() }}

      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
          <label for="name" class="col-md-4 control-label">Name</label>

          <div class="col-md-6">
              <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

              @if ($errors->has('name'))
                  <span class="help-block">
                      <strong>{{ $errors->first('name') }}</strong>
                  </span>
              @endif
          </div>
      </div>

      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <label for="email" class="col-md-4 control-label">E-Mail Address</label>

          <div class="col-md-6">
              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

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

      <div class="form-group">
          <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

          <div class="col-md-6">
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
          </div>
      </div>

      <div class="form-group">
          <div class="col-md-6 col-md-offset-4">
              <button type="submit" class="btn btn-primary">
                  Register
              </button>
          </div>
      </div>
  </form>
  
</div>
@endsection

@section('footer')

@endsection
