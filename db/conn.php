<?php 
    // Development Connection
    // $host = '127.0.0.1:3308';
    // $db = 'sam';
    // $user = 'root';
    // $pass = '';
    // $charset = 'utf8mb4';
    // $dsn = "mysql:host=$host;dbname=$db;charset=$charset";


    // Deployement Connection
    $host = 'sql6.freemysqlhosting.net';
    $db = 'sql6507091';
    $user = 'sql6507091';
    $pass = 'XzvET5uH4J';
    $charset = 'utf8mb4';
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";


    try{
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e) {
        throw new PDOException($e->getMessage());
    }


    require_once 'crud.php';
    require_once 'user.php';
    $crud = new crud($pdo);
    $user = new user($pdo);
   
    // $user->insertUser("admin","password");
 ?> 
