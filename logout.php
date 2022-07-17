<?php
include_once 'inc/session.php';
?>
<?php
session_destroy();
header('location: index.php');
?>