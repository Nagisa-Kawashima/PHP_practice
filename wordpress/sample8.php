<?php 
// $number = trim(fgets(STDIN));

function make_list($list) {
    foreach($list as $key => $value) {
        echo ".", $key, ":", $value, "\n";
    }
}

$pref = [
    "hokkaido" => "北海道",
    "aomori" => "青森",
    "iwate" => "岩手"
];
// foreach($pref as $pref_code => $pref_name) {
//     echo ".", $pref_code, ":", $pref_name, "\n";
// }

make_list($pref);

$color = [
    "red" => "赤",
    "blue" => "青",
    "black" => "黒",
];
// foreach($color as $pref_code => $pref_name) {
//     echo ".", $pref_code, ":", $pref_name, "\n";
// }
make_list($color);


// $price = number_format(1000);
// echo $price;



// function sum($num1, $num2) {
//     $answer = $num1 + $num2;
//     return $answer;
// }

// $item_sum = sum(167, 269);
// echo $item_sum;


function sum(...$numbers) {
//     $answer = $num1 + $num2;
//     return $answer;
//  print_r($numbers);
    $answer = 0;
    foreach ($numbers as $num) {
        $answer += $num;
    }
    return $answer;
}

$item_sum = sum(167, 269, 30, 50);
echo $item_sum;





