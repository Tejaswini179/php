<?php

$servername = "localhost";
$username = "root";
$password = "";
$db= "task1";

 $conn = mysqli_connect($servername,$username,$password ,$db);

if($conn)
{
    echo "connected withn db";
}
else{
    echo "connection failed";
}
?>

