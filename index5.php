<?php
// <!-- String型
// Array型
// Object型


// 関数もまとめて管理できるデータ型のことを、今まで見てきた文字列型や配列型などと区別して、オブジェクト型と呼びます。 
// $post->text = 'hello';
// $post->show();
// のようなもの

// echo はその後に続く文字列をそのまま出力
//print_r と var_dump はいずれも変数の情報を出力するもの


//新しいデータ型にまとめる　classを使う
class Post 
{
    public $text;
    public $likes;
    //プロパティ

    public function __construct($text, $likes) 
    {
        $this->text = $text;
        $this->likes = $likes;
        // クラス内外どちらからでもインスタンスの値を変数にはじめて代入することを初期化という
    }
    public function show() //メソッド
    {
        printf('%s %d'.PHP_EOL, $this->text, $this->likes);
    }
}

$posts = [];
// $posts[0] = ['text' => 'hello', 'likes' => 0];
$posts[0] = new Post('hello', 0);
// $posts[0]->text = 'hello';
// $posts[0]->likes = 0;
// $posts[1] = ['text' => 'hello again', 'likes' => 0];

$posts[1] = new Post('hello again', 1);
// $posts[1]->text = 'hello again!';
// $posts[1]->likes = 1;

// print_r($posts);

// function show($post)
// {
//     printf('%s %d'.PHP_EOL, $post['text'], $post['likes']);
// }

// show($posts[0]);
// show($posts[1]);

$posts[0]->show();
$posts[1]->show();


// アロー演算子-> はインスタンスのメソッドを呼ぶとき 、または インスタンスのプロパティを取得するとき に使う記号