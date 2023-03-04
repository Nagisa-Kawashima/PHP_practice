<?php

class Post //クラスを使うとコードの見通しが良くなる
{
  public $text;
  private $likes = 0;
  //private や public はアクセス修飾子と呼ばれていて、 private にしてあげるとこのクラスの中でしか使えなくなります。
  public function __construct($text)
  {
    $this->text = $text;
    // $this->likes = $likes;
  }

  public function show() //クラスの外からも使える関数
  {
    printf('%s (%d)' . PHP_EOL, $this->text, $this->likes);
  }
  public function like()
  {
    $this->likes++;
    if ($this->likes > 100) {
        $this->likes = 100;
    }
  }
}

$posts = [];
$posts[0] = new Post('hello');
$posts[1] = new Post('hello again');

// $posts[0]->likes++;
//直接値の操作は危険
$posts[0]->like();
$posts[0]->show();
$posts[1]->show();


