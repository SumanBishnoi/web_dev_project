<?php 
    class crud{
        // private database object\
        private $db;
        
        //constructor to initialize private variable to the database connection
        function __construct($conn){
            $this->db = $conn;
        }
        
        // function to insert a new record into the attendee database
        public function insertcustomer($name, $email,$contact,$password){
                       try {
                // define sql statement to be executed
                $sql = "INSERT INTO customer (name,email,contact,password) VALUES (:Name,:Email,:Contact,:Password)";
                //prepare the sql statement for execution
                $stmt = $this->db->prepare($sql);
                // bind all placeholders to the actual values
                $stmt->bindparam(':Name',$name);
                $stmt->bindparam(':Email',$email);
                $stmt->bindparam(':Contact',$contact);
                $stmt->bindparam(':Password',$password);
               // execute statement
                $stmt->execute();
                return true;
        
            } 
            catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }
        // adding products to cart
            public function insertproduct($id,$name, $price, $description, $img,$email){
           try{ 
               $qty=1;
            $sql= "INSERT INTO cart (email,name, price , img, qty, totalprice, id) VALUES (:email,:name, :price, :img, :qty, :price, :id)";
            $insert_stmt= $this->db->prepare($sql);
            $insert_stmt->bindParam(":email", $email);
            $insert_stmt->bindParam(":name", $name);
            $insert_stmt->bindParam(":price", $price);
            $insert_stmt->bindParam(":img", $img);
            $insert_stmt->bindParam(":qty", $qty);
            $insert_stmt->bindParam(":totalprice", $totalprice);
            $insert_stmt->bindParam(":id", $id);
            $insert_stmt->execute();

               return true;
           }catch (PDOException $e) {
            echo $e->getMessage();
            return false;
           }
            
        }
// view products page
        public function getAllproducts(){
            try{
                $sql = "SELECT id,name, price, description,img FROM `products` ";
                $result = $this->db->query($sql);
                 return $result;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
           }
           
        }
        // viewing cart items
        public function getAllcart($email){
            try{
                $sql = "select * from cart where email= :email";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':email', $email);
                 $stmt->execute();
                 $result = $stmt->fetchall(PDO::FETCH_ASSOC);
                 return $result;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
           }
        }
        //    viewing all orders
        public function getAllorder($email){
            try{
                $sql = "select * from orders where email= :email";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':email', $email);
                 $stmt->execute();
                 $result = $stmt->fetchall(PDO::FETCH_ASSOC);
                 return $result;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
           }
        }
//  to view details of a single product
        public function getProductDetails($id){
            try{
                 $sql = "select * from products  where id = :id";
                 $stmt = $this->db->prepare($sql);
                 $stmt->bindparam(':id', $id);
                 $stmt->execute();
                 $result = $stmt->fetch();
                 return $result;
            }catch (PDOException $e) {
                 echo $e->getMessage();
                 return false;
             }
         }

        //  total price
        public function getSum($email){
            try{
                 $sql = "select SUM(price) AS sum from cart where email = :email";
                 $stmt = $this->db->prepare($sql);
                 $stmt->bindparam(':email', $email);
                 $stmt->execute();
                 $result = $stmt->fetch();
                 $sum= $result['sum'];
                 return $sum;
            }catch (PDOException $e) {
                 echo $e->getMessage();
                 return false;
             }
         }

         public function getSum1($email){
            try{
                 $sql = "select SUM(price) AS sum from orders where email = :email";
                 $stmt = $this->db->prepare($sql);
                 $stmt->bindparam(':email', $email);
                 $stmt->execute();
                 $result = $stmt->fetch();
                 $sum= $result['sum'];
                 return $sum;
            }catch (PDOException $e) {
                 echo $e->getMessage();
                 return false;
             }
         }

// delete product from cart
public function deleteproduct($id){
    try{
        $sql = "delete from cart where id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':id', $id);
        $stmt->execute();
        return true;
    }catch (PDOException $e) {
        echo $e->getMessage();
        return false;
    }
}
// delete product from orders
                public function deleteorder($id){
                    try{
                         $sql = "delete from orders where id = :id";
                         $stmt = $this->db->prepare($sql);
                         $stmt->bindparam(':id', $id);
                         $stmt->execute();
                         return true;
                     }catch (PDOException $e) {
                         echo $e->getMessage();
                         return false;
                     }
                 }
        
                public function  orderproduct($id){
                    try{
                         $sql = "insert into orders select * from cart where id = :id";
                         $stmt = $this->db->prepare($sql);
                         $stmt->bindparam(':id', $id);
                         $stmt->execute();
                         return true;
                     }catch (PDOException $e) {
                         echo $e->getMessage();
                         return false;
                     }
                 }

                //  seraching an item
                 public function getSearch($Search){
                    try{
                         $sql = "SELECT id,name, price, description,img FROM `products`  where name like '%$Search%' ";
                         $stmt = $this->db->prepare($sql);
                         $stmt->execute();
                         $result = $stmt->fetchall(PDO::FETCH_ASSOC);
                         return $result;
                    }catch (PDOException $e) {
                         echo $e->getMessage();
                         return false;
                     }
                 }
//  adding review
                 public function insertReview($Name, $Email, $rate, $review){
                    try{ 
                     $sql= "INSERT INTO review (Name, Email, rate, review) VALUES (:Name,:Email, :rate, :review)";
                     $insert_stmt= $this->db->prepare($sql);
                     $insert_stmt->bindParam(":Name", $Name);
                     $insert_stmt->bindParam(":Email", $Email);
                     $insert_stmt->bindParam(":rate", $rate);
                     $insert_stmt->bindParam(":review", $review);
                     $insert_stmt->execute();
                        return true;
                    }catch (PDOException $e) {
                     echo $e->getMessage();
                     return false;
                    }
                     
                 }
                //  publish review in home page
                 public function getAllReview(){
                    try{
                        $sql = "SELECT Name, rate,review FROM `review` ";
                        $result = $this->db->query($sql);
                         return $result;
                    }catch (PDOException $e) {
                        echo $e->getMessage();
                        return false;
                   }
                   
                }

    }
?>