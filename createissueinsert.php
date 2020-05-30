<?php
$host='localhost';
$user='root';
$pass='';
$db='database';
$con=mysqli_connect($host,$user,$pass,$db) or die("database not connected");
session_start();
$Issue=$_POST['Issue'];
$Department=$_POST['Department'];
$CPF_no=$_SESSION["CPFNO"];

$qry=mysqli_query($con,"INSERT INTO issue(Issue_Description,Department,Request_given_by) VALUES('$Issue','$Department','$CPF_no')");
if($qry)
	header("Location:welcome.php?id=Issue Submitted");
else
	header("Location:welcome.php?id=Issue Submittion Failed Try again");


?>