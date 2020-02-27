<?php
    $month = strtolower('jan');    

    /**
     * Calculator
     * $a $b
     * $ch
     * +
     * -
     * *
     * /
     * %
     * >
     * <
     * >=
     * <=
     * ==
     * **
     * */
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Demo switch</title>
    </head>

    <body>
        <?php switch($month):
            case 'jan':?>
        <div>
            <span style="color:green">31 Days</span>
        </div>
        <?php break;
            case 'feb':?>
        <div>
            <span style="color:green">28/29 Days</span>
        </div>
        <?php break;
            default:?>
        <div>
            <span style="color:tomato">Invalid Month</span>
        </div>
        <?php endswitch?>
    </body>

    </html>