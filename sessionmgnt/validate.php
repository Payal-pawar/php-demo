<?php
$data['email'] = 'nehalrawal3960@gmail.com';
$data['pass'] = '12345';
session_start();



if(isset($_POST['login'])){
    $email = !empty($_POST['email'])?$_POST['email']:'';
    $pass  = !empty($_POST['pass'])?$_POST['pass']:'';
    $remember = !empty($_POST['remember'])?$_POST['remember']:'';
        if($email == $data['email'] && $pass == $data['pass']){
            $_SESSION['login'] = true;
            $_SESSION['remember'] = $remember;
            $_SESSION['email'] = $email;
            $_SESSION['success'] = "Welcome ".$email;
            header('location: profile.php');    
        }else{
            $_SESSION['error'] = "Invalid Credential.Please Login!.";
            header('location: login.php');            
        }
    
}else{
    $_SESSION['error'] = "Invalid Access.Please Login!.";
    header('location: login.php');
}