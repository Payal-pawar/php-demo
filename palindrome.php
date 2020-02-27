<?php

$data = "ABBA";

$i = 0;
$pal = false;
$len = (int)(strlen($data)/2);

while($len > 0){
    if($data[$i] == $data[$len-1]){
        $pal = true;
        $len--;
        $i++;
    }else{
        $pal = false;
        break;
    }
}


if($pal){
    echo $data . " is palindrom!";
}else{
    echo $data . " isnot palindrom!";
}
?>