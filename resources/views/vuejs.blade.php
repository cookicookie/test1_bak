<?php


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>js</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
  <h1>js 備忘録</h1>
  <p>自分が学んだことを忘れないための備忘録として記す</p>
  <label><a href="vue">テストページ</a></label><br>
  <label><a href="knowledge">Vue.js</a></label><br>
  <script src="{{ asset('/js/app.js') }}"></script>

</body>
</html>