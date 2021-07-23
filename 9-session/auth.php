<?php
error_reporting(0); // this function use for don't show worring
session_start([
    'cookie_lifetime'=>300 // Log out after 5 minutes
]);
 
$error = false;
// session_destroy();

// 5db85fe4d7c285f5b49749b7a411daf6 = tanvir | ata bar kora hoicha => echo md5("tanvir"); // md5 = massage digest 
// d033e22ae348aeb5660fc2140aec35850c4da997= admin | ata bar kora hoicha => echo sha1("admin");
// 6d6949480c940dc122915bed8f0878cabd1af191 = tanvir | ata bar kora hoicha => echo sha1("tanvir");

$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
$fp = fopen("data/users.txt","r");
if($username && $password){
    $_SESSION['loggedin'] = false;
    $_SESSION['user'] = false;
    $_SESSION['role'] = false;
    while ($data = fgetcsv($fp)) {
        if( $data[0] == $username && $data[1] == sha1($password)){
            $_SESSION['loggedin'] = true;
            $_SESSION['user'] = $username;
            $_SESSION['role'] = $data[2];
            header('location:index.php');
        }
    }
    if(!$_SESSION['loggedin']){
        $error = true;
    }
}

if(isset($_GET['logout'])){
    $_SESSION['loggedin'] = false;
    $_SESSION['user'] = false;
    $_SESSION['role'] = false;
    session_destroy();
    header('location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>9 Session</title>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Style CSS -->
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">

    <!-- CSS Reset https://necolas.github.io/normalize.css/ -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">

    <!-- Milligram CSS https://milligram.io/ -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">

    <!-- You should properly set the path from the main file. -->
    <link rel="stylesheet" href="style.css">
    <!-- php.local.com c:\windows\system32\drivers\etc\hosts -->
    
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h2>Simple Auth Example</h2>
                <?php
                // if (isset($_SESSION['loggedin'])){
                    if(true == $_SESSION['loggedin']){
                        echo "Hello Admin, Welcome";
                    }else{
                        echo "hello Stranger, Login Below";
                    }
               // }
                 ?>
                
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <?php  
                if($error){
                    echo "<blockquote>Username or Password didn't match</blockquote>";
                }
                if(false == $_SESSION['loggedin']):
                 ?>
                
                <form method="POST" action="">
                    <label for="username">User Name</label>
                    <input type="text" name="username" id="username">

                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">

                    <button type="submit">Log In</button>
                </form>
                <?php  
                else:
                 ?>
                <form method="POST" action="auth.php">
                    <input type="hidden" name="logout" value="1">
                    <button type="submit">Log Out</button>
                </form>

                <?php endif; ?>
                
            </div>
        </div>
    </div>
    <!-- cd 9-session -->
    <!-- php -S localhost:3030 -->
    <!-- http://localhost:3030/9-session/auth.php -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

</body>
</html>
