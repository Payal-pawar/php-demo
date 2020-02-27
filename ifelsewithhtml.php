<?php
    $marks = 75;    
    $sal = 100;

    /**
     * Invalid
     * 1000-0 Lower
     * 1000-5000 E
     * 5000-10000 D
     * 10000-15000 C
     * 15000-20000 B
     * 20000-25000 A
     * 25000 and Above A+
     */
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Demo If</title>
    </head>

    <body>
        <?php if(100>=$marks && $marks>=80):?>
        <div>
            <span style="color:green">A</span>
        </div>
        <?php elseif(80>$marks && $marks>=70):?>
        <div>
            <span style="color:#c4c700">B</span>
        </div>
        <?php elseif(70>$marks && $marks>=50):?>
        <div>
            <span style="color:rgb(2, 168, 190)">C</span>
        </div>
        <?php elseif(50>$marks && $marks>=35):?>
        <div>
            <span style="color:rgb(128, 0, 49)">D</span>
        </div>
        <?php elseif(35>$marks && $marks>=0):?>
        <div>
            <span style="color:rgb(138, 10, 10)">Fail</span>
        </div>
        <?php else:?>
        <div>
            <span style="color:tomato">Invalid</span>
        </div>
        <?php endif;?>
    </body>

    </html>