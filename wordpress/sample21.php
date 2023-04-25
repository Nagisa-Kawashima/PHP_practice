<?php  
$book = new stdClass();
$book->name = "php入門";
$book->price = 1500;

echo $book->name;

$book = [
    "name" => "php入門",
    "price" => 1500
];

echo $book["name"];



trait Tax {
    public function getTax(): int {
        return 10;
    }
}

trait ForeignTax {

    public function getTax(): int {
        return 20;
    }
}

class Item {
    use Tax, ForeignTax {
        Tax::getTax insteadOf ForeignTax;
        Foreigntax::getTax as getForeignTax;
    }
    private int $price;


   
}

class Service {
    use Tax;
    private int $service_price;
}

$item = new Item;
echo $item->getTax(), "\n";
echo $item->getForeignTax(), "\n";


$service = new Service;
echo $service->getTax(), "\n";
