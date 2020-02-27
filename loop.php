<?php

$age = 2000;

while($age < 18){
    echo $age."<br>";
    $age++;
}

$age = 2000;

do{
    echo $age."<br>";
    $age++;
}while($age < 18);


/***
 * 
 * 123456
 * multi
 * 1*2*3*...6
 * 
 * 1. sum of given numbers
 * 2. mul of first and last digit of a given number
 *      ex. 123456 => 1*6 = 6
 * 
 * 3. palindrome -> aba abba 1221 12121
 */
$a = 625;
$mul = 1;
while($a>1){
    $mul = $mul * ($a%10);
    $a = $a / 10;
}

echo "mul of given number 123456 => " . $mul . "<br>";