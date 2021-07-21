<?php 
header('X-XSS-Protection:0'); // ai function ar jono chorom auto XSS protection/prevent debana
// This is sanitization for prevent hacker 
$allowedTypes = array(
    'image/png',
    'image/jpg',
    'image/jpeg'
);
if($_FILES['photo']){
    if ( in_array($_FILES['photo']['type'], $allowedTypes) !== false && $_FILES['photo']['size']<5*1024*1024 ) { // $_FILES['photo']['size']<5*1024*1024 === file size 5mb Max
        move_uploaded_file($_FILES['photo']['tmp_name'], "img/".$_FILES['photo']['name']);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>4 html web page</title>
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
        <div class="row navbar">
            <div class="column column-60 column-offset-20">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="from.php">From</a></li>
                    <li><a href="from1.php">From 1</a></li>
                    <li><a href="select.php">Select</a></li>
                    <li><a href="file.php">File</a></li>
                    <li><a href="files.php">Files</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h2>Detailed discussion of File Upload <i class="fa fa-upload" aria-hidden="true"></i> field</h2>
                <p>৪.৬ - পিএইচপিতে ফাইল আপলোড ম্যানেজ করা</p>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <pre>
                    <p>
                        <?php 
                        print_r($_REQUEST);
                        print_r($_FILES);
                         ?>
                        
                    </p>
                </pre>
                <p>
                    <?php if (isset($_GET['fname']) && !empty($_GET['fname']) ): ?>
                        First Name: <?php echo $_GET['fname']; ?> <br/>
                    <?php endif; ?>

                    <?php

                    if (isset($_REQUEST['lname']) && !empty($_REQUEST['lname']) ){ ?>
                        Last Name: <?php echo $_REQUEST['lname']; ?> <br/>
                    <?php } ?>
                    
                        
                    
                </p>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname">

                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname">

                    <label for="photo">Photo</label>
                    <input type="file" name="photo" id="photo"><br/>

                    <button type="submit">Submit</button>

                </form>
            </div>
        </div>
    </div>
    <!-- cd 4-html-web-page -->
    <!-- php -S localhost:3030 -->
    <!-- php -S php.local.com:3030 -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

</body>
</html>
