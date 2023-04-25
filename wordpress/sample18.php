<?php 


class Item {
    // public int $unit
    protected int $unit;
    public function __construct( int $unit) {
        $this->unit = $unit;
    }

    public function getUnit(): string {
        return $this->unit."個";
    }
}


class Book extends Item {
    private int $page;

    public function __construct(int $unit, int $page) {
        // $this->unit = $unit;
        parent::__construct($unit);
        $this->page = $page;
    }
    public function getUnit(): string {
        return $this->unit."冊";
    }
}
$eraser = new Item(10);
echo $eraser->getUnit()."\n";

$book = new Book(5, 120);
echo $book->getUnit();