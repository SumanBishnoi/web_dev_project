<?php
   require_once 'header.php';
   require_once 'db/conn.php';
   require_once 'inc/auth_check.php';
     ?>
<?php
  if (isset($_SESSION['Email'])) {
      if(isset($_POST['submit'])){
          //extract values from the $_POST array
$email=$_SESSION['Email'] ;
$id=$_POST["id"] ;
$name=$_POST["name"];
$price=$_POST["price"];
$description=$_POST["description"];
$img=$_POST["img"]  ;
$qty=1;
   //Call function to insert and track if success or not
   $isSuccess = $crud->insertproduct($id,$name, $price, $description, $img,$email);
   if($isSuccess){
    //    SendEmail::SendMail($email, 'Welcome to Lifestyle store', 'You have successfully registerted');
echo '<div class="alert alert-success alert-dismissible mt-2">
<button type="button" class="close" <a href="view.php" data-dismiss="alert"> X </button> </a>
<strong> ITEM ADDED</strong>';
   }
   else{
    echo 'PLease login';
   }
}
echo '
<br>
<div class="row">
<div class="items">
<div> <img src="'.$img.'" alt="" class="thumbnail">
      <h3>Product Id:'.$id.'</h3>
      </div>
      </div>
      <div class="column">
      <h3>Item:'.$name.'</h3>
      <p>Price:'.$price.'</p>
      <p>Details:'.$description.'</p>
      <p>Quantity :'.$qty.'</p>
      
      <a  class="btn btn-primary btn-block" href="products.php"> Back </a>
      </div>
      ' ;
}
?>

<?php
    include_once 'footer.php';
    ?>


 </html>