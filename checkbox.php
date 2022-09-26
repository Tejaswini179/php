


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="checkbox.php" method="post">
   Apples :  <input type="checkbox" name="fruits[]" value="Apples"><br>
   Oranges :<input type="checkbox" name="fruits[]"  value="oranges"><br>
   Kiwi : <input type="checkbox" name="fruits[]" value="kiwi">
    <br>
    <input type="submit">
</form>

<?php
error_reporting (E_ALL ^ E_NOTICE);
$fruits = $_POST["fruits"];
echo $fruits[1]
?>

</body>
</html>