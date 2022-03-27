<?php
 session_start();
 $user_id = $_SESSION['user_id'];
    include('connect.php');
    // if(isset($_POST['title']) && isset($_POST['discriptions']))
    $title = $_POST['title'];
    $date=date('y-m-d');
    $discriptions=$_POST['discriptions'];
    if($title!=='' && $discriptions!==''){

        $query = "INSERT INTO goals(title,postDate,discriptions,user_id) VALUES('$title','$date','$discriptions','$user_id')";
        if(mysqli_query($conn,$query)){

            $msg ="successfully inserted";
       
    }else{

        $msg="some error occured: ".mysqli_error($conn);
    }
      header('Location:../Goal.php?msg='.$msg);
    }
?>