<?php
function pattern($r = 0, $c = 0){
  for ($row = 0; $row <= $r; $row++)
  {
   for ($col = 0; $col <= $row; $col++)
    {
     echo '* ';
     
    }
     echo "</br>";
  }
}




pattern(6,6);
function messageBox($message) {
  $len = strlen($message);

if($len%2 != 0){
  $len++;
}

  echo "<br><br><p>";
  for($i =0;$i<$len*2;$i++){
    echo "-";
  }
  echo "</p>";
  echo "<p>| ";
  if($len%2 != 0){
    for($i =0;$i<(int)(($len*2)/2);$i++){
      echo " ";
    }  
  }else{
    for($i =0;$i<(int)(($len*2)/2)-1;$i++){
      echo " ";
    }  
  }
  echo $message;
  if($len%2 != 0){
    for($i =0;$i<(int)(($len*2)/2);$i++){
      echo " ";
    }  
  }else{
    for($i =0;$i<(int)(($len*2)/2)-1;$i++){
      echo " ";
    }  
  }
  echo " |</p>";
  echo "<p>";
  for($i =0;$i<$len*2;$i++){
    echo "-";
  }
  echo "</p>";
}
        
messageBox("Hello");

?>