<?php
session_start();
if(isset($_SESSION)){
    session_unset($_SESSION['login']);
    session_unset($_SESSION['remember']);
    session_unset($_SESSION['email']);
}

session_destroy();

session_start();
$_SESSION['success'] = "You are successfully logout.";
header('location:./login.php');
?>