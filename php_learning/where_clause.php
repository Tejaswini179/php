<?php

$conn = mysqli_connect("localhost","root","","mydb");

if(!$conn){
    die(mysqli_connect_error());
}
// else{
//     echo "connected with db !!!!";
// }

$sql = "SELECT firstname, lastname FROM myguests where id > 2";
$res = mysqli_query($conn,$sql);

if(mysqli_num_rows($res)){
    while($row = mysqli_fetch_assoc($res)){
        echo "First Name:"." ".$row["firstname"]." ".$row["lastname"]."<br>";

    }
}
else{
    echo "error";
}

?>