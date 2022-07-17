<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>

<br>
<br>
<br>
<br>
<br>




<footer>
    <div class="container-fluid">
    <?php if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $Search = $_GET['Search'];
                 $result = $crud->getSearch($Search);
        if(!$result){
            echo '<div class="alert alert-danger">No matching items!! Please try again. </div>';
        }

    } ?>
    <!-- Footer Elements -->
    <div class="container">
        <!--Grid row-->
        <div class="row">

            <!--Grid column-->
            <div class="col-md-6 mb-4">

                <!-- Form -->
                <form class="form-group" action="search.php" method="GET">

                    <!-- <i class="fas fa-search" aria-hidden="true"></i> -->
                    <input class="form-control " type="text" id="Search" name="Search" required type="text"
                        placeholder="Search">

                    <button class="btn btn-success" type="submit" style="margin-top: 5px;">Search</button>

                    <!-- Form -->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-6 mb-4">
                <a class="btn btn-success" href="review.php">Submit a review </a>


            </div>
            <!--Grid column-->

        </div>

        <div class="row">
            <center>Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000

            </center>
        </div>
    </div>

</div>
</footer>
<!-- Footer -->

</body>