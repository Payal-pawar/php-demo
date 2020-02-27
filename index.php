<?php
class Sample{


}

/// block based
echo "sumit 1<br>";

echo("Hello PHP!<br>");

echo 'Hello PHP2<br>';

print "sumit 1<br>";

print("Hello PHP!<br>");

print 'Hello PHP2<br>';

///variable

$s = "sumit";
var_dump($s);

$s = 123;
var_dump($s);

$s = 123.222;
var_dump($s);

$s = true;
var_dump($s);

$s = array();
var_dump($s);

$s = null;
var_dump($s);
?>

<!-- php expression syntax -->
<h1><?="Hello $s"?></h1>
<h1><?='Hello '.$s?></h1>

<?php

$s = new Sample();
var_dump($s);
?>
<ul>
    <li><a href="constant.php">Constant</a></li>
    <li><a href="numbers.php">Numbers</a></li>
    <li><a href="string.php">String</a></li>
    <li><a href="switchhtml.php">Switch Statement</a></li>
    <li><a href="salarycountwithifelse.php">Control Statement</a></li>
    <li><a href="calculator.php">Calculator</a></li>
    <li><a href="palindrome.php">Palindrome</a></li>
    <li><a href="loop.php">Loop</a></li>
    <li><a href="demo.php">Sum of given number</a></li>
    <li><a href="demo1.php">Sum of given number to first and last digit</a></li>
    <li><a href="loop2.php">For Loop</a></li>
    <li><a href="switchcalculatorhtml.php">Switch calculator</a></li>
    <li><a href="allpatternforloop.php">Looping Pattern</a></li>
    <li><a href="array.php">Array</a></li>
    <li><a href="arrayhtml.php">Arrayhtml</a></li>
    <li><a href="functions.php">Functions</a></li>
    <li><a href="functionpatternprint.php">Functions Pattern</a></li>
    <li><a href="arrayfunction.php">Array Functions</a></li>
    <li><a href="globals.php">Globals Variable</a></li>
    <li><a href="getmethod.php">Get Method</a></li>
    <li><a href="postmethod.php">Post Method</a></li>
    <li><a href="requestmethod.php">Request Method</a></li>
    <li><a href="requestmethod.php?action=postdata">Request Method</a></li>
    <li><a href="requestmethod.php?action=getdata">Request Method</a></li>
    <li><a href="formhandling.php">Form Action</a></li>
    <li><a href="login.php">User Login</a></li>
</ul>
