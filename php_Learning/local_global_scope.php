<?php

echo "Local And Global Variable Scope <br><br>";

 $a = 10;
$b = 20;

echo $a." ".$b;

function scope(){
    global $a;
    $a = 1;
    echo "<br>";
    echo $a;
    
}

scope();

echo "<br>";
echo $a;
?>