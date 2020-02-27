<h1>For Loop</h1>
<?php
for ($i=0; $i < 10; $i++) { 
    echo $i."<br>";
}
?>

<h1>For Loop Pattern</h1>
<?php
for ($i=0; $i < 5; $i++) { 
    for ($j=0; $j <= $i; $j++) { 
        echo "*";
    }
    echo "<br>";
}
echo "<br>";
echo "<br>";
echo "<br>";


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

?>



<div>
<code>
    <pre>
    for ($i=0; $i < 5; $i++) { 
        for ($k=5-$i; $k>1; $k--) { 
            echo " ";
        }
        for ($j=0; $j <= $i; $j++) { 
            echo "*";
        }
        echo "<br>";
    }
    </pre>
</code>
</div>