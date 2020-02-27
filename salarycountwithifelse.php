<?php
$sal=15000;
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>

    <body>
       <?php if(25000<=$sal):?>
        <div>
            <span style="color:green">A+</span>
        </div>
        <?php elseif(25000>$sal && $sal>=20000):?>
        <div>
            <span style="color:#21c700">A</span>
        </div>
        <?php elseif(20000>$sal && $sal>=15000):?>
        <div>
            <span style="color:rgb(197, 228, 24)">B</span>
        </div>
        <?php elseif(15000>$sal && $sal>=10000):?>
        <div>
            <span style="color:rgb(128, 0, 49)">C</span>
        </div>
        <?php elseif(10000>$sal && $sal>=5000):?>
        <div>
            <span style="color:rgb(138, 10, 10)">D</span>
        </div>
        <?php elseif(5000>$sal && $sal>=1000):?>
        <div>
            <span style="color:rgb(17, 94, 196)">E</span>
        </div>

        <?php else:?>
        <div>
            <span style="color:tomato">Invalid</span>
        </div>
        <?php endif;?>

    </body>

    </html>