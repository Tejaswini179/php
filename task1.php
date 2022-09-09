<?php 
error_reporting (E_ALL ^ E_NOTICE);

$conn = new mysqli("localhost","root","","task1") or die("Unable To Connect");
// if($conn) echo "Connected successfully";

$sql ="INSERT INTO User1(First_Name,Last_Name,DOB,Email) VALUES('".$_POST ['First_Name']."','".$_POST['Last_Name']."','".$_POST['DOB']."','".$_POST['Email']."')";
$conn ->query($sql);

$sql = "SELECT * FROM User1 ";
$result = $conn->query($sql);
$conn->close();

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

        .container{
            border: 5px solid black;
            text-align: center;
            padding : 10px;
            padding-bottom : 2px;
            display : grid;
            grid-gap : 2px;
            margin-bottom:15px;
            margin : 15px;
        }
        input{
            margin-top:15px;
            font-size : 15px;
            padding : 5px;
            width : 500px;
           
          
        }
        
        #btn{
            margin-top:15px;
            width : 200px;
            background-color : gray;
            color : White;
            border : none;
        }
        
        th{
            background-color : gray; 
        }

        .container-table{
            text-align: center;
            align-item : center;
        }
      
    </style>

</head>
<body >
<div class="container">
<form action="task1.php" method="post">

First Name: <input type="text"   name="First_Name" placeholder="Please Enter Your First Name"><br>
Last Name: <input type="text" name="Last_Name" placeholder="Please Enter Your Last Name"><br>
Date Of Birth: <input type="date" name="DOB" /><br>
E-mail: <input type="text" name="Email" placeholder="Please Enter Your Email"><br>
<input id="btn" type="submit">
<br><br>
</form>

</div>
<div class="container-table">
        <table>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Date Of Birth</th>
                <th>Email</th>
            </tr>
  
            <?php
           
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
           
                <td><?php echo $rows['First_Name'];?></td>
                <td><?php echo $rows['Last_Name'];?></td>
                <td><?php echo $rows['DOB'];?></td>
                <td><?php echo $rows['Email'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
        </div>

</body>

</html>