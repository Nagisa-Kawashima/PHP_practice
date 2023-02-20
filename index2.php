<?php

declare(strict_types=1);

function getAward(?int $score): ?string 
{                       //型の前に？マークをつけるとnullかその型かという意味になる　　
    // 引数の型にもつけることが出来るnullかintかという意味になる
    // ×整数か文字列か、文字列か真偽値かという指定は出来ない
    return $score >= 100 ? 'GoldMedal' : null;
}

echo getAward(150).PHP_EOL;
echo getAward(40).PHP_EOL; 

//同じ意味合いのデータ→　配列というデータ構造で管理する

$scores = [
    'first'  => 90,
    'second' => 40,
    'third'  => 100,
    //キーの名前は変更できる
];
// $scores[1] = 60;
// 配列のデータの変更もインデックスを使う
// echo $scores[1].PHP_EOL; 

var_dump($scores); //中身をわかりやすく表示
print_r($scores); // 変数に関する情報をわかりやすく表示 

// echo $scores['third']; 

foreach ($scores as $score) {
    echo $score.PHP_EOL;
}
//キーも表示したい場合
foreach ($scores as $key => $score) {
    echo $key. ':'.$score.PHP_EOL;
}

$moreScores = [
    55,
    72,
    'perfect',
    [90, 42, 88]
];
$scores = [
    90,
    40,
...$moreScores, //この配列をあわせて一つの配列として追加したい場合
    100,
]; 

print_r($scores); //2次元配列になっていることを確かめる
echo $scores[5][2].PHP_EOL;

//可変長引数　引数は何個来ても合計が出せるように出来る
//渡されたすべての引数を配列にしてくれるもの　

function getStats(...$numbers)
{
    $total = 0;
    foreach($numbers as $number) {
        $total += $number;
    }
    // return $total;
    return [$total, $total / count($numbers) ];
}

// echo sum(1, 3, 5).PHP_EOL;
// echo sum(4,2,5,1); 

print_r(getStats(1,3,5));
list($sum ,$average) = getStats(1,3,5);
[$sum ,$average] = getStats(1,3,5); //同じ意味　

echo $sum.PHP_EOL;
echo $average.PHP_EOL;




