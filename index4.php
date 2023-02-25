<?php 

##配列同士の演算

// array_merge() に $a , $b の順で渡してあげると、 $a のあとに $b を連結した新しい配列を作ってくれます。
$a = [3, 4, 8];
$b = [4, 8, 12];
$merged = array_merge($a, $b);
$merged = [...$a, ...$b]; //これでも可
print_r($merged);

//$array_unique() という関数ですが、元配列に変更を加えずに新しい配列を作ってくれる 重複した値を取り除く関数
$uniques = array_unique($merged);
print_r($uniques);


//array_diff($a, $b) としてあげると $a から $b にある要素を引くので、こちらが引かれて、 新しい配列を作ってくれます。
$diff1 = array_diff($a, $b);
print_r($diff1);
$diff2 = array_diff($b, $a);
print_r($diff2);

//array_intersect($a, $b) 共通の要素を抽出する 新しく配列を作成
$common = array_intersect($a, $b);
print_r($common);


//array_map($fn, $a)
// $a の全ての要素に適用して、その結果で新しい配列を作ってくれるという仕組みになっています。
$prices = [100, 200, 300];
//10 パーセントの税をかけた配列が欲しかったとしたら array_map() 
//第一引数に無名関数を渡す、それぞれの要素はこの引数に渡される
//第２引数に配列を渡す
$newPrices = array_map(function ($n) {return $n * 1.1; }, $prices);
print_r($newPrices);

//return で値を返すだけの処理だったら、アロー関数という書き方もできます。
$newPrices = array_map(
    fn($n) => $n * 1.1,
    $prices
);
print_r($newPrices);


