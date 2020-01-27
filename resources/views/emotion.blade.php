<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>感情表現ノート</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"><!-- Bootstrap本体 -->
</head>
<body>
  <h1>感情表現ノート</h1>
  <p>感情の粒度が細かい人ほどストレスに強く人生の満足感も高い
    感情の粒度とはどれだけ細かく自分の感情を表現できるかというと（砂漠にひとり放り込まれたような頼りない思い）
    自分の不快な気持ちを細かく区別できる人は、そうでない人に比べて30%も感情コントロールがうまく、ストレスが大きな状況でもアルコールやギャンブルに逃げ込まない傾向がある
    感情の粒度は目の前の状況を正確に把握するのに役立つ
    シンプルな表現で状況を切り捨てるだけだと、脳にネガティブな印象だけが刷り込まれて、怒りが燻り続ける。（あいつは最低だ）
    感情が曖昧すぎて、事態を解決する方向性が見えないから
    粒度が細かい人は、差別に立ち向かう〜のような気持ちだなどと自分の気持ちをより正確に表現するため、頭の中がクリアになり対策の方向性も見えるようになる
    感情の粒度を細かくするのに最適なのが、ボキャブラリーの増強＝小説を読むのが一番良い
    外国語は日本にはない表現の仕方が多数存在するため、ボキャブラリーの宝庫である
  </p>
  <p>知らない表現をノートに書いていくだけで良い</p>
  @foreach ($emotions as $emotion)

  <form  action="insert_emotion" method="post">
  <table>
  <tr>
    <th>単語</th>
    <th>意味</th>
  </tr>
  <tr>
  <td><input type="text" name="vocabulary" value="{{$emotion->vocabulary}}"></td>
  <td><input type="text" name="mean" value="{{$emotion->mean}}"></td>
  </tr>
</table>
@endforeach

  <div class="b">
{{ csrf_field() }}
    <input type="submit" value="保存" onclick='return confirm("送信してもよろしいですか？");' />
    </div>
    </from>
    <div class="d-flex justify-content-center">
{{ $emotions->links() }}
</div>

</body>
</html>				