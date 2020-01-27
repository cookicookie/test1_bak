<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"><!-- Bootstrap本体 -->
</head>

<body>
  <h1>ストレス日記</h1>
  <p>日々のストレスを細かく記述し、それらが人生にどのような影響を及ぼすのかをチェックする記述法
    自分のストレスレベルを理解できている人はほとんどいない
    最も発生回数の多いストレスは？
    そのストレスに対してどのような感情を持つ傾向があるのだろう？
    自分はどんな対策をとり、どのくらいの効果を上げているのだろう？
    心がダメージを受けやすい状況がよくわかる（まずは自分の心の負担を分析することが大切なのである）
  </p>
　<p>step1</p>
　<p>日時</p>
　<p></p>
　<p>step2</p>
　<p>ストレス</p>
　<p></p>
　<p>step3</p>
　<p>幸福度</p>
　<p>そのストレスを受けたせいで、気分がどこまで落ち込んだか10点満点で採点する。最低は0点</p>
　<p>step4</p>
　<p>感情</p>
　<p>そのストレスに対して具体的にどのような感情を抱いたのか、悲しい、怒りなど</p>
　<p>step5</p>
　<p>生産性</p>
　<p>自分の生産性がどのくらい変化したのか。そんなに変化なし10点、何も手につかなくなる0点</p>
　<p>step6</p>
　<p>ストレス源</p>
　<p>ストレスを与えた原因。上司、電車など</p>
　<p>step7</p>
　<p>身体反応</p>
　<p>体にどんな変化が現れたかを簡潔に記録。</p>
　<p>step8</p>
　<p>対処レベル</p>
　<p>そのストレスに対してどれだけうまく対処できたのか。全然だめ、怒り爆発、まあまあなどシンプルに書き込む</p>
　<p>step9</p>
　<p>分析を行う</p>
　<p>１、今の暮らしで最も頻発しているストレスは何か？自分にとって最も不快なストレスは何か？をチェックする
　　　２、ストレス源とレベルを確認し、もっと良い対策はないか考える
　　　３、自分はどんな状況でストレスを感じやすいのかを今までの日記を振り返って分析する
</p>
<form  action="insert_stress_diary" method="post">
@foreach ($stress_diarys as $stress_diary)
  <table>
  <tr>
    <th>日時</th>
    <th>ストレス</th>
    <th>幸福度</th>
    <th>感情</th>
    <th>生産性</th>
  　 <th>ストレス源</th>
    <th>身体反応</th>
    <th>対処レベル</th>

  </tr>
  <tr>
  <td><input type="text" name="created_at" value="{{$stress_diary->created_at->format('Y年m月d日')}}"></td>
  <td><input type="text" name="stress" value="{{$stress_diary->stress}}"></td>
  <td><input type="text" name="happiness" value="{{$stress_diary->happiness}}"></td>
  <td><input type="text" name="emotion" value="{{$stress_diary->emotion}}"></td>
  <td><input type="text" name="productivity" value="{{$stress_diary->productivity}}"></td>
  <td><input type="text" name="source_of_stress" value="{{$stress_diary->source_of_stress}}"></td>
  <td><input type="text" name="body_reaction" value="{{$stress_diary->body_reaction}}"></td>
  <td><input type="text" name="response_level" value="{{$stress_diary->response_level}}"></td>
  </tr>

</table>
@endforeach
<div class="b">
{{ csrf_field() }}
    <input type="submit" value="保存" onclick='return confirm("送信してもよろしいですか？");' />
    </div>
    <div class="d-flex justify-content-center">
{{ $stress_diarys->links() }}
</div>
</form>


</body>
</html>       