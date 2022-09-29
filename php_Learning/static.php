<!-- Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.

To do this, use the static keyword when you first declare the variable: -->

<?php

function s(){
    static $x = 10;

    $x++;
    echo $x;
}
s();
s();
s();
?>