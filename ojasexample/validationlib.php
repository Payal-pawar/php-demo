<?php
$rules = [
        'title'=>['type'=>'string','list'=>['Mr','Mrs','Ms','Dr']],
        'fname'=>['type'=>'string'],
        'lname'=>['type'=>'string'],
        'fhname'=>['type'=>'string'],
        'mname'=>['type'=>'string'],
        'dob'=>['type'=>'date'],
        'gender'=>['type'=>'string','list'=>['Male','Female']],
        'marital_status'=>['type'=>'string','list'=>['Married','Unmarried']],
        'category'=>['type'=>'string','list'=>['open','handicap','sebc','sc','st']]
];
        // [
        //     'pre_address'=>['type'=>'string'],
        //     'state'=>['type'=>'string','list'=>['Gujarat','Delhi','Assam','bihar','goa','daman & diu','haryana','kerala','jharkhand','orissa']],
        //     'district'=>['type'=>'string','list'=>['Ahmedabad','Bharuch','vadodara','anand','surat','rajkot','bhavnagar','dahod']],
        //     'taluka'=>['type'=>'string'],
        //     'pincode'=>['type'=>'int'],
        //     'mob'=>['type'=>'int'],
        //     'email'=>['type'=>'string']
        // ];

function dateChecker($data){
    if(!empty($data)){
        $date = date('Y-m-d',strtotime($data));
        return $date;
    }
    return false;
}

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
    $data = filter_var($_POST['pincode'],FILTER_VALIDATE_INT);
    $data = filter_var($_POST['mob'],FILTER_VALIDATE_INT);
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
    $data = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
    $data = filter_var($_POST['email'],FILTER_VALIDATE_EMAIL);
    if(empty($data))
    {
        return false;
    }
    return $data;
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
        case 'date':
            $ans = dateChecker($data);
            var_dump($ans);
            break;
        case 'email':
            $ans=email_checker($data);
            var_dump($data);
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