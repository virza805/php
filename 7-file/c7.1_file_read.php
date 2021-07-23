<?php 
// $fileName = "/e/Working Develop/php/data/f1.txt"; // for  make pc 
$fileName = "e:\\Working Develop\\php\\7-file\\data\\f1.txt"; // for windows pc
if(is_readable($fileName)){
    $fp = fopen($fileName, 'r'); // file read for 'r'
    // $line = fgets($fp); // single line read kora;
    // echo $line;
    // $lin = fgets($fp);
    // echo $lin;

    // all line read method
    while ($line = fgets($fp)) {
        echo $line;
    }
    rewind($fp); // abar 1st a jaba
    fseek($fp, -1, SEEK_END);
    while ($line = fgets($fp,4)) {
        echo $line."-";
    }

    fclose($fp);
    echo PHP_EOL."===== ### =====".PHP_EOL;
    // akbara file read korarjon 
    $data = file($fileName);
    echo $data[2];
    print_r($data);

    // another way for all file read
    echo PHP_EOL;
    $datas = file_get_contents($fileName);
    // print_r($datas);
    echo $datas;

}