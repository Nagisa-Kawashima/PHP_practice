<?php  


try {
    $file = new SplFileObject("notfound/log.txt", "w");

} catch (Exception $exception) {
    // echo "ファイルを作成出来ませんでした";
    // exit();
    die("ファイルを作成できませんでした");
}

$file->fwrite("ログです");


