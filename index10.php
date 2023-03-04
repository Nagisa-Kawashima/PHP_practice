<?php

class Post {
    protected $text;

    public function __construct( $text ) {
        $this->text = $text;
    }

    public function show() {
        printf( '%s' . PHP_EOL, $this->text );
    }
}

class SponsoredPost extends Post {
    private $sponsor;

    public function __construct( $text, $sponsor ) {
        parent::__construct( $text );
        $this->sponsor = $sponsor;
    }

    
    public function show() {
        printf( '%s by %s' . PHP_EOL, $this->text, $this->sponsor );
    }
}

$posts = [];
$posts[ 0 ] = new Post( 'hello' );
$posts[ 1 ] = new Post( 'hello again' );
$posts[ 2 ] = new SponsoredPost( 'hello hello', 'dotinstall' );

function processPost(Post $post) //他人が作ったクラスをちゃんと継承できているか確認するため、呼び出す際に型を指定する
//Post 型の $post のみ受け付ける
{
    $post->show();
}
foreach ($posts as $post) {
    processPost($post); //Post クラスを継承したクラスをたくさん作ったとしてもまとめて処理することができる
}


// $posts[ 0 ]->show();
// $posts[ 1 ]->show();
// $posts[ 2 ]->show();

// ↑のprocesspostを書き換える
