<?php 
/*
SOLID principle
S = Single Responsibility Principle
O = Open/Close Principle | Open for Extension & Close for Modification
L = Liskov Substitution Principle short from "LSP"
I = Interface Segregation Principle
D = Dependency Inversion Principle

*/

# SOLID principle
# S = Single Responsibility Principle

#=# According to SOLID this is Wrong way
// class Student { // akta modha sub na rakha 
//     function checkAttendencae(){}
//     function calculateGrade(){}
//     function collectFee(){}
// }

#=# According to SOLID this is Wrong way
// protack tar jono alada kora
class GradeCalculator{}
class Attendence{}
class StudentPayments{}
#===========================================#


# SOLID principle // => video 15.7
# O = Open/Close Principle | Open for Extension & Close for Modification

#=# According to SOLID this is Wrong way
// class FileDisplay {
//     function display($file, $fileType){
//         if('mp4' == $fileType){
//             // display video player
//         }elseif('mp3' == $fileType){
//             // display audio player
//         }else{
//             // display text file
//         }
//     }
// }

#=# According to SOLID this is Right way
class FileDisplay{
    function display(FileInterface $file){
        $file->display();
    }
}

interface FileInterface{
    function display();
}

class ImageFile implements FileInterface{
    function display(){
        // take necessary steps to display image
    }
}

class VideoFile implements FileInterface{
    function display(){
        // take necessary steps to display video play
    }
}
class AudioFile implements FileInterface{
    function display(){
        // take necessary steps to display audio play
    }
}

$image = new ImageFile("abcd.jpg");
$video = new ImageFile("abcd.mp4");
$audio = new ImageFile("abcd.mp3");
$fd = new FileDisplay();

$fd->display($image);
$fd->display($video);
$fd->display($audio);


# SOLID principle // => video 15.8
# L = Liskov Substitution Principle short from "LSP"

#=# According to SOLID this is Wrong way
// abstract class Bird {
//     abstract function eat();
//     abstract function sleep();
//     abstract function fly();
// }

// class BirdManager {
//     function maintainBird(Bird $b) {
//         $b->eat();
//         $b->sleep();
//         $b->fly();
//     }
// }

// class Eagle extends Bird {
//     function eat(){

//     }
//     function sleep(){

//     }
//     function fly(){
        
//     }
// }
// class Penguin extends Bird {
//     function eat(){

//     }
//     function sleep(){

//     }
//     function fly(){

//     }
// }
#=# According to SOLID this is Right way
abstract class Bird {
    abstract function eat();
    abstract function sleep();
    
}
abstract class FlyingBird extends Bird{
    abstract function fly();
}
abstract class WalkingBird extends Bird{
    abstract function walk();
}

class BirdManager {
    function maintainBird(Bird $b) {
        $b->eat();
        $b->sleep();
    }

    function moveFlyingBird(FlyingBird $fb){
        $fb->fly();
    }
    function moveWalkingBird(WalkingBird $fb){
        $fb->walk();
    }
}

class Eagle extends Bird {
    function eat(){

    }
    function sleep(){

    }
    function fly(){
        
    }
}
class Penguin extends Bird {
    function eat(){

    }
    function sleep(){

    }
    function fly(){

    }
}

# SOLID principle // => video 15.9
# I = Interface Segregation Principle

#=# According to SOLID this is Wrong way
// interface Vehicle {
//     function hasTwoTires();
//     function hasFourTires();
//     function hasSixTires();
//     function isDieselCompatible();
//     function isPetrolCompatible();
//     function getMileage();
// }

// class MotorCycle implements Vehicle {
    
// }

// class Truck implements Vehicle {

// }
#=# According to SOLID this is Right way
interface Vehicle {
    function hasTwoTires();
    function hasFourTires();
    function hasSixTires();
    function isDieselCompatible();
    function isPetrolCompatible();
    function getMileage();
}

class MotorCycle implements Vehicle {
    
}

class Truck implements Vehicle {

}


# SOLID principle // => video 15.11
# D = Dependency Inversion Principle | IOC

#=# According to SOLID this is Wrong way

#=# According to SOLID this is Right way



