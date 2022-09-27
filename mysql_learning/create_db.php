<?php

$conn = mysqli_connect("localhost","root","");

if(!$conn){
    die("not connected with db". mysqli_connect());
}
else{
  echo "Connected scuessfully";
}

$sql = "CREATE DATABASE mydb";

if(mysqli_query($conn,$sql)){
    echo"database created";
}
else{
    echo "not created";
}

?>