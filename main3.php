<?php
// file_put_contents() 関数
$contents = "taro\njiro\nsaburo\n";
file_put_contents('names.txt', $contents);

//file_get_contents() を使うと fopen() などを使わずに簡単に読み込むことができます。

$contents = file_get_contents('names.txt');
echo $contents; //php を読み込むだけで中身が表示できる

// 1 行ずつ配列の要素として読み込む file()
$lines = file('names.txt', FILE_IGNORE_NEW_LINES);

var_dump($lines);
//末尾の改行を無視するには FILE_IGNORE_NEW_LINES 


// file_put_contents() を使って data ディレクトリにいくつかファイルを作成

file_put_contents('data/taro.txt', "taro\n");
file_put_contents('data/jiro.txt', "jiro\n");
file_put_contents('data/saburo.txt', "saburo\n");

//ディレクトリを操作するには opendir() 
//  readdir() で内容を一行ずつ読み込めるので、 readdir($dp) 

// $dp = opendir('data');
// while (($item = readdir($dp)) !== false) {
//   if ($item === '.' || $item === '..') {
//     continue;
//   }
//   echo $item . PHP_EOL;
// }


foreach (glob('data/*.txt') as $item) {
    echo $item.PHP_EOL;
    echo basename($item).PHP_EOL;
    //ファイル名だけを取得したい場合 basenameを使う
}

if (!file_exists('data/hoge.txt')) {
    echo 'hoge not here!'.PHP_EOL;
}

// ディレクトリやファイルが存在するかは、 file_exists() という関数
if (file_exists('data') === true) {
    echo 'data exists!'.PHP_EOL;
}
//書き込み可能か、読み込み可能かも調べることができて、 is_writable() , is_readable() 
if (is_writable('data/taro.txt') == true) {
    echo 'taro is writable'.PHP_EOL;
}
if (is_readable('data/taro.txt') == true) {
    echo 'taro is readable!'.PHP_EOL;
}

echo time() .PHP_EOL;
//'Y-m-d l' (年-月-日 曜日) 
echo date('Y-m-d l', time()).PHP_EOL;
echo date('Y-m-d l').PHP_EOL; //現在日時を省略する場合はtime() を省略してもOK
echo date('Y-m-d l', mktime(0, 0, 0, 5, 1, 2020)) . PHP_EOL;
//時、分、秒、月、日、年と指定

// strtotime() という関数
echo date('Y-m-d l', strtotime('2020-05-07')).PHP_EOL;
echo date('Y-m-d l', strtotime('2020-05-07 +1 day')).PHP_EOL;