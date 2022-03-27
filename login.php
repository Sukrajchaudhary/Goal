<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>

    <style>
    body {
        background-color: #363940;
    }

    #myform {
        position: absolute;
        left: 40%;
        top: 20%;
        border: 2px solid black;
        height: 350px;
        width: 250px;
        border-radius: 4px;



    }

    #home li {
        list-style: none;
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
        border-radius:5px;
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
    </style>
</head>

<body>



    <section id="myform">
        <div id="home">
            <li><i class="fas fa-user"></i></li>
        </div>
        <div class="content-box-lg">
            <div class="container">
                <div class="row">
                    <form action="db/login.php" method="post">
                        <label for="">Enter your Email:</label>
                        <br>
                        <input type="text" placeholder="Enter your email..." name="email">
                        <label for="">Password:</label>
                        <br>
                        <input type="password" id="" name="password" placeholder="Please enter password....">
                        <br>
                        <br>
                        <input id="button" type="submit" value="Signup" name="submit" class="btn btn-primary">
                        <hr>
                        <span> Do not Have Account <a href="signup.php">Sign Up</a></span>

                    </form>
                </div>
            </div>

        </div>
        <?php include('include/message.php');?>
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

</html>