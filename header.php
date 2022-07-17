<?php include 'inc/session.php';
// include 'db/crud.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
    </script> -->

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

    <link rel="stylesheet" href="design.css" type="text/css">
</head>

<body>
    <div class="navbar navbar-fixed-top navbar-dark bg-dark">
        <div class="container-fluid">
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a href="index.php" class="navbar-brand">LIfestyle store</a>
                </li>
                <li class="nav-item"> <a class="btn btn-dark" href="products.php">Products </a></li>
                <li class="nav-item"> <a class="btn btn-dark" href="about.php">About us </a></li>
            
            <!-- </ul>
            <ul class="nav justify-content-end"> -->

                <?php
if (isset($_SESSION['Email'])) {
  ?>
                <li class="nav-item" ><a class="btn btn-dark" href="viewcart.php"> Cart </a></li>
                <li><br></li>
                <li class="nav-item"><a class="btn btn-dark" href="vieworder.php"> Orders </a></li>
                <li><br></li>
                <li class="nav-item" style="float: right"> <a href="logout.php"><span class="btn btn-dark">
                            Logout</a></li>

                <span class="navbar-text">Hello
                    <?php echo $_SESSION['Email'] ?>!
                </span>
                <?php
} else { ?> <li class="nav-item"> <a class="btn btn-dark" href="signin.php">Signin</a></li>
                <li class="nav-item"> <a class="btn btn-dark" href="login.php">Login </a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <!-- </nav>
</div> -->