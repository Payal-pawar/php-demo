<?php
//indexed array
$data = [1,2,3];
var_dump($data);
echo "<br>";

$data = array(1,"sumit",11);
var_dump($data);
echo "<br>";

//key-value pair [jugged array/ associative array]
$data = ["id"=>1];
var_dump($data);
echo "<br>";

$data['name'] = "sumit";
var_dump($data);
echo "<br>";

$data = array("id"=>1);
var_dump($data);
echo "<br>";

$data['name'] = "sumit";
var_dump($data);
echo "<br>";

$data['age'] = 11;
var_dump($data);
echo "<br>";

var_dump(is_array($data));
echo "<br>";

var_dump(empty($data));
echo "<br>";

var_dump(isset($data['fees']));
echo "<br>";
?>


<ul>
<?php
// foreach
foreach($data as $k => $v){
    echo "<li>". $k . " => ". $v ."</li>";
}
?>
</ul>
<?php

$a1=array_fill(0,4,"");
var_dump($a1);
echo "<br>";

var_dump(array_keys($data));
echo "<br>";

var_dump(array_key_exists('fees',$data));
echo "<br>";
/**
 * php >=7.3
 * 
 */
//var_dump(array_key_first($data));
//var_dump(array_key_last($data));

var_dump(in_array('sumit',$data));
echo "<br>";

var_dump(key($data));
echo "<br>";
/**
 * 
 * sorting
 * indexed array
 * sort()
 * rsort()
 * 
 * associative array
 * asort();
 * arsort();
 * ksort();
 * krsort();
 */

 $data = [1,2,3,4,5,6,7,8,9];
 rsort($data);
 var_dump($data);
echo "<br>";

 sort($data);
 var_dump($data);
echo "<br>";

 $data = ['id' => 1, 'name' => 'sumit', 'age' => 22];

 asort($data);
 var_dump($data);
echo "<br>";

 arsort($data);
 var_dump($data);
echo "<br>";

 ksort($data); 
 var_dump($data);
echo "<br>";

 krsort($data); 
 var_dump($data);
 echo "<br>";
?>


<table>
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>AGE</th>
    </tr>
    <tr>
        <td>1</td>
        <td>SUMIT</td>
        <td>11</td>
    </tr>
</table>