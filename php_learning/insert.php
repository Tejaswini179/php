<?php

$conn = mysqli_connect("localhost","root","","mydb");

if(!$conn){
    die("not connect" .mysqli_connect_error());
}
else{
    echo"not connected";
}

$sql = "INSERT INTO myguests(firstname,lastname,email) VALUES('Tejaswini','khengare','tejaswini@gmail.com')"; 

if(mysqli_query($conn, $sql)){
    echo("data inserted sucessfully !!!!");
}
else{
  echo ("---------not able to insert data into mydb table-----". mysqli_connect_error());
}
?>