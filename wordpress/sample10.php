<?php 

declare(strict_types=1);


$color = ["黒", "赤", "白"];
array_shift($color);
print_r($color);


$price = 1000;
$new_price = number_format($price);
echo $price;
echo "\n";
echo $new_price;


function add_head(&$target) {
    for ($i= 0; $i < count($target); $i++) {
        $target[$i] = "●".$target[$i];
    }
}

$color = ["黒", "赤", "白"];
add_head($color);
print_r($color);
 
add_head($color);
print_r($color);
 
add_head($color);
print_r($color);
 




