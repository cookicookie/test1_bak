<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>ポジティブ思考フォーミュレーション</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"><!-- Bootstrap本体 -->
</head>


<body>
  <h1>ポジティブ思考フォーミュレーション</h1>
  <p>楽観レベルが高い人はネガティブな人に比べて29%も早死にしづらいという結果がある
  　　つい物事をネガティブに考えてしまう人の思考の癖を正し少しずつ前向きな方向に持っていく効果を狙ったテクニック</p>
　<p>step1</p>
  <label>ネガティブ思考　普段抱きがちなネガティブ思考を思いつたものをどんどん書き込んでいく（ストレス日記から引用するのも良い）</label>
　<p>step2</p>
　<p>理性的な思考</p>
　<p>ネガティブ思考のリストを見てこの内容は本当に正しいのか、論理的に考えて正しいのかを考える（エビデンス）</p>
　<p>step3</p>
　<p>ポジティブ思考</p>
　<p>現実的なもの。現実性のないものポジティブはただの妄想でしかない、必ず理性に基づいて使うように意識すべき</p>
　<p>step4</p>
　<p></p>
　<p>理性的な思考</p>
<form  action="insert_positive_thinking" method="post">

@foreach ($positive_thinkings as $positive_thinking)

  <table>
  <tr>
    <th>ネガティブ思考</th>
    <th>理性的な思考</th>
    <th>ポジティブ思考</th>
  </tr>
  <tr>
  <td><input type="text" name="positive_thinking" value="{{$positive_thinking->positive_thinking}}"></td>
  <td><input type="text" name="ideal_thinking" value="{{$positive_thinking->ideal_thinking}}"></td>
  <td><input type="text" name="negative_thinking" value="{{$positive_thinking->negative_thinking}}"></td>
  </tr>
  @endforeach

</table>
<div class="b">
{{ csrf_field() }}
    <input type="submit" value="保存" onclick='return confirm("送信してもよろしいですか？");' />
    </div>
    </from>

    <div class="d-flex justify-content-center">
{{ $positive_thinkings->links() }}
</div>

</body>
</html>				