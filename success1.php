<?php
   require_once 'header.php';
   require_once 'db/conn.php';
   ?>
    <?php

if(isset($_POST['submit'])){
    //extract values from the $_POST array

    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $rate = $_POST['rate'];
    $review = $_POST['review'];
   //Call function to insert and track if success or not
   $isSuccess = $crud->insertReview($Name, $Email, $rate, $review);
   if($isSuccess){
      //    SendEmail::SendMail($email, 'Welcome to Lifestyle store', 'You have successfully registerted');
      echo'<h1> Thanks for your Review!!</h1>';
     }
     else{
         require_once 'inc/errormessage.php';
     }
  }  


?>





</html>