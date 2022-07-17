<?php
require_once 'header.php';
    require_once 'inc/auth_check.php';
    require_once 'db/conn.php';
    if(!isset($_GET['id'])){
        include 'inc/errormessage.php';
        header("Location: viewcart.php");
    }else{
        // Get ID values
        $id = $_GET['id'];

        //Call Delete function
        $result = $crud->orderproduct($id);
        //Redirect to list
        if($result)
        {
            header("Location: vieworder.php");
        }
        else{
            header("Location: viewcart.php");
        }
    }

?>
