<?php
$rules = ['user'=>['type'=>'string'],'pass'=>['type'=>'string']];
$data = ['user'=>$_POST['user'],'pass'=>$_POST['pass']];


function string_checker($data){
    $data = filter_var($data, FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
    $data = trim($data);
    if(empty($data)){
        return false;
    }
    return $data;
}

function filterprocess($data,$type){
    switch ($type) {
        case 'string':
            $data = string_checker($data);          
            break;
        case 'int':
            break;
        default:
            break;
    }
    return $data;
}

function validation($data){
    global $rules;
    foreach($data as $key => $val){
        if(!filterprocess($data[$key],$rules[$key]['type'])){
            return false;
        }
    }
    return true;
}



var_dump(validation($data));

die;

$data = filter_var($_POST['user'], FILTER_SANITIZE_STRING);
echo $data;
echo "<br>";


$data = filter_var($_POST['pass'],FILTER_VALIDATE_INT);
echo $data;

echo "<br>";

$data = filter_var($_SERVER['REMOTE_ADDR'],FILTER_VALIDATE_IP);
echo $data;

echo "<br>";


$data = filter_var($_POST['user'],FILTER_SANITIZE_EMAIL);
$data = filter_var($_POST['user'],FILTER_VALIDATE_EMAIL);
echo $data;
echo "<br>";


$data = 'http://localhost/php1.demo/formaction2.php?pd=122';
$data = filter_var($data,FILTER_SANITIZE_URL);
$data = filter_var($data,FILTER_VALIDATE_URL);
echo $data;

echo"<br>";
$data = filter_var((int)$_POST['qty'],FILTER_VALIDATE_INT,array("options"=>array("min_range"=>1,"max_range"=>5)));
echo $data;

echo"<br>";

$data = 'http://localhost/php1.demo/formaction2.php';
$data = filter_var($data,FILTER_SANITIZE_URL);
$data = filter_var($data,FILTER_VALIDATE_URL,FILTER_FLAG_QUERY_REQUIRED);
echo $data;

echo "<br>";

$data = filter_var($_POST['user'], FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
echo $data;
echo "<br>";



$data = "<h1>Hello ą</h1>";
$data = string_checker($data);
echo $data."<br>";