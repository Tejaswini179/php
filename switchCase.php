<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="switchCase.php" action="post">
<input type="text" name="grade">
<input type="submit">
</form>

<?php
error_reporting (E_ALL ^ E_NOTICE);
$grade = $_GET["grade"];

switch($grade){
    case "A" : echo "You did Amazing !!!";
    break;

    case "B" : echo "You did pretty Good ...";
    break;

    case "C" : echo "You did poorly";
    break;

    case "D" : echo "You did very bad";
    break;

    case "F" : echo "You Fail ";
    break;

    default : echo "Invalid Grade";
    break;
}

?>

</body>
</html>