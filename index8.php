<?php
class Item
{
    private $price;
    public static $tax = 0.1;
    public function __construct($price)
    {
        $this->price = $price;
    }

    public function getTotalPrice()
    {
        return $this->price * self::$tax;
    }
}


$pen = new Item(100);
$note = new Item(120);

// echo $pen->price;
// echo $note->price;
echo $pen->getTotalPrice();
echo $note->getTotalPrice();