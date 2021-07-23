<?php  
$fileName = "e:\\Working Develop\\php\\7-file\\data\\f2.txt"; // for windows pc
$existingData = file_get_contents($fileName); // existing data read kora
if(is_writable($fileName)){ // check for writable
 $fp = fopen($fileName, 'w'); // file write for 'w'
// $fp = fopen($fileName, 'a'); // file apend for 'a' existing data save then write new data
// fwrite($fp, "Mercury\n");
fwrite($fp, $existingData); // existing data new write
fwrite($fp, "Afroza\n");
fwrite($fp, "Tanvir\n");
fwrite($fp, "VirZa\n");
fwrite($fp, "virza\n");

fclose($fp);

}