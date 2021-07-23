<?php
define('DB_NAME','e:\\Working Develop\\php\\8-CRUD\\data\\db.txt');
function seed(){
    $data = array(
        array(
            'fname' => 'Tanvir',
            'lname' => 'Md. Al-Amin',
            'age' => 12,
            'class' => 7,
            'id' => 1,
            'roll' => 1,
        ),
        array(
            'fname' => 'Rahim',
            'lname' => 'Ahmed',
            'age' => 11,
            'class' => 7,
            'id' => 2,
            'roll' => 13,
        ),
        array(
            'fname' => 'Nikhil',
            'lname' => 'Chandra',
            'age' => 12,
            'class' => 7,
            'id' => 3,
            'roll' => 14,
        ),
        array(
            'fname' => 'Tanvir',
            'lname' => 'Hasan',
            'age' => 13,
            'class' => 7,
            'id' => 4,
            'roll' => 6,
        ),
        array(
            'fname' => 'Md.',
            'lname' => 'Al-Amin',
            'age' => 14,
            'class' => 7,
            'id' => 5,
            'roll' => 24,
        ),
    );
    $serializeData = serialize($data);
    file_put_contents(DB_NAME,$serializeData,LOCK_EX);
}

function generateReport(){
    $serialziedData = file_get_contents(DB_NAME);
    $students = unserialize($serialziedData);
    ?>
<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Class</th>
        <th>Roll</th>
        <th>Age</th>
        <th width="25%">Action</th>
    </tr>
    <?php
    foreach ($students as $student) {
        ?>
        <tr>
            <td><?php printf('%s',$student['id']); ?></td>
            <td><?php printf('%s %s',$student['fname'],$student['lname']); ?></td>
            <td><?php printf('%s',$student['class']); ?></td>
            <td><?php printf('%s',$student['roll']); ?></td>
            <td><?php printf('%s',$student['age']); ?></td>
            <td><?php printf('<a href="/8-CRUD/index.php?task=edit&id=%s">Edit</a> | <a href="/8-CRUD/index.php?task=delete&id=%s">Delete</a>',$student['id'],$student['id']); ?></td>
        </tr>
        <?php
    }
     ?>
    
</table>
    <?php
}

// Add new student functions 
function addStudent($fname, $lname, $age, $roll, $class){
    $found = false;
    $serialziedData = file_get_contents(DB_NAME);
    $students = unserialize($serialziedData);
    foreach ($students as $s_student) {
        if($s_student['roll'] == $roll){
            $found = true;
            break;
        }
    }
    if(!$found){
        $newId = count($students) + 1;
        $student = array(
            'id' => $newId,
            'fname' => $fname,
            'lname' => $lname,
            'age' => $age,
            'class' => $class,
            'roll' => $roll,
        );
        array_push($students, $student);
        $serializeData = serialize($students);
        file_put_contents(DB_NAME,$serializeData,LOCK_EX);
        return true;
    }
    return false;
}

function getStudent($id){
    $serialziedData = file_get_contents(DB_NAME);
    $students = unserialize($serialziedData);
    foreach ($students as $student) {
        if($student['id'] == $id){
            return $student;
        }
    }
    return false;
}
// update Student function
function updateStudent($id, $fname, $lname, $age, $roll, $class){
    $found = false;
    $serialziedData = file_get_contents(DB_NAME);
    $students = unserialize($serialziedData);
    foreach($students as $_student){
        if($_student['roll'] == $roll && $_student['id'] != $id){
            $found = true;
            break;
        }
    }
    if(! $found){
    $students[$id-1]['fname'] = $fname;
    $students[$id-1]['lname'] = $lname;
    $students[$id-1]['roll'] = $roll;
    $students[$id-1]['age'] = $age;
    $students[$id-1]['class'] = $class;
    $serializeData = serialize($students);
    file_put_contents(DB_NAME,$serializeData,LOCK_EX);
    return true;
    }
    return false;
}
// deleteStudent($id); 
function deleteStudent($id){
    $serialziedData = file_get_contents(DB_NAME);
    $students = unserialize($serialziedData);

    unset($students[$id - 1]);
    $serializeData = serialize($students);
    file_put_contents(DB_NAME,$serializeData,LOCK_EX);
}
