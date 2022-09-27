<?php

$conn = mysqli_connect("localhost","root","","mydb");

if(!$conn){
    die(mysqli_connect_error());
}
// else{
//     echo "Connected with db !!!!!!";
// }

$sql = "SELECT id, firstname, lastname from myguests";
$res = mysqli_query($conn,$sql);

if(mysqli_num_rows($res)>0){
while($row = mysqli_fetch_assoc($res)){
    echo "id:" .$row["id"]." ". "-Name:"." ".$row["firstname"]." ".$row["lastname"]."<br>";
}
}
else{
    echo "0";
}

?>