<?php 
echo "西暦を入力してください";
$year = trim(fgets(STDIN));

if (is_numeric($year) && $year <= date('Y')) {
    echo "数字が入力されました。";
    if ($year >= 2018) {
        echo "令和です";
    } elseif ($year >= 1925) {
        echo "昭和です";
    } elseif ($year >= 1911) {
        echo "大正です";
    } elseif ($year >= 1867) {
        echo "明治です";
    } else {
        echo "明治よりも前です";
    }
} else {
    echo "今年よりも前の数字を入力してください";
}