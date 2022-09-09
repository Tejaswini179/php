<?php
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
?>
<br>

<!-- PHP Indexed Arrays -->
<?php
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?>
<br>

<!-- Loop Through an Indexed Array -->
<?php
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
  echo $cars[$x];
  echo "<br>";
}
?>
<br>

<!-- PHP Associative Arrays -->