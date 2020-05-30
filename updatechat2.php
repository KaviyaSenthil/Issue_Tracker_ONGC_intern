<?php
$host='localhost';
$user='root';
$pass='';
$db='database';
$con=mysqli_connect($host,$user,$pass,$db) or die("database not connected");
session_start();
$Issue_no=$_SESSION["issno"];
$en=$_SESSION["epname"];
$act=$_SESSION["act"];
$con=mysqli_connect($host,$user,$pass,$db) or die("database not connected");
$red=$_SESSION["red"];
$reb=$_SESSION["reb"];
$de=$_SESSION["de"];
$qry=mysqli_query($con,"INSERT INTO chat(Issue_no,Request_given_date,request_given_by,Action_description,Replied_date,replied_by,Department) VALUES('$Issue_no','$red','$reb','$act',NOW(),'$en','$de')") or die("Query not obtained".mysqli_error($con));
echo "hello";
header("Location:solveissue.php?id=$Issue_no");?>