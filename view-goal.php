<html>

<head>
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
    marquee {
        color: #00BBF0;
        font-size: 40px;
        text-shadow: 2px 2px solid #1F4068;
    }
    body{
      background-color:#F0FFF3;
    }
    </style>
</head>

<body>

<!-- *******************
********************** -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="">Display Goal Details</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


<!-- ********************
************************ -->
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-8">
                <div class="row">
                    <div class="container-fluid">
                        <marquee behavior="" direction="">View Goals Titles And Discriptions</marquee>
                    </div>
                </div>
                <hr />
                <?php
                        include('db/connect.php');
                        $query = "SELECT * FROM goals"; 
                        $result = mysqli_query($conn,$query);
                        ?>
                <table class="table">
                    <thead>
                        <th>Title</th>
                        <th>Discriptions</th>
                        <th>Action</th>
                    </thead>
                    <?php while($row=mysqli_fetch_assoc($result)){ ?>
                    <tr>
                        <td><?php echo $row['title'];  ?></td>
                        <td><?php echo $row['discriptions']; ?></td>
                        <td>
                            <a href="#" onclick="deleteConfirmation(<?php echo $row['id']; ?>);">
                                <i style="font-size:23px;color:red;" class="fas fa-trash-alt"></i>
                            </a> |
                            <a href="edit-goal.php?id=<?php echo $row['id']?>"><i style="font-size:23px;color:green;"
                                    class="fas fa-edit"></i></a>
                        </td>
                    </tr>

                    <?php } ?>
                </table>
                <?php include('include/message.php'); ?>
            </div>
        </div>
    </div>
    <script>
    function deleteConfirmation(id) {
        bootbox.confirm({
            message: "Are you sure?",
            buttons: {
                confirm: {
                    label: 'Yes',
                    className: 'btn-success'
                },
                cancel: {
                    label: 'No',
                    className: 'btn-danger'
                }
            },
            callback: function(result) {
                if (result) {
                    //delete code
                    window.location = 'db/delete-goal.php?id=' + id;
                }
            }
        });
    }
    </script>
    </script>
</body>
<script src="https://kit.fontawesome.com/a74baea4b2.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
<script src="https://kit.fontawesome.com/82f2c2ba8a.js" crossorigin="anonymous"></script>
<script src="js/bootbosx/bootbox.min.js"></script>

</html>