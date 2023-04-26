<?php 

$file = new SplFileObject('data/items.csv');
// $item = $file->fgetcsv();


while ($file->eof() === false) {
    $item = $file->fgetcsv();
    echo $item[0],"\n";
    // echo $item[1];
}

$file->setFlags(SplFileObject::READ_CSV);
foreach ($file as $item) {
    echo $item[1], "\n";
    echo $item[0], "\n";
}


