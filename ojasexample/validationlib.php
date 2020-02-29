<?php
$rules = [
        'title'=>['type'=>'string','list'=>['Mr','Mrs']],
        'fname'=>['type'=>'string'],
        'lname'=>['type'=>'string'],
        'fhname'=>['type'=>'string'],
        'mname'=>['type'=>'string'],
        'gender'=>['type'=>'string','list'=>['Male','Female']],
        'maritalstatus'=>['type'=>'string','list'=>['Married','Unmarried']],
        'category'=>['type'=>'string','list'=>['open','handicap','sebc','sc','st']]
    ];
// $data = [
//     'title'=>$_POST['title'],
//     'fname'=>$_POST['fname'],
//     'lname'=>$_POST['lname'],
//     'fhname'=>$_POST['fhname'],
//     'mname'=>$_POST['mname'],
//     'gender'=>$_POST['gender'],
//     'maritalstatus'=>$_POST['maritalstatus'],
//     'category'=>$_POST['category']
// ];

function string_checker($data){
    $data = filter_var($data, FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
    $data = trim($data);// TRIM ONLY CAN BE REMOVE ON FIRST AND LAST SPACE IN LINE.
    if(empty($data)){
        return false;
    }
    return $data;
}

function list_checker($data,$list){
    $data = string_checker($data);

    if(!$data){
        return false;
    }
    if(in_array($data,$list)){
        return true;
    }
    return false;
}
function int_checker($data)
{
    $data = filter_var($_POST['pass'],FILTER_VALIDATE_INT);
    if(empty($data)){
        return false;
    }    
    return $data;
}

function ip_checker($data)
{
    $data = filter_var($_SERVER['REMOTE_ADDR'],FILTER_VALIDATE_IP);
    if(empty($data)){
        return false;
    }
return $data;
}
function email_checker($data)
{
    $data = filter_var($_POST['user'],FILTER_SANITIZE_EMAIL);
    $data = filter_var($_POST['user'],FILTER_VALIDATE_EMAIL);
    if(empty($data))
    {
        return false;
    }
    
}

function filterprocess($data,$type,$list = ""){
    switch ($type) {
        case 'string':
            $ans = string_checker($data);          
            var_dump($data);
            break;
        case 'list':
            var_dump($data);
            var_dump($list);
            $ans=list_checker($data,$list);
            break;
        default:
            break;
    }
    return $ans;
}

function validation($data){
    global $rules;
    foreach($data as $key => $val){

        if(!filterprocess($data[$key],$rules[$key]['type'],$rules[$key]['list'])){
            return false;
        }
    }
    return true;
}


//var_dump(validation($data));