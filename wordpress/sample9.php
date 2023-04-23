<?php 
function  make_list($list, $head = "・") {
    foreach ($list as $key => $val) {
        echo $head, $key, ": ", $val, "\n";
    }

}
$pref = [
    "hokkaido" => "北海道",
    "aomori" => "青森",
    "iwate" => "岩手県"
];
make_list($pref, "→");
make_list($pref, "ほげ");
make_list($pref);


