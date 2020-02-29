<?php
session_start();

include('validationlib.php');

try {
    if(isset($_POST['submit'])){
        $data['title'] = $_POST['title'];
        $data['fname']=$_POST['fname'];
        $data['lname']=$_POST['lname'];
        $data['fhname']=$_POST['fhname'];
        $data['mname']=$_POST['mname'];
        $data['gender']=$_POST['gender'];
        // $data['date']=$_POST['date'];
        $data['maritalstatus']=$_POST['maritalstatus'];
        $data['category']=$_POST['category'];
        var_dump(validation($data));
    } 
} catch (Exception $e) {
    $_SESSION['error']=$e->getMessage();
    header('location:onlineform.php');
}
?>