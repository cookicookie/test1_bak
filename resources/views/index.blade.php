<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>ララべるテスト</title>
  <link href="css/learn.css" rel="stylesheet" type="text/css">

</head>

<body>
  @foreach($items as $item)
  {{$item->nickname}}
  @endforeach
</body>

</html>