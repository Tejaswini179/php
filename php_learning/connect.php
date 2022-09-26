<?php

$conn = mysqli_connect("localhost","root","","auth");

if(!$conn){
     die("Not connected with database". mysqli_connect_error());
}
else{
    echo "Connected with db !!!!!!!!!";
}

?>