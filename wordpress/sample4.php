<?php

$color[0] = "黒";
$color[100] = "白";
$color[2] = "赤";

echo $color[100];



// $color = ["黒", "白", "赤"];
$color = array("黒", "白", "赤");

echo $color[1];

$myfavorite = 1;
echo $color[$myfavorite];


$book[0][0] = "デザイン入門";
$book[0][1] = "デザインの基礎";

$book[1][0] = "php入門";
$book[1][1] = "Laravel入門";

$book = [
    ["デザイン入門", "デザインの基礎"], ["php入門", "高度なphp開発"]
];

echo $book [1][1];

$pref["hokkaido"] = "北海道";
$pref["aomori"] = "青森県";
$pref["iwate"] = "岩手県";

$pref = [
    "hokkaido" => "北海道",
    "aomori" => "青森県",
    "iwate" => "岩手県",
];


$pref["hokkaido"] = [
    "赤平市",
    "別府市",
    "芦別市"
];

// echo $pref["aomori"];
// echo $pref;

echo $pref["hokkaido"][1];


$color = ["黒", "白", "黄"];

// $max = count($color);
// array_unshift($color, "緑", "黄");
// array_push($color, "緑", "黄");

// $mycolor = array_shift($color);
// $mycolor = array_shift($color);
// $mycolor = array_pop($color);
// $mycolor = array_pop($color);

// echo $mycolor;
// $color[] = "緑";
// $color[] = "黄";

$color_string = implode('-', $color);
$color_string .= ",緑,黄";
$newarray = explode(',', $color_string);
print($color_string);
print_r($newarray);
// echo count($color);
// echo $color[$max -1];



