<?php
session_start();
include('dbconfig.php');
include('validationlib.php');

try {
    if($_POST['submit']){
        $data['title'] = $_POST['title'];
        $data['fname']=$_POST['fname'];
        $data['lname']=$_POST['lname'];
        $data['fhname']=$_POST['fhname'];
        $data['mname']=$_POST['mname'];
        $data['gender']=$_POST['gender'];
        $data['dob']=$_POST['dob'];
        $data['marital_status']=$_POST['marital_status'];
        $data['category']=$_POST['category'];
        // $data['pre_address']=$_POST['pre_address'];
        // $data['state']=$_POST['state'];
        // $data['district']=$_POST['district'];
        // $data['taluka']=$_POST['taluka'];
        // $data['pincode']=$_POST['pincode'];
        // $data['mob']=$_POST['mob'];
        // $data['email']=$_POST['email'];
        // $data['nationality']=$_POST['nationality'];
        if(validation($data)){
            if(isset($_POST['id'])){
                $ans = updatePersonalDetail($data,$_POST['id']) > 0;
                //$ans=insertAddressDetail($data)>0;
                header('location:personaldetail.php');    
            }else{
                $ans = insertPersonalDetail($data) > 0;
                $ans=insertAddressDetail($data)>0;    
                if($ans){
                    $_SESSION['success'] = 'Data Inserted SuccessFully.';
                    header('location:index.php');
                }else{
                    $_SESSION['error'] = 'Data Not Inserted SuccessFully.';
                    header('location:index.php');
                }
                }

        }else{
            $_SESSION['error'] = 'Data is invalid.';
            header('location:index.php');
        }
    } 
} catch (Exception $e) {
    $_SESSION['error']=$e->getMessage();
    header('location:index.php');

}
?>