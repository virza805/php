<?php  
// Silence is golden.
// include_once "config.php";
// if($_user_id){
//     header('Location: words.php');
//     die();
// }
include_once "function.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Silence is golden.</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">

    <!-- CSS Reset -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">

    <!-- Milligram CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">

    <!-- You should properly set the path from the main file. -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">

    <style>
.t-center {
    text-align: center;
}
h1.maintitle.t-center {
    font-weight: 700;
    color: #22962b;
}


    </style>
</head>
<body class="home">
    <div class="container" id="main">
        <h1 class="maintitle t-center"><i class="fa fa-language"></i> <br> My Vocabularias</h1>
        <h5 class="maintitle t-center">Max Mega Menu By megamenu.com use this</h5>
        <h6 class="maintitle t-center">WP Mega Menu By Themeum</h6>
    </div>
    <div class="row navigation">
        <div class="column column-60 column-offset-20">
            <div class="formaction t-center">
                <a href="#" id="login">Login</a> | <a href="#" id="register">Register Account</a>
            </div>
            <div class="form">
                <form action="tasks.php" method="post" id="form01">
                    <h3>Login</h3>
                    <fieldset>
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" placeholder="Email Address">

                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Password">

                        <p>
                            <?php  
                            $status = $_GET['status'] ?? 0;
                            if($status) {
                                echo getStatusMessage($status);
                            }
                             ?>
                            
                        </p>
                        <input type="submit" value="Submit" class="button-primary">
                        <input type="hidden" name="action" id="action" value="login">
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
    <script src="script.js"></script>
</body>
</html>


