<?php

$mult = array( array(1,2,3),
               array(4,5,6),
               array(7,8,9)
              );

  for($i = 0 ; $i <count($mult); $i++){
    for($j = 0; $j < count($mult[$i]); $j++){
        echo $mult[$i][$j];
        echo " ";
    }
    echo "<br>";
  }            

?>