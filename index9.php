<?php

class Post {
    // private $text;
    protected $text; //継承したクラスのみで使用

    public function __construct( $text ) {
        $this->text = $text;
    }

    public function show() {
        printf( '%s' . PHP_EOL, $this->text );
    }
}

class SponsoredPost extends Post  {
    private $sponser;

    public function __construct( $text, $sponser ) {
        parent::__construct( $text );
        $this->sponser = $sponser;
    }

    public function showSponser() {
        printf( '%s' . PHP_EOL, $this->sponser );
    }

    public function show() {  //「メソッドのオーバーライド」
        printf( '%s by %s' . PHP_EOL, $this->text, $this->sponser );
    }

}

$posts = [];
$posts[ 0 ] = new Post( 'hello' );
$posts[ 1 ] = new Post( 'hello again' );
$posts[ 2 ] = new SponsoredPost( 'hello sponser', 'hogehogesponser' );

$posts[ 0 ]->show();
$posts[ 1 ]->show();
$posts[ 2 ]->show();

$posts[ 2 ]->showSponser();



