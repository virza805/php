<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP to JavaScript</title>
</head>
<body>
    <h4>PHP to JavaScript</h4>
    <input type="button" id="button" value="Show Something">
</body>

<script>
    <?php 
    $data = array(
        "firstname"=>"Tanvir",
        "lastname"=>"Hasan",
        "email"=>"01mdalamin1@gmail.com",
    );
    ?>

    let data = <?php echo json_encode($data); ?>;

    document.getElementById("button").addEventListener("click", function(){
        alert(data.email);
        console.log(data);
    });
</script>
</html>