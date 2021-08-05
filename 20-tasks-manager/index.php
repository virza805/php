<?php  
include_once "config.php";
$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
if(!$connection){
    throw new Exception("Con not connect to database");
}
$query = "SELECT * FROM task WHERE complete = 0 ORDER BY date";
$result = mysqli_query($connection, $query);

$completeTasksQuery = "SELECT * FROM task WHERE complete = 1 ORDER BY date";
$resultCompleteTasks = mysqli_query($connection, $completeTasksQuery);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Task Management project </title>
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- You should properly set the path from the main file. -->
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h2>Class = 20 Project | <i class="fa fa-angle-right fa-1x"></i> Task Management</h2>
                <p>A sample Task Management project to perform CRUD operations using MySQL</p>
            </div>
        </div>
    </div>
    <div class="container" id="main">
        
        <div class="row">
            <div class="column column-60 column-offset-20">
            <?php
                if (mysqli_num_rows($resultCompleteTasks) > 0){
                    
                    echo "<h4>Complete Tasks</h4>";
                    echo "
                    <table>
                        <thead>
                            <tr>
                                <th></th>
                                <th>Id</th>
                                <th>Task</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                    ";
                    while($cdata = mysqli_fetch_assoc($resultCompleteTasks)){
                        $timestamp = strtotime($cdata['date']);
                        $cdate = date("jS M Y", $timestamp);
                        ?>
                            <tr>
                                <td><input type="checkbox" class="label-inline" value="<?php echo $cdata['id']; ?>"></td>
                                <td><?php echo $cdata['id']; ?>
                                </td>
                                <td><?php echo $cdata['task']; ?></td>
                                <td><?php echo $cdate; ?></td>
                                <td><a class="delete" data-taskid="<?php echo $cdata['id']; ?>" href="#">Delete</a> | <a class="incomplete" data-taskid="<?php echo $cdata['id']; ?>" href="#">Mark Incomplete</a></td>
                            </tr>
                        <?php
                    }
                    echo "
                    
                        </tbody>
                    </table>
                    ";
                }
                ?>
                
                <?php
                if (mysqli_num_rows($result) == 0){
                    echo "<p>No Task Found</p>";
                }else{
                 ?>
                 <form action="tasks.php" method="POST">
                 <h4>Upcoming Tasks</h4>
                    <table>
                        <thead>
                            <tr>
                                <th></th>
                                <th>Id</th>
                                <th>Task</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php  
                            while($data = mysqli_fetch_assoc($result)){
                                $timestamp = strtotime($data['date']);
                                $date = date("jS M Y", $timestamp);
                            ?>
                            
                            <tr>
                                <td><input name="taskids[]" type="checkbox" class="label-inline" value="<?php echo $data['id']; ?>"></td>
                                <td><?php echo $data['id']; ?>
                                </td>
                                <td><?php echo $data['task']; ?></td>
                                <td><?php echo $date; ?></td>
                                <td><a class="delete" data-taskid="<?php echo $data['id']; ?>" href="#">Delete</a>  || <a data-taskid="<?php echo $data['id']; ?>" class="complete" href="#">Complete</a></td>
                            </tr>
                            <?php 
                            }
                            mysqli_close($connection);
                            ?>
                        </tbody>
                    </table>

                    <select name="action" id="action">
                        <option value="0">With Selected</option>
                        <option value="bulkdelete">Delete</option>
                        <option value="bulkcomplete">Mark As Complete</option>
                    </select>
                    <input class="button-primary" id="bulksubmit" type="submit" value="Submit">
                </form>
                <?php 
                }
                 ?>
                
                <p>... .. .</p>
                <h4>Add Tasks</h4>
                <form method="post" action="tasks.php">
                    <fieldset>
                        <?php 
                        $added = $_GET['added'] ?? "";
                        if($added){
                            echo 'Task Successfully Added';
                        }
                         ?>
                        
                        <label for="task">Task</label>
                        <input type="text" name="task" id="task" placeholder="Task Details">
                        <label for="date">Date</label>
                        <input type="date" name="date" id="date">

                        <input class="button-primary" type="submit" value="Add Task">
                        <input type="hidden" name="action" value="add">
                    </fieldset>
                </form>
            </div>
        </div>
<!-- add students error Massage The End -->
    </div>
    <form action="tasks.php" method="post" id="completeform">
        <input type="hidden" id="caction" name="action" value="complete">
        <input type="hidden" id="taskid" name="taskid">
    </form>
    <form action="tasks.php" method="post" id="deleteform">
        <input type="hidden" name="action" value="delete">
        <input type="hidden" id="dtaskid" name="taskid">
    </form>
    <form action="tasks.php" method="post" id="incompleteform">
        <input type="hidden" id="caction" name="action" value="incomplete">
        <input type="hidden" id="itaskid" name="taskid">
    </form>




    <!-- cd 20-tasks-manager -->
    <!-- php -S localhost:3030 -->
    <!-- http://localhost:3030/20-tasks-manager -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
    <script>
        ;(function($){
            $(document).ready(function(){
                $(".complete").on('click',function(){
                    var id = $(this).data("taskid");
                    $("#taskid").val(id);
                    $("#completeform").submit();
                });
                $(".delete").on('click',function(){
                    if(confirm("Are you sure to delete this task ?")) {
                        var id = $(this).data("taskid");
                        $("#dtaskid").val(id);
                        $("#deleteform").submit();
                    }
                });
                $(".incomplete").on('click',function(){
                    var id = $(this).data("taskid");
                    $("#itaskid").val(id);
                    $("#incompleteform").submit();
                });
                $("#bulksubmit").on('click',function(){
                    if($("#action").val() == 'bulkdelete'){
                        if(!confirm("Are you sure to delete ?")) {
                        return false;
                        }
                    }
                });
            });
        })(jQuery);
    </script>

</body>
</html>