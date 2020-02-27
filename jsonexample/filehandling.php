<?php
/***
 * r w a
 * r+ w+ a+
 */
// $data = fopen('sample.txt','w');
// fwrite($data,"sumit");
// fclose($data);
$data = fopen('sample.txt','r');
$string = fread($data,filesize("sample.txt"));
echo $string;
fclose($data);