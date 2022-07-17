 <?php
   include 'header.php';
//    require_once 'inc/auth_check.php';
   require_once 'db/conn.php';
  
   if(!isset($_GET['id'])){
    include 'inc/errormessage.php';
    
} else{
    $id = $_GET['id'];
    $result = $crud->getProductDetails($id);
    $id=$result['id'];
    $name=$result['name'];
    $price=$result['price'];
    $description=$result['description'];
    $img=$result['img'];
    $qty=$result['qty'];  } ?>


<br>
<br>
<br>
<br>
<br>
<br>
<?php
echo'
<div class="row">
 <div class="items">
     <div> <img src="imgs/'.$img.'" alt="" class="thumbnail">
     <h3>Product Id: '.$id.'</h3>
     </div>
     </div>
     <div class="column">
     <h3>Item: '.$name.'</h3>
     <p>Price:'.$price.'</p>
     <p>Details:'.$description.'</p>
         <p>Quantity available:'.$qty.'</p>
         <!-- <a class="btn btn-primary btn-block" href="cart.php"> Add to cart </a> -->
         <form  method="post" action="cart.php" enctype="multipart/form-data">
         <div class="form-group">
         <input type="hidden" id="id" name="id" value="'.$id.'" >
         <input type="hidden" id="name" name="name" value="'.$name.'" >
         <input type="hidden" id="price"  name="price" value="'.$price.'" >
         <input type="hidden" id="description" name="description"  value="'.$description.'" >
         <input type="hidden" id="img" name="img" value="imgs/'.$img.'" >
         </div>
         
         <button name="submit" class="btn btn-primary">Add to cart </button>
         </form>
         </div>
</div>'
?>





 <br>
 <br>
 <br>
 <br>
 <br>
 <?php
    include_once 'footer.php';
    ?>


 </html>