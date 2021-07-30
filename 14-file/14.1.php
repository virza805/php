<?php  
// # How to read file directory 
// read directory 2 way 
// 1st way

$entries = scandir(getcwd());
// print_r($entries);
// how to defind file & directory
foreach($entries as $entry){
    if("."!=$entry && ".." != $entry){
        if(is_dir($entry)){
            echo "[d] {$entry}\n";
        } else{
            echo "[f] {$entry}\n";
        }
    }
}

function countDir($dir){
    $count = 0;
    $entries = scandir($dir);
    foreach($entries as $entry) {
        if("."!=$entry && ".." != $entry){
            if(is_dir($entry)){
                $count++;
            }
        }
    }
}
echo countDir(getcwd());

// 2nd way
$entries = opendir(getcwd());
while(false !== ($entry = readdir($entries))){
    echo $entry .PHP_EOL;
}
