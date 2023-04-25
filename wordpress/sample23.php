<?php   

class Item  {
//     public string $name;
//     public int $price;
    public  static int $tax = 10;
    public static function getTax(): int {
        // return $this->tax;
        return self::$tax;
        // return 10;
    }
}

// $item = new Item();
// echo $item->getTax();

// echo Item::getTax();
echo Item::$tax, "\n";
Item::$tax = 8;

$item02 = new Item();
echo $item02->getTax();



// public function __construct($name, $price) {
// public function __construct($name, $price) {
//     $this->name = $name;
//     $this->price = $price;
// }

// public function __toString() {
//     return $this->name.'/'.number_format($this->price)."円";
// }


// $item = new Item("php入門", 1500);
// echo $item;