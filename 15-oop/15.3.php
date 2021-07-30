<?php
interface BaseStorage{
    function setFileName($fn);
    function writeData($fn);
    function setMode($fmode);
    // function appendData($dat);
}

class Storage implements BaseStorage{
    private $fn;
    private $mode;
    function __construct($fn, $mode= Null)
    {
        $this->setFileName($fn);
        $this->mode = $mode;
    }

    function setFileName($fn)
    {
        $this->fn = $fn;
    }

    function writeData($data) {
        file_put_contents($this->fn, $data, $this->mode);
    }

    function appendData($dat)
    {
        file_put_contents($this->fn, $data, FILE_APPEND);
    }

    function setMode($fmode)
    {
        return $this->fmode;
    }
}
// class DataManager {
//     function saveData(BaseStorage $filename, $data) {
//         $storage = new Storage($filename);
//         $storage->writeData($data);
//     }
// }
class DataManager {
    function saveData(BaseStorage $storage, $data) {
        $storage->writeData($data);
    }
}

// $dm = new DataManager();
// $dm->saveData("/tmp/abcd.txt", "06 December 1991 is my data Extra");

$file = new Storage("/tmp/abcd.txt");
$file->setMode(FILE_APPEND);
$file->setMode(null);
$dm = new DataManager();
$dm->saveData($file, "5 My Data Extra");

