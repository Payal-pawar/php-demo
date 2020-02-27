<?php
//global
$d = 10;
$r = 10;

function demo(){
    //global var
    global $d;/// using gloabal var in function
    $d = 89;
    echo $d . "<br>";
    //superglobal variable
    $GLOBALS['r'] = 50;
    echo $GLOBALS['r']."<br><br>";
}

function demo2(){
    $d = 20; /// local variable
    echo $d . "<br>";
}

demo2();
demo();

echo "$r<br><br>";
//// static
echo "<br><br><br><br>";
function counter(){
    static $count = 0;
    $count++;
    echo $count."<br>";
}
counter();

counter();

counter();


/**
 * server variable
 *  $_SERVER
 *  $_POST
 *  $_GET
 */


 var_dump($_SERVER);

 var_dump($_GET);

 var_dump($_POST);