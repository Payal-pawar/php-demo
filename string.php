<?php

// char array

$data = "'sumit'";
echo $data."<br>";
var_dump($data);
$data = '"sumit"';
echo $data."<br>";
var_dump($data);



$data = "\"sumit\"";
echo $data."<br>";
var_dump($data);
$data = '\'sumit\'';
echo $data."<br>";
var_dump($data);


$data = "<input type='text' name='data'>";
echo $data;

/***********
 * String Methods
 */

 $data = "sumit more";

 echo "<h1> strlen('$data') = ".strlen($data)."</h1>";
 echo "<h1> str_word_count('$data') = ".str_word_count($data)."</h1>";
 echo "<h1> strrev('$data') = ".strrev($data)."</h1>";
 echo "<h1> strpos('$data', 'more') = ".strpos($data,'more')."</h1>";
 echo "<h1> str_replace('more','MORE','$data') = ".str_replace('more','MORE',$data)."</h1>";

 
 echo "<h1> explode(' ','$data') = ".explode(" ",$data)."</h1>";

 echo("<pre>");
 print_r(explode(" ",$data));
 echo("</pre>");
 $a = explode(" ",$data);

 echo "<h1> implode('-','$a') = ".implode("-",$a)."</h1>";


 $data = "sumit";
 echo "<h1> md5('$data') = ".md5($data)."</h1>";
 echo "<h1> sha1('$data') = ".sha1($data)."</h1>";


 echo "This is some <b>bold</b> text.<br>";

 echo htmlspecialchars("This is some <b>bold</b> text.");


 echo "<h1>strcmp('Hello world!','Hello world!')=
 ".strcmp("Hello world!","Hello world!").'</h1>';

 echo "<h1>strstr('Hello world! Hello Sumit!','world') ".strstr("Hello world! Hello Sumit!","world")."</h1>";

 echo "<h1>ucfirst('hello world! hello sumit!') =".ucfirst('hello world! hello sumit!')."</h1>";

 echo "<h1>ucwords('hello world! hello sumit!') =".ucwords('hello world! hello sumit!')."</h1>";

 echo "<h1>trim('hello world! hello sumit!','helo') =".trim('hello world! hello sumit!','helo')."</h1>";

 echo "<h1>trim('                 sumit     more                            ') =".trim('                 sumit             more                              ')."</h1>";

 $data = "id:1 name:sumit age:11";

 sscanf($data,"id:%d name:%s age:%d",$id,$name,$age);

 var_dump($id,$name,$age);


 $data = sprintf("id:%d name:%s age:%d",$id,$name,$age);

 var_dump($data);