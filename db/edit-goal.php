<?php
if(!isset($_POST['title'])){
    die("can not edit the record");
}else{
    $c = $_POST['title'];
    $i = $_POST['discriptions'];
    $id = $_POST['id'];
    include('connect.php');
    $query = "UPDATE goals SET title='$c', discriptions= '$i' WHERE id='$id'";
    if(mysqli_query($conn, $query)){
        header('location:../view-goal.php?msg=successfully update');
    }else{
        header('location:../view-goal.php?errmsg=',mysqli_error($conn));
    }
}

?>