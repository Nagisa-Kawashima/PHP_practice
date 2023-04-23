<?php
$number1 = 10;
$number2 = "10";
// $number2 = 10.0;


if ($number1 === (int)$number2) {
    echo "同じです";
}

echo "色を選んでください(1.黒, 2.白, 3.赤) >";
$color = (int)trim(fgets(STDIN));

if ($color === 1) {
    echo "黒が選ばれました";
} elseif ($color === 2) {
    echo "白が選ばれました";
} elseif ($color === 3) {
    echo "赤が選ばれました";
}


switch ($color) {
    case 1:
        echo "黒が選ばれました";
        break;
    case 2:
        echo "白が選ばれました";
        break;
    case 3:
        echo "赤が選ばれました";
        break;
}

// $black = "黒";
// $white = "白";
// $red = "赤";

// echo $black;


