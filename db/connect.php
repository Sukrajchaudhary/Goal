<?php

$conn=mysqli_connect('localhost','root','','mydata');
if($conn->connect_error){
    die('connection Failed :' .$conn->connect_error);
}



?>