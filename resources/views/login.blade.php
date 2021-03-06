<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="/css/reset.css">
  <link rel='stylesheet/less' type='text/css' href='/css/styless.less'>
	<script src="/css/less.min.js" type="text/javascript"></script>
  <link rel="stylesheet" type="text/css" href="/css/style.css">
  <title>Login</title>
</head>
<body>
<div class="g-wrapper">
  <div class="header">
    <!-- no data -->
  </div>
  <div class="c-wrapper">
    <div class="content">
      <div class="logo-box">
        <h1 class="logo"><a href="{{ $home }}">Louvre</a></h1>
      </div>
      <div class="login-box">
        <form class="login" method="get" action="2-1.html" role="">
          <label for="userid">ID</label>
          <input type="text" id="userid">
          <label for="password">PW</label>
          <input type="text" id="password">
          <button>Login</button>
        </form>
        <a href="1-2.html">회원가입</a> / <a href="1-3.html">ID,PW 찾기</a>
        <div class="sns-login">
          <ul>
            <li><a href="">Twitter</a></li>
            <li><a href="">Facebook</a></li>
            <li><a href="">Kakao</a></li>
            <li><a href="">Naver</a></li>
          </ul>
        </div>
      </div>
    </div> <!-- /.content -->
  </div> <!-- /.c-wrapper -->
  <div class="footer">
    <!-- no data -->
  </div> <!-- /.footer -->
</div> <!-- /.g-wrapper -->
</body>
</html>
