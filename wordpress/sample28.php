<?php  
$items = [
    [
        "name" => "php入門",
        "price" => 1500

    ],
    [
        "name" => "js入門",
        "price" => 2000
    ],
    [
        "name" => "python入門",
        "price" => 1800
    ]

];

$json = json_encode($items, JSON_UNESCAPED_UNICODE);

file_put_contents("data/items.json", $json);


$json = file_get_contents("data/items.json");
$items = json_decode($json);
print_r($items);
// echo $json;


