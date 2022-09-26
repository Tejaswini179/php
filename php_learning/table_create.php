<?php

$conn = mysqli_connect("localhost","root","","mydb");

if(!$conn){
    die("not cpnnect with db" . mysqli_connect_error());
}
else{
    echo "Connected successfully !!!!!!!!!";
}


$sql = "CREATE TABLE MyGuests(id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY, firstname VARCHAR(20) NOT NULL, lastname VARCHAR(20) NOT NULL, email VARCHAR(50), reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP)";

if(mysqli_query($conn, $sql)){
    echo "Table  MyGuests create sucessfully !!!!!!";
}
else{
echo "not created table". mysqli_error($conn);
}

?>