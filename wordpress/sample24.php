<?php 
class Item {
    public string $name;
}

$item01 = new Item();
$item01->name = "php入門";


$item02 = clone($item01);
// $item02 = $item01;

$item01->name = "js入門";
// $item02->name = "js入門";
echo $item02->name;
echo $item01->name;



$today = new DateTime();
echo $today->format("H:i:s");



$file = new SplFileObject("log.txt", "w");
$file = new SplFileObject("data/log.txt", "w");
$today = new DateTime();
$today->setTimeZone(new DateTimeZone('Asia/Tokyo'));
$file->fwrite($today->format('Y-m-d H:i:s'). "\n");






