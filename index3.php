<?php

$name = 'Apple';
$score = 32.246;

$info = "[$name][$score]";
echo $info . PHP_EOL;

$info = sprintf("[$%15s][%10.2f]", $name, $score);
echo $info . PHP_EOL;

$info = sprintf("[$%-15s][%010.2f]", $name, $score); //sprintfはフォーマット済みの文字列を返す
echo $info . PHP_EOL; 

printf("[$%-15s][%010.2f]", $name, $score).PHP_EOL;
// printfは戻り値がなくて標準出力に表示


//フォーマットした文字列を後続の処理で使いたいか、ログとして出力したいかという違い 


$input = ' こんにちは     ';
$input = trim($input);
// 前後の空白や改行を削除する場合

echo mb_strlen($input).PHP_EOL;
//文字列の数を調べる　

echo mb_strpos($input, 'に').PHP_EOL;
//指定した文字列がどの位置にあるのか数字で返す

$input = str_replace('にち', 'ばん', $input);
echo $input.PHP_EOL; 
//指定した文字列を置換して、置換した文字列を返す

//strlen() や strpos() で日本語を扱うにはマルチバイトに対応した別の関数を使う必要があって、 mb_strlen() 、 mb_strpos() を使ってあげる必要があります。

