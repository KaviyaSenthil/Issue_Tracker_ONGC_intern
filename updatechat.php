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
$qry=mysqli_query($con,"SELECT * FROM issue WHERE Issue_no='$Issue_no'") or die("Query not obtained".mysqli_error($con));
$row = mysqli_fetch_array($qry);
$red=$row['Request_Date'];
$reb=$row['Request_given_by'];
$de=$row['Department'];
$_SESSION["red"]=$red;
$_SESSION["reb"]=$reb;
$_SESSION["de"]=$de;
$_SESSION["issue"]=$Issue;
header("Location:updatechat2.php?");
mysqli_close($con);
?>