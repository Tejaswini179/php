<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form action="basic_cal.php" method="get">
Enter 1st Nnumber :<input type="number" name="n1" >
Enter 2nd Nnumber :<input type="number" name="n2" >
<input type="submit">
</form>

<?php 
error_reporting (E_ALL ^ E_NOTICE);
echo $_GET["n1"] + $_GET["n2"];
?>

</body>
</html>