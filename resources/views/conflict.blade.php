<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>葛藤マネジメント</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"><!-- Bootstrap本体 -->
</head>

<body>
  <h1>葛藤マネジメント</h1>
  <p>失敗への恐怖によって前向きな行動ができない時に用いる記述方法。
  葛藤マネジメントで効果が高いのはネガティブな結果に意識を向けやすい傾向があるから。ネガティブバイアスと呼ばれる心理
  行動の結果を客観的に見つめる視点を養う
  目安　10分〜20分
  </p>
  <form  action="insert_conflict" method="post">
  <table>
  @foreach ($conflicts as $conflict)
  <tr>
    <th></th>
    <th>メリット</th>
    <th>デメリット</th>
  </tr>
    <tr>
    <td>行動する</td>
    <td><input type="text" name="act_merit" value="{{$conflict->act_merit}}"></td>
    <td><input type="text" name="act_demerit" value="{{$conflict->act_demerit}}"></td>
  </tr>
  <tr>
    <td>行動しない</td>
    <td><input type="text" name="not_act_merit" value="{{$conflict->not_act_merit}}"></td>
    <td><input type="text" name="not_act_demerit" value="{{$conflict->not_act_demerit}}"></td>
  </tr>

  @endforeach
</table>
<div class="b">
{{ csrf_field() }}
    <input type="submit" value="保存" onclick='return confirm("送信してもよろしいですか？");' />
    </div>
    </from>

    <div class="d-flex justify-content-center">
{{ $conflicts->links() }}
</div>
</body>
</html>
