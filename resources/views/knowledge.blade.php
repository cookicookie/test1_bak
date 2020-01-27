<?php


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>vue.js</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
</head>
<body>
  <h1>vue.js</h1>

  <div id="app">
    <!-- <vue></vue> -->
    <study></study>
        <!-- <sample></sample> -->
</div>

  <script src="{{ asset('/js/app.js') }}"></script>
</body>
</html>