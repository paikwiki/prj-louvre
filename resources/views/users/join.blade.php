@extends('layouts.master', [
'intro' => 'true'
])


@section('content')
<div class="intro-logo">
    <img src="/image/intro-image/logo-minimue.png" alt="mini:mue">    
</div>
<div class="subtitle">
   The Artwork Portfolio System
</div>


<div class="login-box">
  <form class="form-horizontal login-form" role="form" method="POST" action="{{ url('/register') }}">
    {{ csrf_field() }}
    <div class="form-group02 form-group{{ $errors->has('name') ? ' has-error' : '' }}">
      <label for="name" class="col-md-4 control-label focused">Name</label>
      
        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" autofocus>
        @if ($errors->has('name'))
        <span class="help-block">
          <br><strong>{{ $errors->first('name') }}</strong>
        </span>
        @endif
      
    </div>
    <div class="form-group02 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
      <label for="email" class="col-md-4 control-label">E-Mail Address</label>
      
        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
        @if ($errors->has('email'))
        <span class="help-block">
          <br><strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
     
    </div>
    <div class="form-group02 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
      <label for="password" class="control-label">Password</label>
        <input id="password" type="password" class="form-control" name="password" required>
        @if ($errors->has('password'))
        <span class="help-block">
          <br><strong>{{ $errors->first('password') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group02 form-group">
      <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
    </div>
    <div class="form-group02">
      <label for="uid">아이디</label>
      <input type="text" id="uid" name="uid">
    </div>
    <div class="form-group02">
      <label for="studio">소속학원</label>
      <input type="text" id="studio">
    </div>
    <div class="form-group02 form-group">
      <div class="col-md-6 col-md-offset-4">
        <button type="submit" class="btn btn-primary">
          가입하기
        </button>
      </div>
    </div>
  </form>
</div>
@endsection

@section('footer')

@endsection
