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



###配列の操作をするための関数

// 頭に要素を追加するには array_unshift() 
//末尾に追加するには array_push()
//先頭から要素を削除するには array_shift() 、
//そして末尾から要素を削除するには array_pop() を使います

$scores = [30, 40, 50];

array_unshift($scores, 10, 20);
//カンマ区切りでいくつでも追加できる

array_push($scores, 60, 70);

// ひとつだけの要素を末尾に追加するには添字なしで値を代入する方法もよく使われます。
$scores[] = 80;

array_shift($scores); 
//ひとつずつしか削除できない

array_pop($scores);
//ひとつずつしか削除できない

print_r($scores);
// -------------------------------------------------

// arra_slice(配列、位置、個数) 切り出す.
// 別の配列を作るときに便利

//array_push() などは元配列を直接変更していたのですが、 array_slice() に関しては元配列は変更せずに
// 新しい配列を作って返してくれるという点に注意

$scores = [30, 40, 50, 60, 70];
$partial = array_slice($scores, 2, 3); 
$partial = array_slice($scores, 2); 
// 配列の２番インデックスから３つ分の要素を取り出す
//最後の要素まで取り出すなら第三引数は省略可
$partial = array_slice($scores, -2); 
//末尾から -1 、 -2 と数えていくので、こちらの 60 から最後まで
// 配列の２番インデックスから３つ分の要素を取り出す
//最後の要素まで取り出すなら第三引数は省略可

print_r($scores);
print_r($partial);

// ----------------------------------------------------

// 途中の要素を削除して詰めたかった場合、 array_splice() 
// array_splice(配列、位置、個数) 
//array_splice() は元配列を直接変更する点に注意

// array_splice(配列、位置、個数,要素) 
//削除した位置に要素を差し込むこともできます。
$scores = [30, 40, 50, 60, 70, 80];
// array_splice($scores, 2, 3);
// array_splice($scores, 2, 3, 100);
array_splice($scores, 2, 0, [100, 101]);
// それから削除せずに、間に要素だけ挿入することもできて、その場合は削除する要素の個数を 0 にすれば OK
// 複数の要素を挿入したい場合は、このように配列の形で書く

print_r($scores);

// -------------------------------------------------------
// sort() に渡してあげると、この配列を直接書き換えて、値を小さい順に並び替えてくれます。


// rsort() とすると、値を大きい順に並び替えてくれます。

//配列があったとして shuffle() に渡してあげると、実行するたびに値をシャッフルしてくれる

//array_rand(n) 配列からランダムに要素を n個ピックアップ
//元配列には変更を加えずに、取り出したもので新しく配列を返す(キーのほう)


// $scores = [40, 50, 20, 30];
// sort($scores);
// print_r($scores);

// rsort($scores);
// print_r($scores);

// shuffle($scores);
// print_r($scores); 

$picked = array_rand($scores, 2);
echo $scores[$picked[0]].PHP_EOL; //値を表示
echo $scores[$picked[1]].PHP_EOL;
print_r($picked); //ランダムに取り出した配列の添え字が返ってくる




//## 配列の値を集計

//0 のインデックスから 5 個分を 10 の値で埋めて
$scores = array_fill(0, 5, 10);
print_r($scores);

//1 から 10 までの値を使って配列を作ってねと
$scores = range(1, 10);
print_r($scores);

// 1 から 10 までだけど 2 刻みで 値が２刻みとなる
$scores = range(1, 10, 2);
print_r($scores);

// array_sum() 合計を求める
echo array_sum($scores).PHP_EOL;
//最大値、最小値
echo max($scores).PHP_EOL;
echo min($scores).PHP_EOL;
//平均を求める 要素の個数は count() という関数を使えば OK
echo array_sum($scores) / count($scores).PHP_EOL;

