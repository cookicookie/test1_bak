

  <link href="css/learn.css" rel="stylesheet" type="text/css">
../一つ上の階層に上がるという意味（HTMLがあるディレクトリから）
../css/一つ上の階層にあが利、そこからCSSディレクトリにあるCSSを適用

JavaScriptの基本
document.write('…')
オブジェクト、メソッド、パラメーター（画面に…を表示して欲しいという意味）

文字列連結
document.write('10+3は、' + (10+3) + 'です');

変数
var answer = 10 + 3;
var = 変数を宣言するという意味

変数の再代入
var answer = 10 + 3;
answer = answer + 10;//結果23

日時の取得
var today = today.getFullYear() + '/' + (today.getMonth()+1)//getMonthは1月を０として捉えるので、+1する + '/' + today.getDate();

タイマー作成（未完成）
var addZero = function(value){
            if(value < 10){
                value = '0' + value;
            }
            return value;
        }
        document.getElementById('start_stop').addEventListener('click',
            function(){
        var now = new Date();
        var seconds = now.getSeconds();//秒を取得
        seconds = addZero(seconds);
            var minutes = now.getMinutes();
            minutes = addZero(minutes);
            var hours = now.getHours();
            hours = addZero(hours);
            document.getElementById('timer').innerHTML = hours + ':' + minutes + ':' +seconds;
        });

タイマー作成（完成形）

簡素なログイン機能

var today = new Date();
            var today = today.getFullYear() + '/' + (today.getMonth()+1) + '/' + today.getDate();
            document.write('日付 ' + today);
            function pass() {
      　　　　var UserInput = prompt("パスワードを入力して下さい:","");
             location.href = UserInput + ".php";          　
            }
