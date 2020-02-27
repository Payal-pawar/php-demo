<?php

$n = 1000;
var_dump(is_int($n));

$n = 10.02;
var_dump(is_int($n));


$n = 1000;
var_dump(is_float($n));

$n = 10.02;
var_dump(is_float($n));


$n = 1.9e+309;
var_dump($n);

$n = acos(8);
var_dump(is_nan($n));
