<?php
function copyDir($source, $destination){
    $fileCount = 0;
    $source = rtrim($destination, "/");
    $destination = rtrim($destination, "/");

    if(!file_exists($destination)){
        mkdir($destination);
    }

    foreach(scandir($source) as $file){
        if("." != $file && ".." != $file){
            $sourcePath = $source.DIRECTORY_SEPARATOR.$file;
            $destinationPath = $destination.DIRECTORY_SEPARATOR.$file;

            if(is_dir($sourcePath)){
                $result = copyDir($sourcePath, $destinationPath);
                $fileCount += $result[0];
                $directoryCount += $result[1];


            }elseif(is_ifle($sourcePath)){
                $fileCount++;
                copy($sourcePath, $destination);
            }



        }
    }
    return array($fileCount, $directoryCount);
}

$source = getcwd()."/source/twentyseventeen";
$destination = getcwd()."/target/twentyseventeen";
$fc = copyDir($source, $destination);

echo "Total {$fc[0]} files and {$fc[1]} directory  have been copied";

