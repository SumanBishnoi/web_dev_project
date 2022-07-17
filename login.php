
    <?php
     require_once 'header.php'; 
	 require_once 'db/conn.php'; 
	 require_once 'db/user.php';
	  //If data was submitted via a form POST request, then...
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $email = $_POST['Email'];
        $password = $_POST['Password'];
        

        $result = $user->getUser($email,$password);
        if(!$result){
            echo '<div class="alert alert-danger">Username or Password is incorrect! Please try again. </div>';
        }else{
            $_SESSION['Email'] = $email;
            header("Location: index.php");
        }

    }
?>
    <!-- <div class="abcd"> -->
        <!-- <div class="container"> -->
            <!-- <div class="row row-style"> -->
                <div class="col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel heading">
                            <h4>Login</h4>
                        </div>
                        <div class="panel-body">
                            <p class="text-warning">Login to make a purchase</p>
                        </div>
                        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
                            <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                                <input type="text" class="form-control" name="Email" placeholder="Email" id="Email"
                                    value="<?php if($_SERVER['REQUEST_METHOD'] == 'post') echo $_POST['email']; ?>">
                            </div>
                            <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" name="Password" placeholder="Password"
                                    id="Password">
                            </div>
                            <input type="submit" value="Login" class="btn btn-primary btn-block">
                        </form>
                        <br>
                        <div class="panel-footer">Don't have an account?<a class="link" href="signin.php">Register </a>
                        </div>
                    </div>
                </div>

            <!-- </div> -->

        <!-- </div> -->
    <!-- </div> -->
<br>
<br>
<br>
<br>
<br>

    <?php
   include 'footer.php';
   ?>




</html>