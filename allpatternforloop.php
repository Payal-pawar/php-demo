<?php
$n=5;

/* First Pattern */
for ($i=0; $i < 5; $i++) { 
    for ($j=0; $j <= $i; $j++) { 
        echo "*";
    }
    echo "<br>";
}
echo "<br>";
echo "<br>";
 /* Second Pattern*/
echo "<pre>";
for ($i=0; $i < 5; $i++) { 
    for ($k=5-$i; $k>1; $k--) { 
        echo " ";
    }
    for ($j=0; $j <= $i; $j++) { 
        echo "*";
    }
    echo "<br>";
}
echo "</pre>";


/* Third Pattern*/
echo "<br>";
echo "<br>";

echo "<pre>";
for ($i=5; $i>=1; $i--) { 
    for ($k=1; $k<=5-$i; $k++) { 
        echo " ";
    }
    for ($j=1; $j<=$i; $j++) { 
        echo "* ";
    }
    echo "<br>";
}
echo "</pre>";

/* Fourth Pattern*/
echo "<br>";
echo "<br>";

echo "<pre>";
for($i=1;$i<=5;$i++){
    for($k=1;$k<=5-$i;$k++){
        echo " ";
    }
    for($j=1;$j<=$i;$j++){
        echo "* ";
    }
    echo "<br>";
}
for($i=5-1;$i>=1;$i--){
    for($k=1;$k<=5-$i;$k++){
        echo " ";
    }
    for($j=1;$j<=$i;$j++){
        echo "* ";
    }
    echo "<br>";
}
echo "</pre>";

/*Fifth Pattern*/
echo "<br>";
echo "<br>";

echo "<pre>";
for($i=1; $i<=5; $i++)
    {
        for($j=1; $j<$i; $j++)
        {
            printf(" ");
        }

        for($j=1; $j<=5; $j++)
        {
            printf("*");
        }
        echo "<br>";
    }
    echo "</pre>";
?>