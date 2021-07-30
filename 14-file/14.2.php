<?php 
// mkdir("folderName,http://permissions-calculator.org/, permission")
mkdir("test",0777,true); // read=4, write = 2, Execute=1 => for create folder
file_put_contents("test/f.txt","hello Tonni How are YOU?"); // => for create folder in file
sleep(20); // stay time 20 second 
// unlink("test/f.txt"); // => for delete file
// rmdir("test");
deleteDir(getcwd().DIRECTORY_SEPARATOR."test"); // => for delete folder
function deleteDir($path){
    $filesInPath = scandir($path);
    if(count(scandir($path))>2){
        foreach ($filesInPath as $file){
            if ("." != $file && ".." != $file) {
                $filePath = $path.DIRECTORY_SEPARATOR.$file;
                unlink($filePath);
            }
        }
    }
    rmdir($path);
}

