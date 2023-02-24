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




// ###固定長データを扱う関数

$input = '20200320Item-A  1200';
$input = substr_replace($input, 'Item-B  ', 8, 8);
echo $input;

$date = substr($input, 0, 8);
//0 文字目から 8 桁分
$product = substr($input, 8, 8);
//8 文字目から 8 桁分
$amount = substr($input, 16, 4);
//16 文字目から 4 桁分

echo $date . PHP_EOL;
echo $product . PHP_EOL;
echo $amount . PHP_EOL;

// 3 桁ごとにカンマを入れたい場合は number_format() という関数を使ってあげる
echo number_format($amount); //1,200

//位置と桁数を指定して置換をするには、 substr_replace()


###特定のパターンで文字列を検索、置換する方法
$input = 'Call us at 03-3001-1256 or 03-3015-3222';
//数値が 2 桁分 - 数値が 4 桁分 - 数値が 4 桁分
$pattern =  '/\d{2}-\d{4}-\d{4}/';

//preg_match() という関数で、第一引数には検索したいパターン、
//次に検索したい文字列
//次に検索した結果を格納するための変数を渡してあげます。
preg_match($pattern, $input, $matches);
// preg_match() は最初に見つかった結果だけを $matches に格納

//全ての見つかった結果を格納したい場合は preg_match_all()
preg_match_all($pattern, $input, $matches);

print_r($matches);


// パターンに応じて置換するには preg_replace() 
//パターンと
//置換後の文字列、
//そして検索したい文字列をこのように渡してあげます。 

$input = preg_replace($pattern, '**-****-****', $input);
echo $input . PHP_EOL; 


##文字列と配列を相互に変換 

$d = [2020, 11, 15];
//これらの要素を文字列に埋め込みたかった場合、
echo "$d[0]-$d[1]-$d[2]" . PHP_EOL;
//単純に区切り文字で配列の要素を連結するだけだったら、 implode() 
echo implode('*', $d). PHP_EOL; 

$t = '17:32:45';

//れぞれの時、分、秒を配列の要素にしたかった場合、 explode() 
print_r(explode(':', $t));
//print_r() は、 変数の値に関する情報を解り易い形式で表示します。
//  [0] => 17
// [1] => 32
// [2] => 45

$n = 5.6283;
echo ceil($n) . PHP_EOL;
//小数点以下を切り上げるには ceil() 
echo floor($n) . PHP_EOL;
//小数点以下を切り捨てるには floor()
echo round($n) . PHP_EOL;
//四捨五入して整数にしたいなら round()
echo round($n, 2) . PHP_EOL;
//少数第３いを四捨五入して、第２いまで表示する


//mt_rand()
//1 以上 6 以下のランダムな整数値を生成
echo mt_rand(1, 6).PHP_EOL;

// max() と min() 要素の中の最大値と最小値を求める
echo max(3, 9, 4).PHP_EOL;
echo min(3, 9, 4).PHP_EOL;

// 定数としてM_PI とすると円周率、 そして M_SQRT2 とすると 2 の平方根
//数 2乗すると a になる数を，a の平方根と呼ぶ。
echo M_PI.PHP_EOL;
echo M_SQRT2.PHP_EOL;

// 2乗（にじょう）は、同じ数や文字を２回かけることです。下記が２乗の例です。

// なお、同じ数を３回かけると３乗、４回かけると４乗になります。