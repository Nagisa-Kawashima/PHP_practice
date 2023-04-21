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


$tax = 10;
const TAX = 10;

echo "消費税は{$tax}%です";
echo "消費税は".TAX."%です";
// echo "消費税は{TAX}%です";

$sum = 13221315000 + 150;
$sum = number_format($sum);
$sum = number_format(1234.126, 2, ';', ':');
echo $sum."円です";

// echo "数字を入力してください";
// $number = fgets(STDIN);
// $number = trim($number);
// echo $number."ですね？";

// echo "数字を入力してください";
// $number = trim(fgets(STDIN));
// echo $number."ですね";



echo "足される数 >";
$number1 = trim(fgets(STDIN));
echo "足す数 >";
$number2 = trim(fgets(STDIN));

echo "$number1 + $number2 =",$number1 + $number2;


echo "数字を入力してください >";
$number = trim(fgets(STDIN));

// if ($number > 10) {
//     echo "10よりも大きいです";
// } else {
//     echo "10以下です";
// }

// if ($number > 10):
//     echo "10よりも大きいです";
// else:
//     echo "10以下です";
// endif;


if ($number > 10) {
    echo "10よりも大きいです";
} elseif ($number == 10) {
    echo "10です";
} elseif ($number <= 0) {
    echo "0以下です";
}else {
    echo "10以下です";
}

$gender = "男性";
$age = 21;

// if ($gender == "男性") {
//     echo "男性ですね";
// }

// if ($age == 20) {
//     echo "20歳ですね？";
// }

if ($gender == "男性") {
    if ($age == 21) {
        echo "男性でしかも21歳ですね？";
    }
}  

if ($gender == "男性" xor $age == 20) {
    echo "20歳ではない男性か、20歳の女性ですね？";
}

$gender = "男性";
$age = 21;

if ($gender == "男性" && ($age == 20 || $age == 21)) {
    echo "男性で、20歳もしくは21歳ですね？";
}
 


$number = 10;

if (is_numeric($number)) {
    echo "数字です";
} else {
    echo "数字ではありません";
}