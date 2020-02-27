<?php
session_start();
$_SESSION['data'] = ['id'=>1,'name'=>'nehal'];



foreach($_SESSION['data'] as $k => $v){
    echo "$k => $v<br>";
}