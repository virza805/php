<?php 
// mkdir("folderName,http://permissions-calculator.org/, permission")
mkdir("test/d1/d2/d3",0777,true); //=> for create folder
file_put_contents("test/f.txt","hello Tonny How are YOU?"); // => for create folder in file
file_put_contents("test/d1/f.txt","hello Afroza");
file_put_contents("test/d1/d2/f.txt","virza");
file_put_contents("test/d1/f1.txt","hello Tanvir");


sleep(30); // stay time 30 second
deleteDir(getcwd().DIRECTORY_SEPARATOR."test"); // => for delete folder
function deleteDir($path){
    if(!is_readable($path)){
        return;
    }
    $filesInPath = scandir($path);
    if(count(scandir($path))>2){
        foreach ($filesInPath as $file){
            if ("." != $file && ".." != $file) {
                $filePath = $path.DIRECTORY_SEPARATOR.$file;
                if(is_dir($filePath)){
                    DeleteDir($filePath);
                }else{
                    unlink($filePath);
                }
            }
        }
    }
    rmdir($path);
}

