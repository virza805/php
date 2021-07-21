<?php  
include_once "s-function.php";

$task = 'encode';
if (isset($_GET['task']) && $_GET['task']!='') {
    $task = $_GET['task'];
} //this is alter native way in php7 =>  $task = $_GET['task'] ?? 'encode';


$key = 'abcdefghijklmnopqrstuvwxyz1234567890';
if ('key'== $task) {
    $key_original = str_split($key);
    shuffle($key_original);
    $key = join('',$key_original);
}elseif(isset($_POST['key']) && $_POST['key']!=''){
    $key = $_POST['key'];
}

$scrambledData = '';
if ('encode' == $task) {
    $data = $_POST['data']??'';
    if ($data !='') {
        $scrambledData = scrambleData($data, $key);
    }
}

if ('decode' == $task) {
    $data = $_POST['data']??'';
    if ($data !='') {
        $scrambledData = decodeData($data, $key);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>5 project data scrambler</title>
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
                <h2>Class = 5 Project for Data Scrambler</h2>
                <p>Use this application to scrambler your data</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row navbar">
            <div class="column column-60 column-offset-20">
                <ul>
                    <li><a href="/index.php?task=encode">Encode</a></li>
                    <li><a href="/index.php?task=decode">Decode</a></li>
                    <li><a href="/index.php?task=key">Generate Key</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form method="POST" action="index.php<?php if('decode' == $task){echo "?task=decode"; } ?>">
                    <label for="key">Key</label>
                    <input type="text" name="key" id="key" <?php displayKey($key); ?>
                     >

                    <label for="data">Data</label>
                    <textarea name="data" id="data" cols="30" rows="10"><?php if(isset($_POST['data'])){ echo $_POST['data']; } ?></textarea>

                    <label for="result">Result</label>
                    <textarea name="result" id="result" cols="30" rows="10"><?php echo $scrambledData; ?></textarea>

                    <button type="submit">Do It For Me</button>

                </form>
            </div>
        </div>
    </div>
    <!-- cd 5-project-data-scrambler -->
    <!-- php -S localhost:3030 -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

</body>
</html>
