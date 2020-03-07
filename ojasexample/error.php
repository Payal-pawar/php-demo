<?php
session_start();
/**
 * Exception Handling / Error Handling
 */

try {
    if(isset($_POST['submit'])){
        $age = $_POST['age']??0;
        if($age<18){
            throw new Exception('#1235 : Invalid Age');
        }    
        echo "Valid Age";

    }else{
        throw new Exception('#1236 : Invalid Method Call');
    }
} catch (Exception $e) {
    $_SESSION['error'] =  $e->getMessage();
    header('location:form.php');
}
