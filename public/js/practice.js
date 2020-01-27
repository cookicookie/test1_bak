// nodeが用意しているhttpモジュールを読み込む
var http = require('http');

//httpオブジェクトの「createServer」メソッドを呼び出す
var server = http.createServer();

// 「on」というメソッドは、指定のイベント処理を組み込むためのもの
// 第一引数にイベント名、第二引数に組み込む処理（関数）
server.on('request', doRequest);

// --------------------------- リクエスト処理 ---------------------------
function doRequest(req, res) {

// ヘッダー情報の書き出し
res.writeHead(200, {'Content-Type': 'text/plain'} );

// コンテンツの書き出し
res.write("Hello world!");

// コンテンツの完了
res.end();

}

// 待ち受けスタート
server.listen(3000);

// 引数に渡した値をコンソールに出力してくれるメソッド
console.log("server listening…");