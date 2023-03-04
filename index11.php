<?php
// require() とするか include() 外部ファイルの読み込み
// require('Post.php'); //読み込めなかったときに処理が止まる
// include('Post.php');//読み込まないだけで処理はとまらない、HTMLファイルの一部など読み込めなくても問題があまりないものに使う

// ・・require_once は、既に取り込まれたファイルは2回目以降は取り込まない（1度だけ取りこむ


spl_autoload_register(function ($class) {
//new したときなどクラスを使おうとしてそのクラスが読み込まれていなかったら呼ばれる関数 クラスが多くなった時に必要になる
    require($class. '.php');
});

$posts[0] = new Post('hello');
$posts[1] = new Post('hello again');

foreach ($posts as $post) {
  $post->show();
}


