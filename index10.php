<?php

//トレイト 重複コードをまとめるためのもの
trait LikeTrait
{
    private $likes = 0;
    public function like()
    {
        $this->likes++;
    }

}

//インターフェースの実装
interface LikeInterface
{ //定義を強制したいメソッドを記述する
    public function like();

}
abstract class BasePost
{   
    
    protected $text;

    public function __construct( $text ) {
        $this->text = $text;
    }
    abstract public function show();//抽象メソッド.定義自体は子クラスで行うので中身は書かなくてOK

}

class Post extends BasePost implements LikeInterface {
   
    use LikeTrait;
    //トレイトの仕様
    
    public function show() {
        printf( '%s (%d)' . PHP_EOL, $this->text , $this->likes);
    }
}

class SponsoredPost extends BasePost {
    private $sponsor;

    public function __construct( $text, $sponsor ) {
        parent::__construct( $text );
        $this->sponsor = $sponsor;
    }

    
    public function show() {
        printf( '%s by %s' . PHP_EOL, $this->text, $this->sponsor );
    }
}

class PremiumPost extends BasePost implements LikeInterface{
    use LikeTrait;
    //トレイトの仕様

    private $price;

    

    public function __construct( $text, $price ) {
        parent::__construct( $text );
        $this->price = $price;
    }

    
    public function show() {
        printf( '%s (%d) [ %d JPY]' . PHP_EOL, $this->text, $this->likes, $this->price );
    }
}


$posts = [];
$posts[ 0 ] = new Post( 'hello' );
$posts[ 1 ] = new Post( 'hello again' );
$posts[ 2 ] = new Post( 'hello hello', 'dotinstall' );
$posts[ 3 ] = new PremiumPost( 'Hello there', 300);

// $posts[ 0 ]->like();
// $posts[ 3 ]->like();

function processLikeable(LikeInterface $likeable)
    //LikeInterface 型の $likeable という引数を受け取る
    //Post や PremiumPostのみ
{
    $likeable->like();
}

processLikeable($posts[0]);
processLikeable($posts[3]);

function processPost(BasePost $post) //他人が作ったクラスをちゃんと継承できているか確認するため、呼び出す際に型を指定する
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

//インターフェースは抽象メソッドだけを持つことができて、その定義を好きなクラスに強制することができるという仕組みです。
//インターフェースでは、クラスの継承関係を気にせずに気軽に好きなクラスに実装させていくことができる仕組み
//また、一つのクラスに複数のインターフェースの実装を紐づけたり
//複数のクラスに一つのインターフェースを割り当てをすることが出来る



//トレイトは型ではないのでクラスの継承やインターフェースと違って、同じトレイトを使ったからといって、同じ型として扱うことができる訳ではない