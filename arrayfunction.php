<?php
$data = [1,2,3,4,5,6,7,8,9,10];

function even_filter(int $var){
    return ($var%3 == 0);
}

var_dump(array_filter($data,"even_filter"));
echo "<br>";

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$result=array_flip($a1);
print_r($result);

echo "<br>";
$a1=array_fill(3,4,"blue");
print_r($a1);


echo "<br>";

$keys=array("a","b","c","d");
$a1=array_fill_keys($keys,"blue");
print_r($a1);


$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");
echo "<br>";

$result=array_intersect($a2,$a1);
print_r($result);


$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"red","b"=>"green","c"=>"blue");

echo "<br>";
$result=array_intersect_assoc($a1,$a2);
print_r($result);


$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("a"=>"red","c"=>"blue","d"=>"pink");

echo "<br>";
$result=array_intersect_key($a1,$a2);
print_r($result);



$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("a"=>"red","b"=>"green","e"=>"blue");
echo "<br>";

function key_filter($a,$b){
   // echo " ". $a ."  " .$b . "<br>";
    if($a === 'a' || $b === 'b'){
        return 0;
    }
    return ($a > $b)? 1 : -1;
    
}

$result=array_intersect_uassoc($a1,$a2,"key_filter");
print_r($result);


// without custom param
function myfunction($v)
{
  return $v ** 2;
}
echo "<br>";

$a=array(1,2,3,4,5);
print_r(array_map("myfunction",$a));

$data = 5;
$data2 = 2;
// use key for external param
$myfunction2 = function($v) use ($data,$data2){
  return $v * $data * $data2;
};
echo "<br>";

$a=array(1,2,3,4,5);
print_r(array_map($myfunction2,$a));

$fname=array("Peter","Ben","Joe");
$age=array(array("age" => "35","gender"=>"male"),"37","43");

echo "<br>";
$c=array_combine($fname,$age);
print_r($c);

$a1=array("a"=>"red","b"=>"green");
$a2=array("a"=>"blue","b"=>"yellow");
print_r(array_merge_recursive($a1,$a2));


$a=array("Dog","Cat","Horse","Bear","Zebra");
array_multisort($a);
print_r($a);


$a=array("red","green","blue");
array_pop($a);
print_r($a);


$a=array("red","green");
print_r(array_pad($a,6,"blue"));


$a=array(5,5,6,6,7,5);
echo(array_product($a));


$a=array("red","green","blue","yellow","brown");
$random_keys=array_rand($a,3);
echo $a[$random_keys[0]]."<br>";
echo $a[$random_keys[1]]."<br>";
echo $a[$random_keys[2]];




function myfunction3($v1,$v2)
{
return $v1 . "-" . $v2;
}
$a=array("Dog","Cat","Horse");
print_r(array_reduce($a,"myfunction3"));

echo "<br>";

function prod($v1,$v2)
{
return (($v1==0)?1:$v1) * $v2;
}
$a=array(1,3,5,7,0);
print_r(array_reduce($a,"prod"));


