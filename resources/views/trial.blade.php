<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>思考裁判記録表</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"><!-- Bootstrap本体 -->
</head>

<body>
  <h1>思考裁判記録表</h1>
  <p>モチベーションを高く維持するために用いる記述方法。
　　　小さな進歩がモチベーション維持にはかなり重要
　　　そこに注目したのがクイックウィン分析
　　　あえて短期間で小さな成果を出すことに意識を集中して士気を高めていく
　　　達成までの期間が長いタスクに向いている
　　　小さな進歩があなたのモチベーションを上げ、難しいプロジェクトを達成しやすくするはず
　<p>step1</p>
  <label>被告　悩ませるネガティブ思考を一つだけ記入する（定期的に浮かぶネガティブ思考）</label>
　<p>step2</p>
  <label>弁護　ネガティブ思考を弁護する情報を書き込む（ネガティブ思考のエビデンス）</label>
　<p>step3</p>
  <label>検察　反証を書き込む（被告の主張を覆してくれそうなエビデンスを書き込む）</label>
　<p>step4</p>
  <label>陪審　弁護士と検察官双方のエビデンスのどちらが正しいのかを判断する（検察に肩入れしてはいけない）</label>
  </p>
  <p>step5</p>
  <label>判決　一つの主張を色々な角度から見直して、より現実的でバランスのとれた考え方を導き出す</label>
  <form  action="insert_trial" method="post">

  @foreach ($trials as $trial)

  <table>
  <tr>
    <th>被告</th>
    <td><input type="text" name="defendant" value="{{$trial->defendant}}"></td>
  </tr>
  <tr>
    <td>弁護</td>
    <td><input type="text" name="defense" value="{{$trial->defense}}"></td>
  </tr>
    <tr>
    <td>検察</td>
    <td><input type="text" name="prosecution" value="{{$trial->prosecution}}"></td>
  </tr>
  <tr>
    <td>陪審</td>
    <td><input type="text" name="jury" value="{{$trial->jury}}"></td>
  </tr>
  <tr>
    <td>判決</td>
    <td><input type="text" name="judgment" value="{{$trial->judgment}}"></td>
  </tr>

</table>
@endforeach
<div class="b">
{{ csrf_field() }}
    <input type="submit" value="保存" onclick='return confirm("送信してもよろしいですか？");' />
    </div>
    </from>

    <div class="d-flex justify-content-center">
{{ $trials->links() }}
</div>
</body>
</html>				