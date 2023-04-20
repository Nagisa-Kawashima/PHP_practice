<?=
print ("hello");
print "hello";
echo ' / echoで出力します', '2つ目の文章', '3っつ目の文章';
//  I have <?=foo> foo.

echo 'I\'m Japanese';
echo "I'm Japanese";
echo "I am \"Japanese\"";
echo 'I am \'Japanese\'';
echo "
改行を
入れて出力します";
echo "\n改行を\n入れて出力する\n";
echo '\n改行を\n入れて出力する\n'; //そのまま主力される

echo <<< EOT
asfafafadfddfd
adasdasdasdasdsadsad
asdasdsadasdasdasdasdafdgdfggf
EOT;
echo <<< ABC
asfafafadfddfd\n
adasdasdasdasdsadsad
asdasdsadasdasdasdasdafdgdfggf
ABC;
echo <<< 'EOT'
asfafafadfddfd\n
adasdasdasdasdsadsad
asdasdsadasdasdasdasdafdgdfggf



EOT;

echo "コメントの学習";
/*
dfadfd
asdasdsad
asdasdsa
*/
echo "2つ目のプログラムです";
echo  1 + 2;
echo  1+2;
echo "\n";
echo 10 * 3;
echo "\n";
echo 12 % 3;
echo "\n";
echo 2**3;
echo "\n";
echo "1 + 2=";
echo 1 + 2;
echo "\n";
echo 1+2+3*4;
echo "\n";
echo (1+2+3)*4;
echo "\n";
$price = 150 + 50;
$price = 10;
echo $price;
echo "\n";
echo $price*1.1;

$price = 100;
echo "\n";
echo $price;
echo "50 + 50 は、$price です";
echo "\n";
echo '50 + 50 は', $price,'です';
echo '50 + 50 は'. $price.'です';

$number = 10;
echo "\n{$number}th annniversary";


