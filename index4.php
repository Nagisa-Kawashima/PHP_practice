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


##キーだけ、値だけを配列で取り出したい場合は array_keys() 、 array_values()

$scores = [
    'taguchi' => 80,
    'hayashi' => 70,
    'kikuchi' => 60,
];

$keys = array_keys($scores);
print_r($keys);
$values = array_values($scores);
print_r($values);

##特定のキーや値があるか調べたい場合 trueとfalseを返すarray_key_exists() 

if (array_key_exists ('taguchi', $scores) === true) {
    echo 'taguchi is here'.PHP_EOL;
}


##値が配列の中にあるかどうか調べるには in_array() trueとfalseを返す

if (in_array(80, $scores) === true) {
    echo '80 is here'.PHP_EOL;
}

##値を検索して、対応するキーを返す   array_search() という関数
echo array_search(70, $scores).PHP_EOL;


##キーを保持したまま値でソートしたい場合ですが asort() 、もしくは arsort()
asort($scores);
print_r($scores);
arsort($scores);
print_r($scores);

##値のほうではなくてキーのほうでソートしたいという場合は、 ksort() もしくは krsort

ksort($scores);
print_r($scores);
krsort($scores);
print_r($scores);


// 何を比較して並べ変えるかを自分で定義できる usort() 関数
//ソートしたい配列を渡してあげて、次にどういう並び替えをするかを定義する関数を渡してあげます。
//配列の 2 要素 $a と $b を比較したときに要素が同じなら 0 、$a が $b よりも大きければ 1 、$a が %b よりも小さければ -1 です。
$data = [
    ['name' => 'taguchi', 'score' => 80],
    ['name' => 'kikuchi', 'score' => 60],
    ['name' => 'hayashi', 'score' => 70],
    ['name' => 'tamachi', 'score' => 60],
  ];
  

usort(
    $data,
    function ($a, $b) {
        //ソートする配列のいずれかの部分が入ってきます。
        if($a['score'] === $b['score']) {
            return 0;
        }
        return $a['score']> $b['score'] ? 1 : -1;
    }
);
print_r($data);

##スコアだけでなく名前のほうでも並び替えたい場合 array_multisort() という関数を使います。

$data = [
    ['name' => 'taguchi', 'score' => 80],
    ['name' => 'kikuchi', 'score' => 60],
    ['name' => 'hayashi', 'score' => 70],
    ['name' => 'tamachi', 'score' => 60],
  ];

//$scores と $names を作る必要があります。
$scores = array_column($data, 'score');
$names = array_column($data, 'name');
//データから score のキーの値だけを抜き取ってくれます。
print_r($scores);
print_r($names);

array_multisort(
    $scores, SORT_DESC, SORT_NUMERIC, //データ型は想定外の結果を防ぐためにつけたほうが安心
    $names, SORT_DESC, SORT_STRING,
    $data
);

//array_multisort() を使うと直接書き換えてくれる
print_r($data);
//並び順やデータの種類も指定