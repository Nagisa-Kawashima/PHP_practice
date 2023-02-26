<?php
## ファイルから読み込む処理

$fp = fopen('names.txt', 'r');
//読み込みのときは r を指定
$contents = fread($fp, filesize('names.txt'));
//サイズを指定して一気に読み込むには fread 関数を使います。
fclose($fp);
echo $contents;

//fgets 関数を使えば、 1 行ずつ読み込んでいくことができます。
$fp = fopen('names.txt', 'r');
//読み込みのときは r を指定

// 、ファイルの先頭から一行づつ読み込んで、 $line に代入してくれるのですが、
//もう読み込むことがなくなったら false を返すので、
// while() を使って読み込むものがなくならない限りとする
while (($line = fgets($fp)) !== false) {
    //fgets() が返すのは文字列か false か
    echo $line;
};

fclose($fp);

//fread
// サイズを指定して一度に読み込む時
// fgets
// ファイルを1行ずつ読み込みたい時
