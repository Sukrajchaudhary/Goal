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
        top: 30%;
        border: 2px solid black;
        height: 350px;
        width: 250px;
        border-radius: 7px;



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
        width: 210px;
        border-radius: 5px;
    }

    #button {
        width: 210px;
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
    </style>
</head>

<body>
    <section id="myform">
        <div class="overlay">
            <div id="home">
                <li><i class="fas fa-user"></i></li>
            </div>
            <div class="content-box-lg">
                <div class="container">
                    <div class="row">
                        <form action="db/insert.php" method="post">
                            <label for="">Enter your Email:</label>
                            <br>
                            <input type="email" id="email" name="email" placeholder="Please enter email....">
                            <label for="">Enter Full Name:</label>
                            <br>
                            <input type="text" id="name" name="Fullname" placeholder="Please enter Full Name....">
                            <br>
                            <label for="">Password:</label>
                            <br>
                            <input type="password" id="password" name="password"
                                placeholder="Please enter password....">
                            <br>
                            <br>
                            <input id="button" onclick="fun()" type="submit" value="Signup" name="submit"
                                class="btn btn-primary">
                            <hr>
                            <span> Already account? <a href="login.php">login</a></span>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>



















    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!--  -->
    <!--  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <script src="https://kit.fontawesome.com/9ef1cb42dc.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
<script>
function fun() {
    var Email = document.getElementById('email').value;
    var name = document.getElementById('name').value;
    var password = document.getElementById('password').value;
    if (Email == '' || name == '' || password == '') {
        alert("please enter your details"); 
    }
    else{
        swal({
            title: "Good job!",
            text: "SignUp Successfully....",
            icon: "success",
            button: "ok",
        });
    }
}
</script>

</html>