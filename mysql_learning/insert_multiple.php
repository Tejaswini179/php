<?php

$conn = mysqli_connect("localhost","root","","mydb");
if(!$conn){
    die("not connect with db....". mysqli_connect_error());
}
else{
    echo "connected";
}

$sql =  "INSERT INTO myguests(firstname,lastname,email) VALUES('abc','aaa','a@gmail.com');";
$sql .= "INSERT INTO myguests(firstname,lastname,email) VALUES('bac','bbb','b@gmail.com');";
$sql .= "INSERT INTO myguests(firstname,lastname,email) VALUES('cba','ccc','c@gmail.com');";

if(mysqli_multi_query($conn,$sql)){
    echo "Inserted mulitple record into the table";
}
else{
    echo (mysqli_error($conn));
}

?>