<?php
$a=625;
$mul=1;
$fdigit=$mul*($a%10);

while($a>9){
    $ldigit =$mul*($a%10);
    $a=(int)($a/10);
}
$mul=$fdigit*$a;

echo "mul of given number of first and last digit => " . $mul . "<br>";
?>