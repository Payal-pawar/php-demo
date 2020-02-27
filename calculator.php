<?php
$first_num = 20;
$second_num = 20;
$ch = "==";
$result = 0;
if (is_numeric($first_num) && is_numeric($second_num)) {
    switch ($ch) {
        case "+":
           $result = $first_num + $second_num;
            break;
        case "-":
           $result = $first_num - $second_num;
            break;
        case "*":
            $result = $first_num * $second_num;
            break;
        case "/":
            $result = $first_num / $second_num;
            break;
        case "%":
                $result = $first_num % $second_num;
        break;
        case ">":
            if($first_num>$second_num){
                echo "$first_num is greather than $second_num";
            }    
            else{
                echo "$first_num is less than $second_num";
            }
        break;
        case "<":
            if($first_num<$second_num){
                echo "$first_num is less than $second_num";
            }    
            else{
                echo "$first_num is greather than $second_num";
            }
        break;
        case ">=":
            if($first_num>=$second_num){
                echo "$first_num is grather than or equal to $second_num";
            }    
            else{
                echo "$first_num is less than $second_num";
            }
        break;
        case "<=":
            if($first_num<=$second_num){
                echo "$first_num is less than $second_num";
            }    
            else{
                echo "$first_num is greather than $second_num";
            }
        break;
        case "==":
            if($first_num == $second_num){
                echo "$first_num is equal to $second_num";
            }    
            else{
                echo "$first_num is not equal to $second_num";
            }
        break;
        case "**":
            $result = $first_num ** $second_num;
    break;
}
}
 echo "subtration number is:".$result;
?>
