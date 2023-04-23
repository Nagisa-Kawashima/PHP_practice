<?php
$dice = rand(1, 6);


// while ($dice !== 1) {
//     echo $dice, "\n";
//     $dice = rand(1, 6);
// }
// echo $dice;

do {
    $dice = rand(1, 6);
    echo $dice, "\n";

} while ($dice !== 1);


$color = ["黒", "白", "", "赤"];

foreach ($color as $color_name) {
    // if ($color_name !== "" ) {
    //     echo $color_name, "\n";
    // }
    if ($color_name === "") {
        // continue;
        break;
    }
    echo $color_name, "\n";
    
}