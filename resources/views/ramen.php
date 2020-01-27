<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>激戦区茨城県！おすすめラーメン店</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<!--               使いたいファイル名　日付　直前までのパス
                   $name             $chase  $locate
setjsのファイルの順番が違ければ全く機能しない。jquery-1.12.0.minが親玉。jquery.marqueeが子分。親がいないと子も動けない。
jsのエラーはf12のconsoleで見ることができる。jsがうまく動かないときは逐一確認するといい
php文が赤く表示されなかったのはシンタックスがphpで設定されていなかったから。右下の言語指定のとこ
-->
<!--
<div id="hoge"></div>
<script>
    $('#hoge').text('wwww');
</script>
-->
</head>
   <body>
   <script>
//流れる文字
$(function () {
    $('p.ticker').marquee();
});
$(function(){
    var imgNum = 4;
    var imgSize = 468;
    var time = 3000;
    var current = 1;
    setInterval(function(){
        if( current < imgNum ) {
            current++;
            $("#banner ul").animate({
                marginLeft : parseInt($("#banner ul").css("margin-left"))-imgSize+"px"
            },"fast");
        } else {
             $("#banner ul").animate({
                marginLeft : parseInt($("#banner ul").css("margin-left"))+(imgSize * (imgNum-1))+"px"
            },"fast");
            current = 1;
        }
    }, time);
});
$(function() {
    var topBtn = $('.page-top');
    topBtn.hide();
    //ƒXƒNƒ[ƒ‹‚ª100‚É’B‚µ‚½‚çƒ{ƒ^ƒ“•\Ž¦
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            topBtn.fadeIn();
        } else {
            topBtn.fadeOut();
        }
    });
    //ƒXƒNƒ[ƒ‹‚µ‚Äƒgƒbƒv
    topBtn.click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });
});
</script>

<div id="container">

   <div class="firstview">
    <img src="../img/firstview.jpg">
   </div>

   <ul class="nvi">
   <li><div class="Button Radius5" id="IconList2"><a href="#kadohuji">角ふじ明神</a></div></li>
   <li><div class="Button Radius5" id="IconList3"><a href="#sansui">三水</a></div></li>
   <li><div class="Button Radius5" id="IconList4"><a href="#kigenmon">喜元門</a></div></li>
   <li><div class="Button Radius5" id="IconList5"><a href="#hamaya">はま屋</a></div></li>
   <li class="hariken"><div class="Button Radius5" id="IconList6"><a href="#hariken">ハリケーン</a></div></li>
   </ul>
<div class="moji">
</div>
<div id="banner">
	<ul>
    	<li>
        <a href="http://px.a8.net/svt/ejp?a8mat=2HZ3HX+230N02+3DUE+65U41" target="_blank">
        <img border="0" width="468" height="60" alt="" src="http://www26.a8.net/svt/bgt?aid=151123317126&wid=001&eno= 01&mid=s00000015791001035000&mc=1"></a>
        <img border="0" width="1" height="1" src="http://www13.a8.net/0.gif?a8mat=2HZ3HX+230N02+3DUE+65U41" alt="">

        </li>
        <li>
        	<a href="http://px.a8.net/svt/ejp?a8mat=2NFYE0+AWY41E+312Y+63OY9" target="_blank">
			<img border="0" width="468" height="60" alt="" src="http://www29.a8.net/svt/bgt?aid=160307928660&wid=001&eno= 01&mid=s00000014137001025000&mc=1"></a>
			<img border="0" width="1" height="1" src="http://www10.a8.net/0.gif?a8mat=2NFYE0+AWY41E+312Y+63OY9" alt="">
        </li>
        <li>
        	<a href="http://px.a8.net/svt/ejp?a8mat=2I187W+8P60Z6+2XSW+5ZMCH" target="_blank">
			<img border="0" width="468" height="60" alt="" src="http://www29.a8.net/svt/bgt?aid=151222748526&wid=001&eno= 01&mid=s00000013712001006000&mc=1"></a>
			<img border="0" width="1" height="1" src="http://www18.a8.net/0.gif?a8mat=2I187W+8P60Z6+2XSW+5ZMCH" alt="">
        </li>
        <li>
        	<a href="http://px.a8.net/svt/ejp?a8mat=2HZ3HX+2J3CC2+3DD6+61C2P" target="_blank">
			<img border="0" width="468" height="60" alt="" src="http://www25.a8.net/svt/bgt?aid=151123317153&wid=001&eno= 01&mid=s00000015729001014000&mc=1"></a>
			<img border="0" width="1" height="1" src="http://www19.a8.net/0.gif?a8mat=2HZ3HX+2J3CC2+3DD6+61C2P" alt="">
        </li>

    </ul>
