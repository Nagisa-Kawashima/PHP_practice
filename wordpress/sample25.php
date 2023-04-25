<?php 

$items = [
    ["php入門", 1500],
    ["js入門", 2300],
    ["python入門", 2000]
];

$file = new SplFileObject("data/items.csv", "w");

foreach ($items as $item) {
    $file->fputcsv($item);
}
// $file->fputcsv($items);

