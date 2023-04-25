<?php

class Item {
    public string $name;
    private int $price;
    // public int $page;


    public function __construct(string $name, int $price=0) {
        $this->name = $name;
        $this->price = $price;
    }
    public function getPrice(string $end = " ") {
        return number_format($this->price).$end;
    }

    public function setPrice(int $price) {
        if ($price < 0) {
            return false;
        }

        $this->price = $price;
        return true;
    }
}


class Book  extends Item{
    public int $page;
}

$php_basic = new Book("php入門", 2300);
// $php_basic->price = -100;
$php_basic->page = 200;
$php_basic->setPrice(100);
// $php_basic->name = "PHP入門";
// $php_basic->price = 1500;

echo $php_basic->name."(".$php_basic->page."ページ)"."/".$php_basic->getPrice("円");


