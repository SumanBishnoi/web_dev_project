<?php require_once ( "db/conn.php" ); 
$result= $crud->getAllReview();
?>

<?php
   include 'header.php';
   ?>
<!-- <div id="banner_image">
        <div class= “container”>
            <div id="banner_content"> 
                <h1>We sell lifestyle</h1>
                <p>Flat 40% OFF on premium brands</p>
                <a class="btn btn-danger btn-lg active" href="products.php">shop now</a>
             </div> 
        </div>
     </div> -->
<div class="container-fluid">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/watch.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <div id="banner_content">
                        <h5>WE sell lifestyle</h5>
                        <p>Buy Now! Huge Selection</p>
                        <a class="btn btn-danger btn-lg active" href="products.php">Shop now</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/shirt.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <div id="banner_content">
                        <h5> Styles for Men</h5>
                        <p>Upto 40% off</p>
                        <a class="btn btn-danger btn-lg active" href="products.php">Shop now</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/camera.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <div id="banner_content">
                        <h5>Shop by Category</h5>
                        <p>Explore a vast selection of products</p>
                        <a class="btn btn-danger btn-lg active" href="products.php">Shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<br>
<div>
    <h3 style="text-align: center;">Products Category</h3>
</div>
<div class="row">
    <div class="items">
        <a href="products.php">
            <img src="img/watch.jpg" alt="" class="img-thumbnail">
            <div class="caption">
                <h2>Watches</h2>
                <p>Original watches from the best brands</p>
            </div>
        </a>
    </div>
    <div class="items">
        <a href="products.php">
            <img src="img/shirt.jpg" alt="" class="img-thumbnail">
            <div class="caption">
                <h2>Shirts</h2>
                <p>Our exquisite collection of shirts</p>
            </div>
        </a>
    </div>
    <div class="items">
        <a href="products.php">
            <img src="img/camera.jpg" alt="" class="img-thumbnail">
            <div class="caption">
                <h2>Cameras</h2>
                <p>Choose among the best available in the world</p>
            </div>
        </a>
    </div>
</div>
<div class="row">
    <div class="items">
        <a href="products.php">
            <img src="https://media.istockphoto.com/photos/boutique-shoes-in-a-store-picture-id1152527286" alt=""
                class="img-thumbnail">
            <div class="caption">
                <h2>Footwear</h2>
                <p>Stylish footwear from the best brands</p>
            </div>
        </a>
    </div>


    <div class="items">
        <a href="products.php">
            <img src="https://media.istockphoto.com/photos/beauty-comes-in-all-shapes-and-sizes-picture-id1137404386"
                alt="" class="img-thumbnail">
            <div class="caption">
                <h2>Jeans</h2>
                <p>Our exquisite collection of shirts</p>
            </div>
        </a>
    </div>


    <div class="items">
        <a href="products.php">
            <img src="imgs/earrings1.png" alt="" class="img-thumbnail">
            <div class="caption">
                <h2>Jewelry</h2>
                <p>Wide range of best quality bags</p>
            </div>
        </a>
    </div>

</div>
<div>
    <h3 style="text-align: center;">Words From Our Customers</h3>
</div>
<div class="row">
<?php
        while ($r= $result->fetch(PDO::FETCH_ASSOC)){?>

    <div class="items">
       
        <p><?php echo $r['review'] ?></p>
        <div class="info">
            <div class="name"><?php echo $r['Name'] ?></div>
            <div class="stars">
                <?php $rating=$r['rate'];
                while ($rating){ ?>
                <span class="fa fa-star checked"></span> <?php $rating= $rating-1; }?>
               
            </div>
        </div>

    </div>
      <?php
                            }
                            ?>
    
</div>
<!-- <div class="container-fluid">
    <h3 style="text-align: center;">Words From Our Customers</h3> </div> -->
<?php
   include 'footer.php';
   ?>

</html>