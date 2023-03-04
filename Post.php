<?php

// namespace Dotinstall\MyPHPApp;
//ベンダー名 \ プロジェクト名
class Post
{
  private $text;

  function __construct($text)
  {

    if (strlen($text) <= 3) {
        //与えられた string の長さを返します。
        // echo 'Text too short!'.PHP_EOL;
        // exit;
        throw new Exception('Text too short!');
    }
    $this->text = $text;
  }

  function show()
  {
    printf('%s' . PHP_EOL, $this->text);
  }
}