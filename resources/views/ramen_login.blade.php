<html>
<head>
    <meta charset="utf-8">
    <link href="css/login.css" rel="stylesheet" type="text/css">
    <title>ログイン画面</title>
</head>
<body>
    <h1>B組　ログイン</h1>
        <div class="error">
        @if($errors->has('id')){{ $errors->first('id') }}@endif
        @if($errors->has('pass')){{ $errors->first('pass') }}@endif
        </div>
    <form action="admin_new_list" method="post">
        {{ csrf_field() }}
        <label class="id_text">ログインID</label>
        <input class="id" type="text" name="id" value="{{old('id')}}"><br>
        <label class="pass_text">パスワード</label>
        <input class="pass" type="password" name="pass" value="{{old('pass')}}"><br>
        <div class="b">
            <input class="login_btn" type="submit" name="login" value="認証">
        </div>
    </form>
</body>
<script type="text/javascript">
  
    prompt('名前を入力してください', '例：佐藤');//ポップアップをしてくれているメソッド
    window.confirm("本当にこの内容でよろしいですか。");
    console.log(234);


</script>
</html>
