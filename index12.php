<?php
//use という命令を使って、短い別名を付けることもできます。

// use Dotinstall\MyPHPApp as MyPHPApp;

//名前空間の最後を単に別名として使いたい これでも可
// use Dotinstall\MyPHPApp;




// require() とするか include() 外部ファイルの読み込み
require('Post.php'); //読み込めなかったときに処理が止まる
// include('Post.php');//読み込まないだけで処理はとまらない、HTMLファイルの一部など読み込めなくても問題があまりないものに使う

// ・・require_once は、既に取り込まれたファイルは2回目以降は取り込まない（1度だけ取りこむ



// $posts[0] = new Dotinstall\MyPHPApp\Post('hello');
// $posts[1] = new Dotinstall\MyPHPApp\Post('hello again');

// $posts[0] = new MyPHPApp\Post('hello');
try {
        $posts[0] = new Post('!');
        // $posts[1] = new MyPHPApp\Post('hello again');

        foreach ($posts as $post) {
        $post->show();
        }

    } catch (Exception $e) {
        echo $e->getMessage().PHP_EOL;
    }




