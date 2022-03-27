<?php
include('connect.php');
if(isset($_POST['submit'])){
$name=$_POST['email'];
$fullname=$_POST['Fullname'];
$password=$_POST['password'];

if($name==''){
    $message="please Enter your Name";
    header('Location:../signup.php?errmsg='.$message);
}
if($fullname==''){
    $message="please Enter your FullName";
    header('Location:../signup.php?errmsg='.$message);
}
if($name==''){
    $message="please Enter your Password";
    header('Location:../signup.php?errmsg='.$message);
}
$encryptedPassword=md5($password);

$query="INSERT INTO users(email,Fullname,password) VALUES('$name','$fullname','$encryptedPassword')";
if(mysqli_query($conn,$query)){
 $message="Sign up successfully";
 header('Location:../login.php?msg='.$message);

}
else{
    $message = "Data is not acceptable";
     header("Location:../signup.php?errmsg=".$message);
}
}
?>