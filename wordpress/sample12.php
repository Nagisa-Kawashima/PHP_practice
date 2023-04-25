<?php
// function sum(int $a, int $b): int {
//     return $a + $b;
// }


// $get_sum = function($a, $b) {
    
// }

// $sum = sum(10, 15);
// echo $sum;


function sum(int $a, int $b ): int{
    return $a + $b;
}


function echo_price($callback) {
    echo number_format($callback(1000, 500)), "円";
}



$get_sum = function ($a, $b) {
    return $a + $b;
};

$sum = $get_sum(10, 15);
// echo $sum;


// echo_price($get_sum);
echo_price(function ($a, $b)  {
    return $a + $b;
});

$get_sum = fn($a, $b) => $a + $b;
$sum = $get_sum(10, 15);
echo $sum;