</div>
<h3 class="member">&lt; 会員登録の方はこちら &gt;<h3>
<p class="page-top2"><a href="club_member_input">会員登録</a></p>
<div id="main-contents">
	<h1>茨城県のラーメン屋</h1>
    <div id="kadohuji">
        <h2>本家角ふじ明神</h2>
        <div class="kadohuji_contents">
            <div class="kadohuji_l">
                <p>次郎系ラーメンが特徴なお店です。<br>やや塩分＆脂分の多めなスープですが<br>しつこくはないと思います。<br>野菜はほぼもやしですが、シャキシャキで<br>濃い目のスープと一緒に食べると丁度良い感じです。<br>上に乗ったニンニクをスープと混ぜてお召し上がり下さい。</p>
            </div>
            <div class="kadohuji_r">
                <img src="../img/kadohuji_ramen1.jpg">
            </div>
       </div>

        <div class="shop_setumei1">
        <div class="setumei1_l">
        <span>店舗情報</span>
        <p>
          住所&emsp;&emsp;&emsp;&emsp;&emsp;茨城県つくば市上横場2192-1<br>
          営業時間&emsp;&emsp;&emsp;火～土11：00～深夜2：00&emsp;&emsp;<br>
          &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;日・月11：00～23：00<br>
          定休日&emsp;&emsp;&emsp;&emsp;年中無休<br>
          <input type="button" onclick="location.href='../app/webroot/contact.wbt'"value="お問い合わせ">
        </p>
        </div>
        <div class="shop1">
        <img src="../img/kadohuji_shop1.jpg">
       </div>
       </div>
   </div>
   <div id="sansui">
       <h2>三水ラーメンつくば店</h2>
       <div class="sansui_contents">
            <div class="sansui_l">
                <p>麺量が中盛・大盛までが無料サービスで選べて<br>麺の硬さ、油の量、味の濃さもお好みで選べます。<br>ラーメンの味の種類が醤油と味噌味の２種類で<br>色々なトッピングが出来ます。麺の硬さや味の濃さ、<br>背油の量が選べるのでお好みのラーメンを作ってはいかがでしょうか</p>
            </div>
            <div class="sansui_r">
                <img src="../img/sansui_ramen.jpg">
            </div>
       </div>
       <div class="shop_setumei2">
       <div class="setumei1_l">
       <span>店舗情報</span>
        <p>
          住所&emsp;&emsp;&emsp;&emsp;茨城県つくば市上横場1894－3<br>
          営業時間&emsp;&emsp;&emsp;11：00～4：00<br>
          定休日&emsp;&emsp;&emsp;&emsp;年中無休<br>
          <input type="button" onclick="location.href='../app/webroot/contact.wbt'"value="お問い合わせ">
        </p>
        </div>
        <div class="shop2">
        <img src="../img/sansui_shop1.jpg">
        </div>
        </div>
	</div>
	<div id="kigenmon">
		<h2>喜元門つくばサイエンス通り店</h2>
        <div class="kigenmon_contents">
            <div class="kigenmon_l">
                <p>こちらは全体的に魚介系が強めの風味で、<br>割と油科感が強めな感じです。<br>喜元門の特徴はチャーシューが４種類あり、<br>自分で好きなチャーシューを選べることです。<br>・炭火焼きチャーシュー・直火焼きチャーシュー<br>・ばら巻きチャーシュー・低温調理チャーシュー<br>の４種類から好きな物を一つ選べます。</p>
            </div>
            <div class="kigenmon_r">
                <img src="../img/kigenmon_ramen.jpg">
            </div>
        </div>
        <div class="shop_setumei3">
        <div class="setumei1_l">
    	<span>店舗情報</span>
       	<p>
        住所&emsp;&emsp;&emsp;&emsp;&emsp;茨城県つくば市上横場273－6<br>
        営業時間&emsp;&emsp;&emsp;1：00～14：30、17：00～22：00<br>
        定休日&emsp;&emsp;&emsp;&emsp;年中無休<br>
        <input type="button" onclick="location.href='../app/webroot/contact.wbt'"value="お問い合わせ">
        </p>
      	</div>
        <div class="shop3">
     		<img src="../img/kigenmon_shop.jpg">
    	</div>
        </div>
    </div>
    <div id="hamaya">
        <h2>中華そば浜屋</h2>
        <div class="hamaya_contents">
            <div class="hamaya_l">
                <p>中華そばとつけそばがそれぞれ11種類ずつ<br>あり、味も濃厚とあっさりで選べるので実質<br>22種類とメニュー豊富なラーメン屋さんです。<br>22種類もあるので自分のお好みの味やトッピング<br>などを色々試せるので何回行っても飽きないお店です。</p>
            </div>
            <div class="hamaya_r">
                <img src="../img/hamaya_ramen.jpg">
            </div>
        </div>
        <div class="shop_setumei4">
        <div class="setumei1_l">
        <span>店舗情報</span>
       	<p>
           住所&emsp;&emsp;&emsp;&emsp;&emsp;茨城県北相馬郡利根町横須賀1171－2<br>
           営業時間&emsp;&emsp;&emsp;11：00～14：30、17；00～21：00<br>
           定休日&emsp;&emsp;&emsp;&emsp;火曜日<br>
           <input type="button" onclick="location.href='../app/webroot/contact.wbt'"value="お問い合わせ">
           </p>
        </div>
        <div class="shop4">
           <img src="../img/hamaya_shop.jpg">
        </div>
        </div>
    </div>

    <div id="hariken">
        <h2>ハリケンらーめん</h2>
        <div class="hariken_contents">
            <div class="hariken_l">
                <p>あっさり魚だし、鶏そば、濃厚魚介豚骨、濃厚つけそばなど12種類のメニューに加え、さらに2種類のラーメンが平日限定で用意されています。<br>もっちりとした小麦の香りのある麺が特徴です。代表メニューの鶏そばのスープからは煮出した鶏の旨味が溢れてきます。
                </p>
            </div>
            <div class="hariken_r">
                <img src="../img/hariken_ramen.jpg">
            </div>
        </div>
        <div class="shop_setumei5">
        <div class="setumei1_l">
        <span>店舗情報</span>
       	<p>
           住所&emsp;&emsp;&emsp;&emsp;&emsp;茨城県つくば市栗原2857-8<br>
           営業時間&emsp;&emsp;&emsp;11:30～14:30、17:30～21:00<br>
           定休日&emsp;&emsp;&emsp;&emsp;月曜日<br>
           <input type="button" onclick="location.href='/ramen/php/seki_ramen_inquiry.php'"value="お問い合わせ">
           </p>
        </div>
        <div class="shop5">
           <img src="../img/hariken_shop1.jpg">
        </div>
        </div>
    </div>

<!-- ƒRƒs[ƒ‰ƒCƒg-->

</div>
<div class="copy">
<small>Copyright &copy; 2016 激戦区茨城県！おすすめラーメン屋 All Rights Reserved.</small>
</div>
<!-- ƒRƒs[ƒ‰ƒCƒg-->


<!--¥ƒy[ƒW‚Ìæ“ª‚Ö–ß‚é-->
<p class="page-top"><a href="#container">このページの先頭へ</a></p><br>
<!--£ƒy[ƒW‚Ìæ“ª‚Ö–ß‚é-->
</div>
</body>

{{$users->name}}


</html>
