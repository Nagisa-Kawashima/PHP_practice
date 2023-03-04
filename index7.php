<?php

declare(strict_types = 1);
//メソッドの引数に渡されている値の型の厳密なチェックを行うことが出来る

class Post
{
  private string $text;
            //型の指定

  public function __construct(string $text)
                                //型の指定

  {
    $this->text = $text;
  }

  public function show()
  {
    printf('%s' . PHP_EOL, $this->text);
  }
}

$posts = [];
$posts[0] = new Post('hello');
// $posts[0] = new Post(5);
$posts[1] = new Post('hello again');

$posts[0]->show();
$posts[1]->show();