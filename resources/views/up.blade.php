<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>心理対比セッティング</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"><!-- Bootstrap本体 -->
</head>

<body>
  <h1>心理対比セッティング</h1>
  <p>目標設定術<br>達成率が２〜３倍にまで高くなる<br>ステップ１　今の目標を設定　やらねばならないゴールを詳細にイメージして書き込む　現時点で最も重要なものをひとつだけ書き込む<br>ステップ２　そもそもなぜこの目標を達成しなければならないのかをできるだけ正確に理由を書きこむ<br>ステップ３　目標達成の障害　障害になりそうなものをかんがえて特に発生率の高そうなものを書き込む<br>ステップ４　障害にどう対処するのか　できるだけ詳細に対策をイメージする</p>
  <form action="insert" method="post">
  <table>
  @foreach ($ups as $up)
  
  <tr>
    <td>今の目標設定</td>
    <td><input type="text" name="goal_setting" value="{{$up->goal_setting}}"></td>
  </tr>
    <tr>
    <td>その目標が重要な理由</td>
    <td><input type="text" name="important" value="{{$up->important}}"></td>
  </tr>
  <tr>
    <td>目標達成の障害</td>
    <td><input type="text" name="disability" value="{{$up->disability}}"></td>
  </tr>
  <tr>
    <td>その障害にどのように対処するのか</td>
    <td><input type="text" name="deal" value="{{$up->deal}}"></td>
  </tr>
  @endforeach
</table>
        {{ csrf_field() }}
        <div class="b">
            <input type="submit" value="保存" onclick='return confirm("送信してもよろしいですか？");' />
        </div>

</form>
<div class="d-flex justify-content-center">
{{ $ups->links() }}
</div>
<script type="text/javascript">
}</script>

</body>
</html>				