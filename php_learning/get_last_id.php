<?php
error_reporting (E_ALL ^ E_NOTICE);

$conn = mysqli_connect("localhost","root","","mydb");

if(!$conn){
    die("error:".mysqli_connect_error());
}
else{
    echo "Connect successfuly";
}


$sql = "INSERT INTO myguests(firstname,lastname,email) VALUES('Jhon','Doe','jhon@gmail.com') ";


if(mysqli_query($conn , $sql)){
    $last_id = mysqli_insert_id($conn);
    echo "New record created Successfully.  last inserted Id is : ".$last_id;
}
else{
    echo "error:" . mysqli_connect_error();
}
?>