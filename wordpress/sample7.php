<?php 
$scores = [];
do {
    echo "点数を入力";

    $score = (int)trim(fgets(STDIN));
    if ($score === -1) {
        break;
    }

    array_push($scores, $score);
    $sum = 0;

    for ($i = 0; $i < count($scores); $i++) {
        // echo $scores[$i], "\n";
        echo $i + 1,".",$scores[$i], "\n";
        $sum += $scores[$i];
    }
    echo "合計:", $sum, "\n";
    $avg = $sum / count($scores);
    echo "平均:", $avg, "\n";
} while(true);

