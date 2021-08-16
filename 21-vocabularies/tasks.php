<?php  
include_once "config.php";

$status = 0;
$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
if(!$connection){
    throw new Exception("Con not connect to database");
}else{
    $action = $_POST['action'] ?? "";
    if('register' == $action){
        $username = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        if($username && $password) {
            $hash = password_hash( $password, PASSWORD_BCRYPT ); // md5 & sha1 ai hash function not strong that time because today pc is very fist.

            $query = "INSERT INTO users(email, password) VALUES ('$username','$hash')";
            mysqli_query($connection, $query);
            if(mysqli_errno($connection)){
                $status = 1;
            }else{
                $status = 3;
            }
           // header('Location: index.php?added=true');
        }else{
            $status = 2;
        }
        header("Location: index.php?status={$status}");
    }else if('register' == $action){
        $username = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        if ($username && $password){
            $query = "SELECT id, password FROM users WHERE email={$username}";
            $result = mysqli_query($connection, $query);
            if(mysqli_num_rows($result)>0){
                $data = mysqli_fetch_assoc($result);
                $_password = $data['password'];
                if(password_verify($password, $_password)){
                    header("Location: words.php");
                    die();
                }else{
                    $status = 4;
                }
            }else{
                $status = 5;
            }
        }else{
            $status = 2;
        }
         header("Location: index.php?status={$status}");
    }
}
mysqli_close($connection);
// https://github.com/LearnWithHasinHayder/PHPCourse/tree/master/voc

