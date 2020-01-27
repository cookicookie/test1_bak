<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>自動思考キャッチシート</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"><!-- Bootstrap本体 -->
</head>

<body>
  <h1>自動思考キャッチシート</h1>
  <p>自動思考とは何らかのイベントが起きたときに、頭の中に湧き上がるイメージや思考のこと
    　例　雨が降ってきた→傘忘れちゃった
    　特定のイベントに対して頭の中に浮かんできたイメージは全て自動思考と呼ぶ
    　問題なのが、多くの人は自分が反射的にどのようなことを考えたのかを覚えていない
    　強く意識しないと頭に残せない
　　　この作業を続けていくと、内面に変化が起きる
　　　自分の反応パターンが深まったおかげで、脳が自動思考をリアルタイムで追う能力が身に付く
　　　上司に怒られた→むかつくなあ
　　　怒られたせいでいつも自分は失敗ばかりという思考が出てきたぞ、落ち込みと悲しみが湧いて、やっぱり胸のあたりがムズムズするなあ
　　　まあ、この感覚はいつものことだから、とりあえず対策を考えるか
　　　というようになる
　　　これによってネガティブな感情が消える事はないが、少なくとも感情の荒波に揉まれなくなる
    　最近の悩みを一つ選ぶ</p>
    <form  action="insert_automatic" method="post">
  @foreach ($automatics as $automatic)

  <table>
  <tr>
    <th>環境</th>
    <th>ストレス反応</th>
  </tr>
  <tr>
    <td>環境</td>
    <td>思考やイメージ</td>
    <td>感情や気分</td>
    <td>体の反応</td>
    <td>行動</td>
  </tr>
    <tr>
    <td><input type="text" name="environment" value="{{$automatic->environment}}"></td>
    <td><input type="text" name="thoughts_images" value="{{$automatic->thoughts_images}}"></td>
    <td><input type="text" name="emotions_mood" value="{{$automatic->emotions_mood}}"></td>
    <td><input type="text" name="body_reaction" value="{{$automatic->body_reaction}}"></td>
    <td><input type="text" name="action" value="{{$automatic->action}}"></td>
  </tr>
</table>
@endforeach
<div class="b">
{{ csrf_field() }}
    <input type="submit" value="保存" onclick='return confirm("送信してもよろしいですか？");' />
    </div>
    </from>

    <div class="d-flex justify-content-center">
{{ $automatics->links() }}
</div>
</form>

</body>
</html>				