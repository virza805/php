<?php
require_once "inc/function.php";
$info = '';
$task = $_GET['task'] ?? 'report';
$error = $_GET['error'] ?? '0';

if('delete' == $task){
    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
    if($id>0){
        deleteStudent($id);
    }
}

if('seed' == $task){
    seed();
    $info = "Seeding is complete";
}
   
    $fname  = '';
    $lname  = '';
    $age    = '';
    $roll   = '';
    $class  = '';
if (isset( $_POST['submit'] )) {
    $fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
    $lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING);
    $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_STRING);
    $roll = filter_input(INPUT_POST, 'roll', FILTER_SANITIZE_STRING);
    $class = filter_input(INPUT_POST, 'class', FILTER_SANITIZE_STRING);
    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);

    if($id){
        // Update the existing student
        if($fname !='' && $lname !='' && $age !='' && $roll !='' && $class !=''){
           $result = updateStudent($id, $fname, $lname, $age, $roll, $class);
            if($result){
                header('location:/8-CRUD/index.php?task=report');
            }else{
                $error = 1;
            }
        }

    }else{
        // add a new student
        if($fname!='' && $lname!='' && $age!='' && $roll!='' && $class!=''){
            $result = addStudent($fname, $lname, $age, $roll, $class);
            if($result){
                header('location:/8-CRUD/index.php?task=report');
            }else{
                $error = 1;
            }
        }
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>8 project-2 CRUD </title>
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
    <link rel="stylesheet" href="/8-CRUD/inc/style.css">
    
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h2>Class = 8 Project-2 for CRUD</h2>
                <p>A sample project to perform CRUD operations using plain files and PHP</p>
            </div>
        </div>
    </div>
    <div class="container">
        
        <?php  include_once ('inc/templates/nav.php'); ?>
        
        <div class="row navbar">
            <div class="column column-60 column-offset-20">
               <?php  
               if($info!=''){
                   echo "<h2>{$info}</h2> ";
               }
               ?>
               
            </div>
        </div>
<!-- add students error Massage Start Now -->
        <?php if('1' == $error ) : ?>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <blockquote>
                    Duplicate Roll Number
                </blockquote>
            </div>
        </div>
        <?php endif; ?>
<!-- add students error Massage The End -->
<!-- show all students Start Now -->
        <?php if('report' == $task): ?>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <?php generateReport(); ?>
            </div>
        </div>
        <?php endif; ?>
<!-- show all students The End -->
<!-- Add New Students Start Now -->
        <?php if('add' == $task): ?>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form method="POST" action="/8-CRUD/index.php?task=add">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname" value="<?php echo $fname; ?>">

                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname" value="<?php echo $lname; ?>">

                    <label for="age">Age</label>
                    <input type="number" name="age" id="age" value="<?php echo $age; ?>">

                    <label for="class">Class</label>
                    <input type="number" name="class" id="class" value="<?php echo $class; ?>">

                    <label for="roll">roll</label>
                    <input type="number" name="roll" id="roll" value="<?php echo $roll; ?>">

                    <button type="submit" name="submit">Save</button>

                </form>
            </div>
        </div>
        <?php endif; ?>
<!-- Add New Students The End -->
<!-- Edit Students Start Now -->
        <?php if('edit' == $task) : 
            $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
            $student = getStudent( $id );
            if($student):
        ?>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form method="POST" >
                    <input type="hidden" name="id" value="<?php echo $id; ?>">    

                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname" value="<?php echo $student['fname']; ?>">

                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname" value="<?php echo $student['lname']; ?>">

                    <label for="age">Age</label>
                    <input type="number" name="age" id="age" value="<?php echo $student['age']; ?>">

                    <label for="class">Class</label>
                    <input type="number" name="class" id="class" value="<?php echo $student['class']; ?>">

                    <label for="roll">roll</label>
                    <input type="number" name="roll" id="roll" value="<?php echo $student['roll']; ?>">

                    <button type="submit" name="submit">Update</button>

                </form>
            </div>
        </div>
        <?php 
        endif; 
    endif; 
    ?>
<!-- Edit Students The End -->

    </div>
    <!-- cd 8-CRUD -->
    <!-- php -S localhost:3030 -->
    <!-- http://localhost:3030/8-CRUD -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

</body>
</html>
