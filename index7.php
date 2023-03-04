<?php

declare(strict_types = 1);
//メソッドの引数に渡されている値の型の厳密なチェックを行うことが出来る

class Post
{
  private string $text; //型の指定
    private static $count = 0; //クラスプロパティ
    public const VERSION = 0.1;//定数は慣習的に大文字にするのと、 $ (ダラーマーク) は要らない オブジェクト定数

  public function __construct(string $text) //型の指定
  {
    $this->text = $text;
    self::$count++;
  }

  public function show()
  {
    printf('%s' . PHP_EOL, $this->text);
  }
  public static function showInfo()   //クラスメソッド
  {
    printf('Count: %d'.PHP_EOL, self::$count);
    //printf — フォーマット済みの文字列を出力する
    printf('Version: %.1f'.PHP_EOL, self::VERSION);//定数にアクセス
  }

}

$posts = [];
$posts[0] = new Post('hello');
// $posts[0] = new Post(5);
$posts[1] = new Post('hello again');

$posts[0]->show();
$posts[1]->show();

Post::showInfo();



// 静的プロパティ/静的メソッドとは、「インスタンスを生成しなくてもオブジェクトから直接呼び出せるプロパティ/メソッド
// ===クラスプロパティ、クラスメソッド

//消費税など値が常にインスタンスを生成するたびに変わらないものにstiatic 


echo Post::VERSION.PHP_EOL;
//定数をpublicにすると上記のように呼び出せる


