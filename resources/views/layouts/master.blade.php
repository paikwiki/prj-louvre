<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="/css/reset.css">
  <link rel="stylesheet/less" type="text/css" href="/css/styless.less">
	<script src="/css/less.min.js" type="text/javascript"></script>
  <link rel="stylesheet" type="text/css" href="/css/style.css">
  <title>Project Louvre</title>
</head>
<body>
<div class="g-wrapper">
  @include('layouts.partial.header')

  <div class="c-wrapper">
    <div class="content">
      @yield('content')
    </div> <!-- /.content -->
  </div> <!-- /.c-wrapper -->
  <div class="footer">
    @yield('footer')
  </div> <!-- /.footer -->
</div> <!-- /.g-wrapper -->
</body>
</html>