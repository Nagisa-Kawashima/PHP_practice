<?php

//ファイルを操作するには fopen() という関数
//ファイル名を渡してあげて、書き込みモードにするには write の w 

$fp = fopen('names.txt', 'a');
// $fp = fopen('names.txt', 'w');
//w はファイルの中身を空にしてからファイルを書き込み可能な設定で開くく
//a が開いたファイルに追記する
//names.txt がなければ新しく作ってくれて、ファイルポインタと呼ばれる特殊な変数を返してくれるので、 $fp という変数で受けてあげましょう。

fwrite($fp, "taro\n") ; 
fwrite($fp, "jiro\n") ; 
fwrite($fp, "saburo\n") ; 
fwrite($fp, "hogehoge\n") ; 
//ファイルポインタと書き込みたい値を渡す
fclose($fp);
//書き込みを終了するには fclose() 関数にファイルポインタを渡す
// ・・このあとにファイル操作がなければ、実は書かなくても OK 


