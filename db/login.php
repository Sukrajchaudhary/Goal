<?php
 include('connect.php');
 if(isset($_POST['submit'])){
     $email=$_POST['email'];
     $password=$_POST['password'];
     if($email==''){
        $message = "email is required";
        header('Location:../login.php?errmsg='.$message);
    }
    if($password==''){
        $message = "password is required";
        header('Location:../login.php?errmsg='.$message);
    }  
    $encryptedpassword=md5($password);
    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$encryptedpassword'";
    $result = mysqli_query($conn,$query);
    
    $row = mysqli_num_rows($result);
    if($row==1){
        $data = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION['login']=1;
        $_SESSION['user_id']= $data['id'];
        header('Location:../Goal.php?msg=Signup Successfully');
    }else{
        $message="Please Enter Correct Details...";
        header('Location:../login.php?errmsg=email and password does not match');
    }


  }
    
 
?>