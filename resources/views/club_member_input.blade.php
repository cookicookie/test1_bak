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
//var_dump($_POST);
//var_dump($_SERVER);
//var_dump($_COOKIE);


?>
<head>
	<link href="css/club_member_input.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>会員登録フォ―ム</h1>
<form action="club_member_conf" method="post">
	{{ csrf_field() }}
    <table>
        <tr>
            <td><label class="required">＊</label>名前</td>
            <td class="td_2"><input type="text" name="name" placeholder="山田太郎" value="{{old('name')}}"></td>
						<td class="td_3">@if($errors->has('name')){{ $errors->first('name') }}@endif </td>
        </tr>
        <tr>
            <td><label class="required">＊</label>フリガナ</td>
            <td class="td_2"><input type="text" name="kana" placeholder="ヤマダタロウ" value="{{old('kana')}}"></td>
						<td class="td_3">@if($errors->has('kana')){{ $errors->first('kana') }}@endif</td>
				</tr>
        <tr>
            <td><label class="required">＊</label>生年月日</td>
            <td><input class="year" type="text" name="year" placeholder="2000" value="{{old('year')}}">
							<select class="month" name="month">
									@foreach($month as $key => $val)
										<option value="{{ $key }}"@if(old('month') == $key) selected @endif>{{$val}}</option>
									@endforeach
							</select>
							<select class="date" name="date">
								@foreach($date as $key => $val)
							    <option value="{{ $key }}" @if(old('date') == $key) selected @endif>{{$val}}</option>
							  @endforeach
						  </select>
						</td>
						<td class="td_3">@if($errors->has('year')){{ $errors->first('year') }} @elseif($errors->has('month')){{ $errors->first('month') }} @elseif($errors->has('date')){{ $errors->first('date') }}@endif</td>
        </tr>
        <tr>
            <td><label class="required">＊</label>郵便番号</td>
						<td><input type="text" name="portal" placeholder="ハイフンなし" value="{{old('portal')}}"></td>
						<td class="td_3">@if($errors->has('portal')){{ $errors->first('portal') }}@endif</td>
				</tr>
        <tr>
            <td>&nbsp;&nbsp;&nbsp;電話番号</td>
            <td><input type="text" name="tel" placeholder="ハイフンなし" value="{{old('tel')}}"></td>
        </tr>
				<tr>
						<td><label class="required">＊</label>メールアドレス</td>
						<td><input type="text" class="a" name="email" placeholder="test@gray-code.com" value="{{old('email')}}"></td>
            <td class="td_3">@if($errors->has('email')){{ $errors->first('email') }}@endif</td>
				</tr>
        <tr>
            <td><label class="required">＊</label>都道府県</td>
            <td>
						<select class="prefectures" name="prefectures">
							  @foreach($prefectures as $key => $val)
							    <option value="{{ $key }}" @if(old('prefectures') == $key) selected @endif>{{$val}}</option>
							  @endforeach
						</select>
					  </td>
						<td class="td_3">@if($errors->has('prefectures')){{ $errors->first('prefectures') }}@endif</td>
        </tr>
        <tr>
            <td><label class="required">＊</label>市区町村</td>
            <td><input type="text" name="municipality" placeholder="昭島市緑町" value="{{old('municipality')}}"></td>
						<td class="td_3">@if($errors->has('municipality')){{ $errors->first('municipality') }}@endif</td>
        </tr>
        <tr>
            <td><label class="required">＊</label>住所</td>
            <td><input type="text" name="later" placeholder="1-1" value="{{old('later')}}"></td>
						<td class="td_3">@if($errors->has('later')){{ $errors->first('later') }}@endif</td>
        </tr>
        <tr>
            <td>&nbsp;&nbsp;&nbsp;その他</td>
						<td><input type="text" name="other" placeholder="マンション名など" value="{{old('other')}}"></td>
        </tr>
    </table>
    <input type="submit" name="send" class="check_btn" value="確認画面へ">
</form>
<form action="" method="post">
  	<input type="submit" name="google" class="check_btn" value="Googleアカウントを利用する">
</form>
</body>
<script>
	
	 const btn = document.getElementById('btn');
  
  
  btn.addEventListener('click', function() {
  
    prompt('名前を入力してください', '例：佐藤');//ポップアップをしてくれているメソッド
    window.confirm("本当にこの内容でよろしいですか。");

</script>