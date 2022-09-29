<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form>
    Color : <input type="text" name = "color"><br>
    NAme : <input type="text" name="name"><br>
    <input type="submit">
</form>

<?php
error_reporting (E_ALL ^ E_NOTICE);
$name = $_GET["name"];
$color = $_GET["color"];

echo "Hello $name <br>";
echo "$color bag <br>"
?>
</body>
</html>