<?php
include('filehandlers.php');

if(isset($_POST['filedata'])){
    $filedir = $_POST['dirname'];
    $filename = $_POST['filename'];
    $filedata = $_POST['filedata'];
    if(!empty($filedir) && !file_exists($filedir)){
        mkdir($filedir);
        if(strrpos($filename,'.php')>0){
            $data = "Hello " . $filedata;
            file_create_read($filedir."\\".$filename,'w', $data);
        }
    }else{
        if(strrpos($filename,'.php')>0){
            $data = "Hello " . $filedata;
            file_create_read($filename,'w', $data);
        }
    }

    header('location:form.php');
}