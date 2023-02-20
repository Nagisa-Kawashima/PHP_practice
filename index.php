<?php
declare(strict_types=1); //厳密な変換チェック、文字列から数値への変換をしない　ファイルの先頭に必ず
echo 'こんにちは' . PHP_EOL;
echo 'こんばんは' . PHP_EOL;
echo 'Hi kawashima'.PHP_EOL ;

# comment 
/*
comment commenr eo
dddddd
dddd

*/ 

$name = 'dotinstall';
echo 'Hello'.$name.PHP_EOL;
echo 'Hi'.$name.PHP_EOL; 

echo "it's Sunday. Hello".$name.PHP_EOL;
echo "it's Sunday. Hello$name".PHP_EOL; 

echo "It's\t\"sunday \".Hello $name".PHP_EOL; 
// 
// $text = <<<'EOT' //nowdocument
    $name = 'kawashima'; //heredocument 変数を展開する書き方
    $text = <<<EOT
    hello $name
    hello! is lllllllllll
    text!


    EOT; 

echo $text;
echo 2 + 10 * 3 . PHP_EOL; // 32
echo (2 + 10) * 3 . PHP_EOL; // 36 

echo 2 + '3' . PHP_EOL;
//phpは文字列も数字として扱おうとする　

$price = 500; 
$price += 500;
$price *= 100;

$price++;
$price--; 
echo $price; 

//定数　

// define('NAME', 'kawashima');

const NAME = 'Taguchi';
echo NAME . PHP_EOL; 


$a = 'hello';
$b = 10;
$c  = -1.3;
$d = null;
$e = true; 

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e); 

$a = (float)10;
$b = (string)1.3;
var_dump($a);
var_dump($b); 

$score = 60;
if($score >= 80) {
    echo 'Great!' . PHP_EOL;
} elseif ($score >= 60) {
    echo 'Good!' . PHP_EOL;
} else {
    echo 'ok!' . PHP_EOL;
}

// 単一の値がfalseと評価されるのは真偽地のfalseや数値や文字列の0, 
// 空文字、null, 空の配列　

$score = 60;
$name = 'taguchi';
if ($score >= 50) {
    if ($name === 'taguchi') {
        echo 'goodjob!' . PHP_EOL;
    }
}
if ($score >= 50 && $name === 'taguchi') {
    echo 'Goodjob!' . PHP_EOL;
} 

$signal = 'red';

// if ($signal === 'red') {
//   echo 'Stop!' . PHP_EOL;
// } elseif ($signal === 'yellow') {
//   echo 'Caution!' . PHP_EOL;
// } elseif ($signal === 'blue'){
//   echo 'Go!' . PHP_EOL;
// } 

switch($signal) {
    case 'red':
        echo 'Stop!' . PHP_EOL;
        // break;
    
    case 'yallow':
        echo 'Caution!' . PHP_EOL;
        // break;
    
    case 'blue':
    case 'green';
        echo 'GO!' . PHP_EOL;
        break;
    default:
        echo 'Wrong signal' . PHP_EOL;
        break;
    
}
 
for($i = 1; $i <= 5; $i++) {
    // echo 'Hello' . PHP_EOL;
    echo "$i - Hello" . PHP_EOL;
}



$hp = 100;

while ($hp > 0) {
    echo "your HP: $hp" . PHP_EOL;
    $hp -= 15;
}

do {
    echo "your HP: $hp" . PHP_EOL;
    $hp -= 15;
} while ($hp > 0); //一回は実行される

for($i = 1; $i <= 10; $i++) {
    // if ($i % 3 == 0) {
    //     continue;
    // }
    // if ($i % 3 == 0) {
    //     continue;
    // }
    if($i == 4) {
        break;
    }

    echo $i . PHP_EOL;
} 


// function showAd() 
// {
//   echo '----------' . PHP_EOL;
//   echo '--- Ad ---' . PHP_EOL;
//   echo '----------' . PHP_EOL;
// }

// showAd();
// echo 'Tom is great!' . PHP_EOL;
// echo 'Bob is great!' . PHP_EOL;
// showAd();
// echo 'Steve is great!' . PHP_EOL;
// echo 'Bob is great!' . PHP_EOL;
// showAd();



function showAd($message = 'Ad')  // 仮引数
{
  echo '----------' . PHP_EOL;
  echo '--- ' . $message . ' ---' . PHP_EOL;
  echo '----------' . PHP_EOL;
}

showAd('Header Ad'); // 実引数
echo 'Tom is great!';
echo 'Bob is great!' . PHP_EOL;
// showAd('Ad');
showAd();
echo 'Steve is great!' . PHP_EOL;
echo 'Bob is great!' . PHP_EOL;
showAd('Footer Ad'); 


// function sum($a, $b, $c)

// {
//     return $a + $b + $c;
//     echo 'Here';
// } 

// echo sum(100, 200, 300) + sum(300, 400, 500). PHP_EOL;

$rate = 1.1; //クローバルスコープ
// 関数の外すべてで有効
function sum($a, $b, $c)
{
    $rate = 1.08; //ローカルスコープ　関数内だけで有効

    return($a + $b + $c) * $rate;

} 

echo sum(100, 200, 300) + sum(300, 400, 500). PHP_EOL;



// function sum($a, $b, $c)
// {
//     return $a + $b + $c;
// }

//以下関数を値として扱う場合

$sum = function ($a, $b, $c) {  //無名関数　関数自体を別の関数の引数として渡すことが出来る
    return $a + $b + $c;
}; 

echo $sum(100, 200, 300).PHP_EOL;


// declare(strict_types=1);


function total($a, $b, $c)
{
    $total =  $a + $b + $c;

    // if($total < 0) {
    //     return 0;
    // } else {
    //     return $total;
    // }
    return $total < 0 ? 0 : $total;
                //条件　？　値 : 値
}
echo total(100, 300, 500).PHP_EOL;
echo total(-1000, 300, 500).PHP_EOL;

function showInfo(String $name, int $score):void
{
    echo $name. ':'.$score .PHP_EOL;
}
showInfo('taguchi', 4);

