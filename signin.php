<?php
    require_once 'header.php';
    require_once 'db/conn.php';

    ?>



<!-- <div class="abcd">
                        <div class="container"> -->
<!-- <div class="row row-style"> -->
    <div class="col-md-6">
        <div class="panel panel-primary">
            <div class="panel heading">
                <h4>Signin</h4>
            </div>
            <div class="panel-body">
                            <p class="text-warning">Enter details to create account</p>
                        </div>

            <form action="success.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                <label for="exampleInputname">Name</label>
                    <input type="text" class="form-control" id="Name" name="Name" required placeholder="Name">
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="Email" name="Email" required placeholder="Email">
                </div>
                <div class="form-group">
                <label for="exampleInputcontact">Contact</label>
                    <input type="text" class="form-control" id="Contact" name="Contact" required type="text"
                        maxlength="10" placeholder="Contact">
                </div>
                <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="Password" name="Password" required minlength="6"
                        placeholder="Password">
                </div>
                <!-- <div class="form-group">
                                                <input type="text" class="form-control" name="City" placeholder="City"><br>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="Address" placeholder="Address"><br>
                                            </div> -->
                <button name="submit" class="btn btn-primary">Submit </button>
            </form>

        </div>

    </div>
<br>
<br>
<br>
<br>
<!-- </div> -->
<!-- </div>
                    </div> -->

<?php
   include 'footer.php';
   ?>

</html>