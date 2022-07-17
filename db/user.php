<?php 

    class user{
        // private database object\
        private $db;
        
        //constructor to initialize private variable to the database connection
        function __construct($conn){
            $this->db = $conn;
        }

        // public function insertUser($username,$password){
        //     try {
        //         $result = $this->getUserbyUsername($username);
        //         if($result['num'] > 0){
        //             return false;
        //         } else{
        //             $new_password = md5($password.$username);
        //             // define sql statement to be executed
        //             $sql = "INSERT INTO users (username,password) VALUES (:username,:password)";
        //             //prepare the sql statement for execution
        //             $stmt = $this->db->prepare($sql);
        //             // bind all placeholders to the actual values
        //             $stmt->bindparam(':username',$username);
        //             $stmt->bindparam(':password',$new_password);
                    
        //             // execute statement
        //             $stmt->execute();
        //             return true;
        //         }
                
        
        //     } catch (PDOException $e) {
        //         echo $e->getMessage();
        //         return false;
        //     }
        // }

        public function getUser($email,$password){
            try{
                $sql = "select email,password  from customer where email = :Email AND password = :Password ";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':Email', $email);
                $stmt->bindparam(':Password', $password);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
           }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

    //     public function getUserbyUsername($email){
    //         try{
    //             $sql = "select count(*) as num from customer where email = :Email";
    //             $stmt = $this->db->prepare($sql);
    //             $stmt->bindparam(':Email',$email);
                
    //             $stmt->execute();
    //             $result = $stmt->fetch();
    //             return $result;
    //         }catch (PDOException $e) {
    //                 echo $e->getMessage();
    //                 return false;
    //         }
    //     }

    //     public function getUsers(){
    //         try{
    //             $sql = "SELECT * FROM customer";
    //             $result = $this->db->query($sql);
    //             return $result;
    //         }catch(PDOException $e){
    //             echo $e->getMessage();
    //             return false;
    //         }
    //     }
    }
?>