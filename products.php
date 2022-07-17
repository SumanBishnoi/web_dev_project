<?php require_once 'header.php';
require_once 'db/conn.php'; 
//get all products
 $result= $crud->getAllproducts();
 ?>
<div class="container">
    <div class="jumbotron">
        <h1 class="display-4"> <b>Welcome to our Lifestyle Store!</b></h1>
        <p class="my-4">We have the best cameras, watches and shirts for you. No need to hunt
            around, we have all in one place.</p>
    </div>
</div>

    <div class="row">

<?php
        while ($r= $result->fetch(PDO::FETCH_ASSOC)){?>

			                          
       
        <div class="items">
                <img src="imgs/<?php echo $r['img'] ?>" alt="" class="img-thumbnail">
                <div class="caption"> 
                    <h5>Item:<?php echo $r['name'] ?></h5>
                     <p>Price:<?php echo $r['price'] ?></p>
                     <p>Details:<?php echo $r['description'] ?></p>

                      <a  class="btn btn-primary btn-block" href="view.php?id=<?php echo $r['id'] ?>"> View Details </a>
                 </div> 
        </div>
                          <?php
                            }
                            ?>
    </div>

    <?php
   include 'footer.php';
   ?>


    </html>