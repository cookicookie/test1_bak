<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>クイックウィン分析</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"><!-- Bootstrap本体 -->
</head>
<body>
  <h1>クイックウィン分析</h1>
  <p>モチベーションを高く維持するために用いる記述方法。<br>小さな進歩がモチベーション維持にはかなり重要<br>そこに注目したのがクイックウィン分析<br>あえて短期間で小さな成果を出すことに意識を集中して士気を高めていく<br>達成までの期間が長いタスクに向いている<br>小さな進歩があなたのモチベーションを上げ、難しいプロジェクトを達成しやすくするはず
　<p>step1<br>プロジェクト　最終ゴールを書き込む<br>step2<br>クイックウィン　最も手軽に進捗を実感できそうな行動や結果を記入　一つのプロジェクトに関して思いつく限りクイックウィンを書き込む<br>step3<br>難易度　達成がどれだけ難しいかを考える　簡単なら5点　難しそうなら1点<br>step4<br>インパクト　クイックウィンを達成したらプロジェクトにどれだけ影響が出るのかを採点　影響力が高ければ5点<br>step5<br>採点　難易度とインパクトをかけて、合計スコアを算出し点数の高いものから手をつけていく
  <form  action="{{ route('learn.insert_quick_win') }}" method="get">

  <table>
  @foreach ($quick_wins as $quick_win)
    <th>プロジェクト</th>
    <th>クイックウィン</th>
    <th>難易度</th>
    <th>インパクト</th>
    <th>合計スコア</th>
  </tr>
  <tr>
    <td><input type="text" name="quick_win" value="{{$quick_win->quick_win}}"></td>
    <td><input type="text" name="difficulty" value="{{$quick_win->difficulty}}"></td>
    <td><input type="text" name="impact" value="{{$quick_win->impact}}"></td>
    <td><input type="text" name="total_score" value="{{$quick_win->total_score}}"></td>
    <td><input type="text" name="project" value="{{$quick_win->project}}"></td>
  </tr>
  @endforeach
</table>
<div class="b">
{{ csrf_field() }}
    <input type="submit" value="保存" onclick='return confirm("送信してもよろしいですか？");' />            
</div>
</from>
<div class="d-flex justify-content-center">
{{ $quick_wins->links() }}
</div>
</body>
</html>				