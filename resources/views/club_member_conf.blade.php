<?php
$prefectures = array(
	 	'0' =>'お選びください',
		'1' => '北海道',
		'2' => '青森県',
		'3' => '岩手県',
		'4' => '宮城県',
		'5' => '秋田県',
		'6' => '山形県',
		'7' => '福島県',
		'8' => '茨城県',
		'9' => '栃木県',
		'10' => '群馬県',
		'11' => '埼玉県',
		'12' => '千葉県',
		'13' => '東京都',
		'14' => '神奈川県',
		'15' => '新潟県',
		'16' => '富山県',
		'17' => '石川県',
		'18' => '福井県',
		'19' => '山梨県',
		'20' => '長野県',
		'21' => '岐阜県',
		'22' => '静岡県',
		'23' => '愛知県',
		'24' => '三重県',
		'25' => '滋賀県',
		'26' => '京都府',
		'27' => '大阪府',
		'28' => '兵庫県',
		'29' => '奈良県',
		'30' => '和歌山県',
		'31' => '鳥取県',
		'32' => '島根県',
		'33' => '岡山県',
		'34' => '広島県',
		'35' => '山口県',
		'36' => '徳島県',
		'37' => '香川県',
		'38' => '愛媛県',
		'39' => '高知県',
		'40' => '福岡県',
		'41' => '佐賀県',
		'42' => '長崎県',
		'43' => '熊本県',
		'44' => '大分県',
		'45' => '宮崎県',
		'46' => '鹿児島県',
		'47' => '沖縄県',
);
$month = array(
	 	'0' =>'----',
		'1' => '1月',
		'2' => '2月',
		'3' => '3月',
		'4' => '4月',
		'5' => '5月',
		'6' => '6月',
		'7' => '7月',
		'8' => '8月',
		'9' => '9月',
		'10' => '10月',
		'11' => '11月',
		'12' => '12月',
);
$date = array(
	 	'0' =>'----',
		'1' => '1日',
		'2' => '2日',
		'3' => '3日',
		'4' => '4日',
		'5' => '5日',
		'6' => '6日',
		'7' => '7日',
		'8' => '8日',
		'9' => '9日',
		'10' => '10日',
		'11' => '11日',
		'12' => '12日',
    '13' => '13日',
    '14' => '14日',
		'15' => '15日',
		'16' => '16日',
		'17' => '17日',
		'18' => '18日',
		'19' => '19日',
		'20' => '20日',
		'21' => '21日',
		'22' => '22日',
		'23' => '23日',
		'24' => '24日',
    '25' => '25日',
		'26' => '26日',
		'27' => '27日',
		'28' => '28日',
		'29' => '29日',
		'30' => '30日',
		'31' => '31日',
);
//print_r($request);
//dd($request);
//var_dump($_POST);

?>
<html>
<head>
	<title>確認画面</title>
  <link href="css/club_member_conf.css" rel="stylesheet" type="text/css">
</head>
<body>
	<h2>ユーザー情報</h2>
	<table>
	<tr><td>名前</td><td>{{$request->name}}</td></tr>
			<tr><td>フリガナ</td><td>{{$request['kana']}}</td></tr>
			<tr><td>生年月日</td><td>{{$request['year']}}年{{$month[$request->month]}}{{$date[$request['date']]}}</td></tr>
			<tr><td>郵便番号</td><td>{{$request['portal']}}</td></tr>
			<tr><td>電話</td><td>{{$request['tel']}}</td></tr>
			<tr><td>メールアドレス</td><td>{{$request['email']}}</td></tr>
			<tr><td>都道府県</td><td>{{$prefectures[$request['prefectures']]}}</td></tr>
			<tr><td>市区町村</td><td>{{$request['municipality']}}</td></tr>
			<tr><td>住所</td><td>{{$request['later']}}</td></tr>
      <tr><td>その他</td><td>{{$request['other']}}</td></tr>
	</table>
	<form action="club_member_done" method="post">
    {{ csrf_field() }}
	    <input class="send_btn" type="submit" name="send" value="完了">
	    <input type="hidden" name="name" value="<?=$_POST['name']; ?>">
	    <input type="hidden" name="kana" value="<?=$_POST['kana']; ?>">
	    <input type="hidden" name="year" value="<?=$_POST['year']; ?>">
	    <input type="hidden" name="month" value="<?=$_POST['month']; ?>">
	    <input type="hidden" name="date" value="<?=$_POST['date']; ?>">
	    <input type="hidden" name="portal" value="<?=$_POST['portal']; ?>">
			<input type="hidden" name="tel" value="<?=$_POST['tel']; ?>">
			<input type="hidden" name="email" value="<?=$_POST['email']; ?>">
	    <input type="hidden" name="prefectures" value="<?=$_POST['prefectures']; ?>">
	    <input type="hidden" name="municipality" value="<?=$_POST['municipality']; ?>">
	    <input type="hidden" name="later" value="<?=$_POST['later']; ?>">
	    <input type="hidden" name="other" value="<?=$_POST['other']; ?>">
	</form>
</body>
</html>
