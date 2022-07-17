<?php
   require_once 'header.php';
   require_once 'db/conn.php';
   require_once 'inc/auth_check.php';
   $email=$_SESSION['Email'];
   $result = $crud->getAllorder($email);
   $sum= $crud->getSum1($email);
   
   ?>
   <table  class="table">
        <tr>
            <th>#</th>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
        <?php
        if(count($result)){
            foreach($result as $row){
                echo'
           <tr>
           <td>  '.$row['id'].' </td>
                <td> '.$row['name'].' </td>
                <td> '.$row['qty'].' </td>
                <td> '.$row['price'].'</td>
                <td> <img src="'.$row['img'].'" alt="" class="img2"> </td>
                <td>
            <a  href="deleteorder.php?id='.$row['id'].'" class="btn btn-danger">Cancel Order</a>
                </td>
            </tr> 
            
            <tr> 
           ';
       }}
           ?>
    
          <td> </td>
           <td> </td>
           <td>Grand Total</td>
           <td> <?php echo $sum ?></td>

       </tr>
    </table>

    <br>
    <br>
    <br>
    <br>
<br>
<br>
<br>
<?php require_once 'footer.php'; ?>