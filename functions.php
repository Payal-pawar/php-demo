<?php


//  * * * * * * * * * * * * * * 
//  *       Hello World       *
//  * * * * * * * * * * * * * *




function add(){
    echo "Hello  World!<br>";
}

add();


function addition($a = 0, $b = 0){
    echo "addition : ". ($a + $b), "<br>";
}

addition();
addition(10,20);

// default argument with type
// default -> int,float,string,array 
function sub(int $a = 0,int $b = 0){
    echo "addition : ". ($a - $b), "<br>";
}
sub();
sub(10,'20');



// function FunctionName(Type $var = null)
// {
//     # code...
// }


function display($choice = null)
{
    $d = 0;
    switch ($choice) {
        case 1:
            $d = 1;
            echo "Number<br>";
            break;
        case 'data':
            $d = 'string';
            echo "String<br>";
        break;
        case 'array':
            $d = ['id'=>1];
            echo "Array<br>";
        break;
        default:
            $d = 0.000;
            echo "Float<br>";
            break;
    }

    return $d;
}
var_dump(display());
var_dump(display(1));
var_dump(display('data'));
var_dump(display('array'));


function maxs($a,$b){
    if($a > $b){
        return $a;
    }elseif($b> $a){
        return $b;
    }else{
        echo "both Same<br>";
    }
}

var_dump(maxs(10,20));
var_dump(maxs(20,10));
var_dump(maxs(10,10));

// call back in php
function operation($a = 0,$b = 0,$op){
    $op($a,$b);
}

operation(10,20,addition);



if(!function_exists('operation')){
    // call back in php
    function operation($a = 0,$b = 0,$op){
        echo "<br>Function exits<br>";
        $op($a,$b);
    }
}else{
    echo "<br>Function already exits!<br>";
}

operation(10,20,sub);
