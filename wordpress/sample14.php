<?php
date_default_timezone_set('Asia/Tokyo');
$today = time();
$format_date = date('Y/m/d', $today);
// echo $today;
echo $format_date;


$today = new DateTime();
$today->setTimeZone(new DateTimeZone('Asia/Tokyo'));
// $format_date = $today->format('Y/m/d');
// echo $format_date;
echo $today->format('Y/m/d');


class Item {
    public string $name;
    public int $price;

    public function getPrice(string $end = " ") {
        return number_format($this->price).$end;
    }
}

$php_basic = new Item();
$php_basic->name = "PHP入門";
$php_basic->price = 1500;

echo $php_basic->name."/".$php_basic->getPrice("円");