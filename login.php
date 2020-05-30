<?php
$host='localhost';
$user='root';
$pass='';
$db='database';
$con=mysqli_connect($host,$user,$pass,$db);
if($con)
{echo "connected successfully to login database \n";}
$sql = "INSERT INTO login (User_id, Password, Employee_name) VALUES ('2000', '4567','Harini')";
if (mysqli_query($con,$sql)) {
    echo "New record created successfully\n";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);
?>
