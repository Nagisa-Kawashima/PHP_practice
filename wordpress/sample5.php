<?php
$color = ["黒", "白", "黄", "赤"];
// print_r($color);

// echo $color[0];
// echo "\n";
// echo $color[1];
// echo "\n";
// echo $color[2];
// echo "\n";


for ($i = 0; $i < count($color); $i++) {
    // echo $color[$i];
    // echo "\n";
    echo '.', $color[$i], "\n";
}


$pref = [
    "hokkaido" => "北海道",
    "aomori" => "青森県",
    "iwate" => "岩手県"

];
foreach ($pref as $pref_key => $pref_name) {
    // echo "-", $pref_name, "\n";
    echo "-".$pref_key. ": ".$pref_name."\n";
}

$q1 = 5;
$q2 = 10;

echo $q1."+".$q2."は? >";
$answer = (int)trim(fgets(STDIN));

while ($answer !== $q1 + $q2) {
    echo "はずれ。もう一回 >";
    $answer = (int)trim(fgets(STDIN));


}
echo "あたり！";