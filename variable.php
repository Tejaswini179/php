

<?php
 $x = 10;
 $y = 15;

 function mytest(){
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
 }
 mytest();
 echo $y;
?>