<?php  
interface ItemInterface {
    public function getPrice(): int;
}


class Book implements ItemInterface{
    private int $price;
    public function getPrice(): int {
        return $this->price;
    }
}
class Pencil implements ItemInterface {
    private int $price;
    public function getPrice(): int {
        return $this->price;
    }
}