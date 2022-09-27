<?php

$conn = mysqli_connect("localhost","root","","mydb");

if(!$conn){
    die("not connected with db.." . mysqli_connect_error());
}
else{
    echo "Connected with Db !!!!!!!";
}


$sql = "SELECT firstname, lastname FROM myguests ORDER BY lastname ";
$res = mysqli_query($conn, $sql);

if(mysqli_num_rows($res) > 0){

    while($row = mysqli_fetch_assoc($res)){
        echo "First name:"." ".$row["firstname"]." "." "."Last Name:"." ".$row["lastname"]."<br>";
    }
}
else{
    echo"error";
}

?>