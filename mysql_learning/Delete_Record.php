<?php
$conn = mysqli_connect("localhost","root","","mydb");

if(!$conn){
    die("not connected with db..."." ".mysqli_connect_error());
}
else{
    echo " connected with db !!!!!!";
}


$sql = "DELETE FROM myguests WHERE id = 9";

if(mysqli_query( $conn, $sql)){
echo"record deleted successfully !!!!!";
}
else{
echo "record not deleted !!!!!!!";
}

?>