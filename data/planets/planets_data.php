<?php
    $data=[];
    $file_path = 'dataplanets/planet2.txt';
    $content = "Це зміст нового файлу.";
    $f = fopen('/dataplanets/planet2.txt', 'r');

    if ($f) {
        $grStr = fgets($f);
        $grArr = explode(";", $grStr);
        fclose($f);

        $data['planet'] = [
            'name' => $grArr[0],
            'about' => $grArr[1],
            'volume' => $grArr[2],
            'distance' => $grArr[3],
            'satellite' => $grArr[4],
            'day_time' => $grArr[5],
        ];
    } else {
        echo "Помилка: файл не може бути відкритий.";
    }
?>
