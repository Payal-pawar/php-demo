<?php
$first_num = 20;
$second_num = 3;
$ch = "*";
$result = 0;   
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Demo calculator</title>
    </head>

    <body>
        <?php if(is_numeric($first_num) && is_numeric($second_num)):?>
        <?php switch($ch):
            case "+":?>
        <div>
            <span style="color:green">
       <?php $result = $first_num + $second_num;
        echo "Answer is = >".$result;?></span>
        </div>
        <?php break;
            case "-":?>
        <div>
            <span style="color:red">
       <?php $result = $first_num - $second_num;
        echo "Answer is = >".$result;?></span>
        </div>
        <?php break;
            case "*":?>
        <div>
            <span style="color:teal">
       <?php $result = $first_num * $second_num;
        echo "Answer is = >".$result;?></span>
        </div>
        <?php break;
            case "/":?>
        <div>
            <span style="color:blue">
       <?php $result = $first_num / $second_num;
        echo "Answer is = >".$result;?></span>
        </div>
        <?php break;
            case "%":?>
        <div>
            <span style="color:orange">
       <?php $result = $first_num % $second_num;
        echo "Answer is = >".$result;?></span>
        </div>
        <?php break;
            case ">":?>
        <div>
            <span style="color:violet">
        <?php if($first_num>$second_num):?>
       <?php echo "$first_num is greather than $second_num";?>
       <?php else:?>
        <div>
            <span style="color:tomato">Invalid</span>
            <?php echo "$first_num is not greather than $second_num";?>
        </div>
        <?php endif;?>
        </span>
        </div>

        <?php break;
            case "<":?>
        <div>
            <span style="color:crimson">
        <?php if($first_num<$second_num):?>
       <?php echo "$first_num is less than $second_num";?>
       <?php else:?>
        <div>
            <span style="color:tomato">Invalid</span>
            <?php echo "$first_num is not less than $second_num";?>
        </div>
        <?php endif;?>
        </span>
        </div>

        <?php break;
            case ">=":?>
        <div>
            <span style="color:darkmagenta">
        <?php if($first_num>=$second_num):?>
       <?php echo "$first_num is grather than euqal to $second_num";?>
       <?php else:?>
        <div>
            <span style="color:tomato">Invalid</span>
            <?php echo "$first_num is less than $second_num";?>
        </div>
        <?php endif;?>
        </span>
        </div>

        <?php break;
            case "<=":?>
        <div>
            <span style="color:indigo">
        <?php if($first_num<=$second_num):?>
       <?php echo "$first_num is less than euqal to $second_num";?>
       <?php else:?>
        <div>
            <span style="color:tomato">Invalid</span>
            <?php echo "$first_num is grather than $second_num";?>
        </div>
        <?php endif;?>
        </span>
        </div>
        <?php break;
            case "==":?>
        <div>
            <span style="color:chocolate;">
        <?php if($first_num==$second_num):?>
       <?php echo "$first_num is euqal to $second_num";?>
       <?php else:?>
        <div>
            <span style="color:tomato">Invalid</span>
            <?php echo "$first_num is not equal to $second_num";?>
        </div>
        <?php endif;?>
        </span>
        </div>

        <?php break;
            case "**":?>
        <div>
            <span style="color:orange">
       <?php $result = $first_num ** $second_num;
        echo "Answer is = >".$result;?></span>
        </div>
        
        <?php break;
            default:?>
        <div>
            <span style="color:tomato">Invalid choice</span>
        </div>
        <?php endswitch?>
        <?php endif;?>
    </body>

    </html>