<?php 
header('X-XSS-Protection:0'); // ai function ar jono chorom auto XSS protection/prevent debana
include_once "function.php";
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
                <h2>user-input sanitization</h2>
                <p>Sanitization = hacking prevent | validation code thik acha kina  </p>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">

            <?php  
            $fname = '';
            $lname = '';
            $checked = '';
          
            
            if (isset($_REQUEST['cb1']) && $_REQUEST['cb1']==1 ){
                $checked = 'checked';
            } 
            
            if (isset($_REQUEST['fname']) && !empty($_REQUEST['fname']) ){
            //    $fname = htmlspecialchars($_REQUEST['fname']);
                $fname = filter_input(INPUT_POST,'fname', FILTER_SANITIZE_STRING); // https://www.php.net/manual/es/filter.filters.sanitize.php
            } 
            
            if (isset($_REQUEST['lname']) && !empty($_REQUEST['lname']) ){
                // $lname = htmlspecialchars($_REQUEST['lname']);
                $lname = filter_input(INPUT_POST,'lname', FILTER_SANITIZE_SPECIAL_CHARS); // https://www.php.net/manual/es/filter.filters.sanitize.php
            }
            
             ?>
            
                <p>
                    First Name: <?php echo $fname; ?> <br/>
                    Last Name: <?php echo $lname; ?> <br/>
                    
                </p>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form method="POST">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname" value="<?php echo $fname?> " >

                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname" value="<?php echo $lname?> " >

                    <div>
                        <input type="checkbox" name="cb1" id="cb1" value="1" <?php echo $checked; ?>
                        >
                        <label for="cb1" class="label-inline">Some Checkbox</label>
                    </div>
                    <label class="label">Select Some Fruits = is that group checkdate</label>

                    <input type="checkbox" name="fruits[]" value="orange" <?php isChecked('fruits', 'orange'); ?>
                    >
                    <label class="label-inline">Orange</label><br/>
                    <input type="checkbox" name="fruits[]" value="mango" <?php isFruitChecked('mango'); ?>>
                    <label class="label-inline">Mango</label><br/>
                    <input type="checkbox" name="fruits[]" value="banana" <?php isFruitChecked('banana'); ?>>
                    <label class="label-inline">Banana</label><br/>
                    <input type="checkbox" name="fruits[]" value="lemon" <?php isFruitChecked('lemon'); ?>>
                    <label class="label-inline">Lemon</label><br/>

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
    <!-- <script>alert('hello');</script> -->

</body>
</html>
