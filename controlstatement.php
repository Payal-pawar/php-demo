<?php 
$a = 10;
$b = 20;
if($a > 10){
    echo "$a is greater than $b<br>";
}else{
    echo "$b is greater than $a<br>";
}

$marks = 50;


if(100>=$marks && $marks>=80){
    echo "A grade<br>";
}
else if(80>$marks && $marks>=70){
    echo "B grade<br>";
}
else if(70>$marks && $marks>=50){
    echo "C grade<br>";
}
else if(50>$marks && $marks>=35){
    echo "D grade<br>";
}
else if(35>$marks && $marks>=0){
    echo "Fail<br>";
}
else{
    echo "Invalid Data<br>";
}


$month = 'Jan';

switch ($month) {
    case 'Jan':
        echo "$month has 31 Days";
        break;
    case 'Feb':
        echo "$month has 28/29 Days";
        break;
    case 'Mar':
        echo "$month has 31 Days";
        break;
    case 'Apr':
        echo "$month has 30 Days";
        break;
    case 'May':
        echo "$month has 31 Days";
        break;
    case 'Jun':
        echo "$month has 30 Days";
        break;
    case 'Jul':
        echo "$month has 31 Days";
        break;
    default:
       echo "$month is invalid.";
        break;
}