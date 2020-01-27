<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>TRAP・TRAC法</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"><!-- Bootstrap本体 -->
</head>

<body>
  <h1>TRAP・TRAC法</h1>
  <p>つい逃げたくなるタスクに立ち向かえるメンタルを育む効果がある
    　TRAP→トリガー、レスポンス、回避パターン（大事なことから逃げている自分を客観的に分析）
    　TRAC→トリガー、レスポンス、代理コーピング（問題解決を図る）
    　通常大事なことから逃げている人は考え方が短期的になる傾向がある
    　TRAP・TRAC法を用いることで、長期的なメリットに着目できる
　<p>step1</p>
　<p>トリガー</p>
　<p>自分が後回しにしているタスク</p>
　<p>step2</p>
　<p>レスポンス</p>
　<p>自分の中の思考や感情、思いつく限りリストアップしていく</p>
　<p>step3</p>
　<p>回避パターン</p>
　<p>タスクをやらなければならないときに、自分がどのような問題行動をとってしまうのか</p>
　<p>step4</p>
　<p>回避パターンの短期的な影響</p>
　<p>回避行動の短期的なメリットとデメリットを記入する</p>
　<p>step5</p>
　<p>回避パターンの長期的な影響</p>
　<p>回避行動を今後も取り続けたら、数年後にどのような結果が待っているのか</p>
　<p>step6</p>
　<p>代理コーピング</p>
　<p>回避パターンから抜け出すために代わりにできそうな行動</p>
　<p>step7</p>
　<p>代理コーピングの短期的な影響</p>
　<p>数分から一日単位でどのような変化が起きそうか</p>
　<p>step8</p>
　<p>代理コーピングの長期的な影響</p>
　<p>長期的に起きそうな結果</p>

　<p>TRAP</p>
<form  action="insert_trap_trac" method="post">
@foreach ($trap_tracs as $trap_trac)
  <table>
  <tr>
    <td>トリガー</td>
    <td><input type="text" name="trap_trigger" value="{{$trap_trac->trap_trigger}}"></td>
  </tr>
    <tr>
    <td>レスポンス</td>
    <td><input type="text" name="trap_res" value="{{$trap_trac->trap_res}}"></td>
  </tr>
  <tr>
    <td>回避パターン</td>
    <td><input type="text" name="trap_avoidance" value="{{$trap_trac->trap_avoidance}}"></td>
  </tr>
  <tr>
    <td>回避パターンの短期的な影響</td>
    <td><input type="text" name="trap_avoidance_sohrt" value="{{$trap_trac->trap_avoidance_sohrt}}"></td>
  </tr>
  <tr>
    <td>回避パターンの長期的な影響</td>
    <td><input type="text" name="trap_avoidance_long" value="{{$trap_trac->trap_avoidance_long}}"></td>
  </tr>
</table>

　<p>TRAC</p>
  <table>
  <tr>
    <td>トリガー</td>
    <td><input type="text" name="trac_trigger" value="{{$trap_trac->trac_trigger}}"></td>
  </tr>
    <tr>
    <td>レスポンス</td>
    <td><input type="text" name="trap_coping" value="{{$trap_trac->trap_coping}}"></td>
  </tr>
  <tr>
    <td>代理コーピング</td>
    <td><input type="text" name="trap_coping_short" value="{{$trap_trac->trap_coping_short}}"></td>
  </tr>
  <tr>
    <td>代理コーピングの短期的な影響</td>
    <td><input type="text" name="trap_coping_long" value="{{$trap_trac->trap_coping_long}}"></td>
  </tr>
  <tr>
    <td>代理コーピングの長期的な影響</td>
    <td><input type="text" name="trac_res" value="{{$trap_trac->trac_res}}"></td>
  </tr>
</table>
@endforeach
<div class="b">
{{ csrf_field() }}
    <input type="submit" value="保存" onclick='return confirm("送信してもよろしいですか？");' />
    </div>
    </from>

    <div class="d-flex justify-content-center">
{{ $trap_tracs->links() }}
</div>
</body>
</html>				