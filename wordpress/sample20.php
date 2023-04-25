<?php 

abstract class Item {
    private $price;
    

    public function getPrice() {
        return $this->price;
    }

    abstract public function getUnit();
}

class Book extends Item {
    public function getUnit() {
        return "冊";
    }
}

class pen extends Item {
    public function getUnit() {
        return "本";
    }
}


$book = new Book();
$book->getPrice();


