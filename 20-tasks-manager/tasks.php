<?php  
include_once "config.php";
$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
if(!$connection){
    throw new Exception("Con not connect to database");
}else{
    $action = $_POST['action'] ?? "";
    if(! $action){
        header('Location: index.php');
        die();
    }else{
        if('add' == $action){
            // insert record
            $task = $_POST['task'];
            $date = $_POST['date'];
            if($task && $date) {
                $query = "INSERT INTO task (task,date) VALUES ('{$task}','{$date}')";
                mysqli_query($connection,$query);
                header('Location: index.php?added=true');
            }
        }else if('complete'== $action){
            $taskid = $_POST['taskid'];
            if($taskid){
                $query = "UPDATE task SET complete=1 WHERE id={$taskid} LIMIT 1";
                mysqli_query($connection, $query);
            }
            header('Location: index.php');
        }else if('delete'== $action){
            $taskid = $_POST['taskid'];
            if($taskid){
                $query = "DELETE FROM task WHERE id={$taskid} LIMIT 1";
                mysqli_query($connection, $query);
            }
            header('Location: index.php');
        }else if('incomplete'== $action){
            $taskid = $_POST['taskid'];
            if($taskid){
                $query = "UPDATE task SET complete=0 WHERE id={$taskid} LIMIT 1";
                mysqli_query($connection, $query);
            }
            header('Location: index.php');
        }else if('bulkcomplete'== $action){
            $taskids = $_POST['taskids'];
            $_taskids = join(",", $taskids);
           // print_r($taskids);
            if($taskids){
                $query = "UPDATE task SET complete=1 WHERE id in ($_taskids)";
               // echo $query;
               mysqli_query($connection, $query);
            }
           header('Location: index.php');
        }else if('bulkdelete'== $action){
            $taskids = $_POST['taskids'];
            $_taskids = join(",", $taskids);
           // print_r($taskids);
            if($taskids){
                $query = "DELETE FROM task WHERE id in ($_taskids)";
               // echo $query;
               mysqli_query($connection, $query);
            }
           header('Location: index.php');
        }
    }
}
mysqli_close($connection);

