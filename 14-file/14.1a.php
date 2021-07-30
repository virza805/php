<?php  
class Dir{
    private $directories=[];
    private $files=[];
    private $path;
    function __construct($path)
    {
        if(is_readable($path)){
            $this->path = $path;
            $entries = scandir($path);
            foreach($entries as $entry){
                if("."!=$entry && ".." != $entry){
                    if(is_dir($path.DIRECTORY_SEPARATOR.$entry)){
                        array_push($this->directories, $entry);
                    } else{
                        array_push($this->files, $entry);
                    }
                }
            }
        }
    }

    // for show every directories
    function getDirectory($index) {
        if(isset($this->directories[$index])){
            echo "set";
            return new Dir($this->path.DIRECTORY_SEPARATOR.$this->directories[$index]);
        }else{
             throw new Exception("directory doesn't exist");
           // echo "directory doesn't exist";
        }
        return false;
    }

    function getDirectories(){
        return $this->directories;
    }

    function getFiles(){
        return $this->files;
    }
}

$directory = new Dir(getcwd());
print_r($directory->getDirectories()); // show Directories
print_r($directory->getFiles()); // show file

// now i wont to access every Directories
$oop = $directory->getDirectory(3);
print_r($oop->getDirectories());

$foundation = $oop->getDirectory(1);
print_r($foundation->getFiles());


