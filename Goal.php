<?php
session_start();
 if(!isset($_SESSION['login']) || !$_SESSION['login']==1){
   header('Location:login.php');
 }
 $id = $_SESSION['user_id']; 
 include('db/connect.php');
 $query = "SELECT * FROM users WHERE id='$id'";
$result = mysqli_query($conn,$query);
$data = mysqli_fetch_assoc($result);


?>
<!-- *****************************
****************************** -->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Goal Set</title>

    <style>
    body {
        /* background-color: #363940; */
        background-image: url('photo/3.jpg');
        height: 80%;
        width: 100%;
        position: absolute;
        background-repeat: no-repeat;
        background-size: cover;
    }

    #myform {
        position: absolute;
        left: 40%;
        top: 15%;
        border: 2px solid black;
        height: 540px;
        width: 300px;
        border-radius: 7px;
        display: none;



    }

    #home li {
        list-style: none;
    }

    #home {
        margin-top: 5px;
    }

    #home li i {
        color: #00BBF0;
        margin-left: 45%;
        font-size: 30px;
        margin-top: 8px;
    }

    .container {
        margin-top: 25px;
        margin-right: 20px;
    }

    form {
        margin-right: 10px;
    }

    label {
        color: #21ABA5;
        margin-left: 47px;
    }

    input {
        margin-left: 10px;
        width: 250px;
        height: 50px;
        px;
        border-radius: 5px;


    }

    #button {
        width: 250px;
        height: 30px;

    }

    hr {
        height: 5px;
        color: white;
    }

    h6 {
        color: #F0FFF3;
    }

    span {
        color: white;
    }

    .overlay {
        position: absolute;
        height: 100%;
        width: 100%;
        background-color: black;
        opacity: 7;
        border-radius: 7px;
    }

    textarea {
        margin-left: 10px;
        width: 250px;
        border-radius: 5px;

    }

    span {
        color: white;
        margin-left: 13px;
        width: 250px;
        border-radius: 5px;
    }
    #myform ul {
        list-style:none;
        color:white;
        position:relative;
        z-index:1;
        justify-content:flex-end;
        right:10%;
        bottom:2px;
        font-size:30px;
    }
    </style>
</head>

<body>

    <!-- *************************
****************************** -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="view-goal.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link  active" href="#" id="show" role="button" aria-expanded="false">
                            Add Goal
                        </a>
                    </li>
                    <li class="nav-item"><a href="db/logut.php" class="nav-link active">Log Out</a></li>
                </ul>
                
            </div>
        </div>
    </nav>
    <!-- ***************************
************ -->
    <section id="myform">
        <ul>
            <li id="del"><i class="fas fa-times"></i></li>
        </ul>
        <div class="overlay">
            <div id="home">
                <li><i class="fas fa-user"></i></li>
            </div>
            <div class="content-box-lg">
                <div class="container">
                    <div class="row">
                        <form action="db/add-goal.php" method="post">
                            <label for="">Enter Goal titlel:</label>
                            <br>
                            <input type="text" placeholder="Enter Goal title..." name="title">
                            <br>
                            <label for="">Enter Acomplished Date</label>
                            <br>
                            <input type="date" placeholder="Enter Date..">
                            <br>
                            <label for="">Enter Discription:</label>
                            <br>
                            <textarea name="discriptions" id="" cols="30" placeholder="Enter Discriptions.."
                                rows="7"></textarea>
                            <br>
                            <input id="button" type="submit" value="submit" name="submit" class="btn btn-success">
                            <hr>
                            <span>View your Details ? <a href="display-goal.php">View Details</a></span>
                        </form>
                    </div>
                </div>
                <?php include('include/message.php');?>

            </div>
        </div>
    </section>



















    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <script src="https://kit.fontawesome.com/9ef1cb42dc.js" crossorigin="anonymous"></script>
</body>
<script>
document.getElementById("show").addEventListener("click", function() {
    document.querySelector("#myform").style.display = "flex";
})
document.querySelector("#del").addEventListener("click", function() {
    document.querySelector("#myform").style.display = "none";
})

 
  var myTimeout=setTimeout(function(){
      alert("Click in Add Goal to set your Goals.....!")
  },2000);
</script>

</html>