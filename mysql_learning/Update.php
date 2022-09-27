<?php

$conn = mysqli_connect("localhost","root","","mydb");

if(!$conn){
    die("not connected with db "." ".mysqli_connect_error());
}
else{
    echo "connected with db !!!!!!!";
}

$sql = "UPDATE myguests SET id = 4 WHERE LASTNAME = 'aaa'";

if(mysqli_query( $conn, $sql)){
echo "Data updated !!!";
}
else{
    echo "not updated !!!!!";
}


?>