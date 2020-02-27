<?php
class Sample{


}
$d = new Sample();
if(!defined("HOSTNAME")) define("HOSTNAME","localhost"); else {echo "HOSTNAME is already in use!";die;}
define("PI",3.14);

// PHP 7<Above
define("STUDENT_DATA",array(1,2,3,4,5,6));

        
?>

<?=HOSTNAME?>
<?=PI?>

<?php
var_dump(STUDENT_DATA);
?>