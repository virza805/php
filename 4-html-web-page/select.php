<?php 
header('X-XSS-Protection:0'); // ai function ar jono chorom auto XSS protection/prevent debana
include_once "function.php";

$fruit = ['mango', "orange", "Banana", "apple", "lemon"];
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
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h2>Detailed discussion of select field</h2>
                <p>সিলেক্ট ফিল্ড নিয়ে বিস্তারিত আলোচনা</p>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">

            <?php  
            $fruitsName = '';
            // print_r($_REQUEST);
            if (isset($_REQUEST['fruits']) && !empty($_REQUEST['fruits']) ){
                $fruitsName = filter_input(INPUT_POST,'fruits', FILTER_SANITIZE_STRING); 
                printf("You have selected: %s\n", $fruitsName);
                echo "\n";
            } 
            
            $sfruits = $_POST['mfruits'] ?? array(); // check by null coles operator 
          // $sfruits = filter_input(INPUT_POST, 'mfruits', FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY); // This is sanitize 
            if(count($sfruits)>0){
                echo "You have multiple selected: ".join(", ", $sfruits);
            }
            
             ?>
            
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form method="POST">

                    <label class="label" for="fruits">Select Some Fruits from select field</label>
                    <select name="fruits" id="fruits">
                        <option value="" disabled selected>Select Some Fruits</option>
                        <?php  displayOptions($fruit, $sfruits); ?>
                        
                    </select>

                    <label class="label" for="mfruits">Press Ctrl + Select Multiple Fruits from select field</label>
                    <select style="height:200px;" name="mfruits[]" id="mfruits" multiple>
                        <option value="" disabled selected>Select Some Fruits</option>
                        <?php  displayOptions($fruit, $sfruits); ?>
                        
                    </select>

                    

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
