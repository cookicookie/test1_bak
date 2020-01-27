<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>アンガーログ</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"><!-- Bootstrap本体 -->
</head>

<body>
  <h1>アンガーログ</h1>
  <p>怒りを記録した日記
    どうにもならない怒りの感情を適切にコントロールする心理療法
    客観的な把握が一の一歩
    　
　<p>step1</p>
　<p>怒りが問題を起こしている事実を認める</p>
　<p>抱く怒りの感情が、仕事やプライベートでも問題を起こしている事実を認める
　　　怒りのせいで、自分がどのくらい嫌われているか、他人を不快にさせていないかを振り返る
　　　</p>
　<p>step2</p>
　<p>怒りを記録する</p>
　<p>怒りの原因　人物やイベントを書き込む</p>
　<p>step3</p>
　<p>反応　どんなリアクションを取ったのかを記録する（自分が取った行動、黙ったなど）</p>
　<p>step4</p>
　<p>反応の判断　その怒りを振り返って、行動が正しいものだったのか、自分の正当性を考えてみる</p>
　<p>step5</p>
　<p>怒りに介入する</p>
　<p>アンガーログをつけると、自分の怒りのツボが分かり始め激しい感情に対処しやすくなっていくでしょう
　　　怒りのトリガーを把握できたことで心に余裕が生まる
　　　そのあとは、同じトリガーが発生したら意識して怒りのコントロールをしていく。深呼吸、20秒数えるなどを行い感情に介入していくうちに、やがて怒りに巻き込まれなくなる</p>

<form  action="insert_anger_log" method="post">
@foreach ($anger_logs as $anger_log)

  <table>
  <tr>
    <th>日時</th>
    <th>怒りの原因</th>
    <th>反応</th>
    <th>反応の判断</th>
  </tr>
  <tr>
    <td><input type="text" name="created_at" value="{{$anger_log->created_at->format('Y年m月d日')}}"></td>
    <td><input type="text" name="cause_of_anger" value="{{$anger_log->cause_of_anger}}"></td>
    <td><input type="text" name="reaction" value="{{$anger_log->reaction}}"></td>
    <td><input type="text" name="judgment_of_reaction" value="{{$anger_log->judgment_of_reaction}}"></td>
  </tr>
  @endforeach
</table>
<div class="b">
{{ csrf_field() }}
    <input type="submit" value="保存" onclick='return confirm("送信してもよろしいですか？");' />
    </div>
    </from>

    <div class="d-flex justify-content-center">
{{ $anger_logs->links() }}
</div>
</body>
</html>				