    <?php
   require_once 'header.php';
   require_once 'db/conn.php';
   ?>
<?php

if(isset($_POST['submit'])){
    //extract values from the $_POST array

    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $contact = $_POST['Contact'];
    $password = $_POST['Password'];
   //Call function to insert and track if success or not
   $isSuccess = $crud->insertcustomer($name, $email, $contact,$password);

if($isSuccess){
    //    SendEmail::SendMail($email, 'Welcome to Lifestyle store', 'You have successfully registerted');
       require_once 'inc/successmessage.php';

   }
   else{
       require_once 'inc/errormessage.php';
   }
}

?>

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">
               Name: <?php echo $_POST['Name'] ;  ?>
            </h5>
            <h6 class="card-title">
                <?php echo $_POST['Email'];  ?>    
            </h6>
            <p class="card-text">
                Contact Number: <?php echo $_POST['Contact'];  ?>
            </p>
            
            <p class="card-text">
                Password: <?php echo $_POST['Password'];  ?>
            </p>
    
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
            

    <?php
   include 'footer.php';
   ?>

</html>