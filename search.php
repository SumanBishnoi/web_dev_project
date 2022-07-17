<?php require_once 'header.php';
require_once 'db/conn.php'; 
//get all products
$Search = $_GET['Search'];
 $result= $crud->getSearch($Search);
  ?>
                      <div>
                      <h3 style="text-align: center;">Here are some matching results</h3>
                                    </div>
                  <div class="row">
<?php
              foreach($result as $row){
            ?>
        <div class="items">
                <img src=  "imgs/<?php echo $row['img']?>"  alt="" class="img-thumbnail">
                <div class="caption"> 
                    <h5>Item:<?php echo $row['name'] ?></h5>
                     <p>Price:<?php echo $row['price'] ?></p>
                     <p>Details:<?php echo $row['description'] ?></p>

                      <a  class="btn btn-primary btn-block" href="view.php?id=<?php echo $row['id'] ?>"> View Details </a>
                 </div> 
        </div>
        
        <?php }
                            ?>

</div>
    <?php
   include 'footer.php';
   ?>


    </html>