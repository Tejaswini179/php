<?php
error_reporting (E_ALL ^ E_NOTICE);
$arr = array("laptop","mouse","keyboard","CPU","printer");

// echo $arr[0];

foreach($arr as $value){
    echo $value;
    echo "<br>";
}

$arr1= array('abc'=>'red', 'bac' => 'green');
echo "<br>".$arr1['bac'];
echo "<br>";

foreach($arr1 as $key => $value )
{
echo "<br> Key is :".$key ." ". "value is:"." ".$value; 
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="Associate_Array.php" method="post">
    Please Enter Student Name : <input type="text" name ="student">
    <input type="submit">
</form>

<?php
error_reporting (E_ALL ^ E_NOTICE);

$grade= array("ram" => "B+", "sham" => "c+", "sita" => "A+", "gita" => "B-");

echo $grade[$_POST["student"]];
?>

</body>
</html>