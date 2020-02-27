<?php
if(isset($_POST['delete'])){
    $filename = $_POST['filename'];
    $foldername = $_POST['filedir'];

    if(!empty($foldername) && !empty($filename) ){
        if(file_exists($foldername."\\".$filename)){
            if(unlink($foldername."\\".$filename)){
                echo $foldername."\\".$filename." Deleted";
            }else{
                echo $foldername."\\".$filename." Not Deleted";
            }
        }else{
            echo "File Not Found";
        }
    }else if(!empty($filename)){
        if(file_exists($filename)){
            if(unlink($filename)){
                echo $filename." Deleted";
            }else{
                echo $filename." Not Deleted";
            }
        }else{
            echo "File Not Found";
        }
    }else if(!empty($foldername)){
        if(file_exists($foldername)){
            if(rmdir($foldername)){
                echo $foldername." Deleted";
            }else{
                echo $foldername." Not Deleted";
            }
        }else{
            echo "Folder Not Found";
        }
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
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <input type="text" name="filename" placeholder="Enter file to delete"><br>
        <input type="text" name="filedir" placeholder="Enter folder to delete">
        <input type="submit" name="delete" value="Delete">
    </form>
</body> 
</html>