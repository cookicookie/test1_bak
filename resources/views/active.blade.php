<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>行動実験</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"><!-- Bootstrap本体 -->
</head>

<body>
  <h1>行動実験</h1>
  <p>不安や恐怖のせいで行動を起こせない人のために開発されたテクニック
    ポジティブなアクションを増やして豊かな人生をくりたい人に向いている
    ポイントは意識して小さな行動を起こすこと
    安心感の強いアクションを試して心を鳴らしていく
　<p>step1</p>
　<p>予測</p>
　<p>実行できない行動を一つだけ選び、自分がどのように考えているのかを書き込む
　　　どんな理由でも構わない、自分にとって一番の原因をピックアップする
　　　書式は「もし◯したら〇〇という問題が起きるだろう」がテンプレート（シンプルに記入）</p>
　<p>step2</p>
　<p>レーティング</p>
　<p>予測がどのくらいの確率で発生しそうか0~100%で記入</p>
　<p>step3</p>
　<p>実験</p>
　<p>予測の正しさを実験で試していく
　　　自分が嫌ふがる行動を安全なレベルまでグレードダウンするのがポイント</p>
　<p>step4</p>
　<p>結果</p>
　<p>実験の結果自分の予想はどこまで正しかったのか、</p>
  <p>step5</p>
  <p>学習</p>
  <p>実験から学んだことを書く</p>
  <p>step5</p>
  <p>レーティング</p>
  <p>再びレーティングを行う。
  　　たいていの人は自分が予想の不正確さに驚き、不安や恐怖が和らぐ。
　　　行動実験を最後まで進めただけでも大きな自信につながる</p>
  <label>採点　難易度とインパクトをかけて、合計スコアを算出し点数の高いものから手をつけていく</label>
  <form  action="insert_active" method="post">

  @foreach ($actives as $active)
  <table>
  <tr>
    <th>予測</th>
    <td><input type="text" name="prediction" value="{{$active->prediction}}"></td>
  </tr>
  <tr>
    <td>レーティング</td>
    <td><input type="text" name="rating" value="{{$active->rating}}"></td>
  </tr>
    <tr>
    <td>実験</td>
    <td><input type="text" name="experiment" value="{{$active->experiment}}"></td>
  </tr>
  <tr>
    <td>結果</td>
    <td><input type="text" name="result" value="{{$active->result}}"></td>
  </tr>
  <tr>
    <td>学習</td>
    <td><input type="text" name="learn" value="{{$active->learn}}"></td>
  </tr>
  <tr>
    <td>再レーティング</td>
    <td><input type="text" name="re_rating" value="{{$active->re_rating}}"></td>
  </tr>
</table>
@endforeach
<div class="b">
{{ csrf_field() }}
    <input type="submit" value="保存" onclick='return confirm("送信してもよろしいですか？");' />
    </div>
    </from>
    <div class="d-flex justify-content-center">
{{ $actives->links() }}
</div>

</body>
</html>				