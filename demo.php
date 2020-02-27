<?php
$a=123456;
$sum=0;
$rem=0;

while((int)$a!=0)
{
    $rem=$a%10;
    $sum=$sum+$rem;
    $a=$a/10;
}
echo "sum of given number 123456 => " . $sum . "<br>";
?>