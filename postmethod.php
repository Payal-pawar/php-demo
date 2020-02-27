<?php

    if(!empty($_POST)){
        foreach($_POST as $k => $v){
            echo "$k => $v <br>";
        }
    }
    
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
    <form method="post" action="<?=$_SERVER['PHP_SELF']?>">
        <div>
            <input type="text" name="firstname">
        </div>
        <div>
            <input type="text" name="lastname">
        </div>
        <div>
            <input type="submit" name="submit" value="submit">
        </div>
    </form>
</body>

</html>
