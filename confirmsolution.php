<?php
$host='localhost';
$user='root';
$pass='';
$db='database';
$con=mysqli_connect($host,$user,$pass,$db)or die("failed to connect");
session_start();
mysqli_select_db($con,"database")or die("no database");
$uid=$_POST['is_no'];
$qry=mysqli_query($con,"UPDATE issue SET Status ='Completed' WHERE Issue_no =$uid")or die("Query  not connected".mysqli_error($con));
mysqli_close($con);
header("Location:checksolution.php?id= $uid Status updated");

?>
