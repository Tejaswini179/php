<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form action="input_from_user.php" method="get">

Name : <input type="text" name="name">
Email : <input type="email" name="email" >
<input type="submit">

</form>


<br>


<?php
echo $_GET["name"];
echo $_GET["email"]
?>

</body>
</html>
