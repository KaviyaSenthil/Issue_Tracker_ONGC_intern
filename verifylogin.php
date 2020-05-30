<?php
$host='localhost';
$user='root';
$pass='';
$db='database';
$con=mysqli_connect($host,$user,$pass,$db)or die("failed to connect");
mysqli_select_db($con,"database")or die("no database");
$uid=$_POST['User_id'];
$pas=$_POST['Password'];
$qry=mysqli_query($con,"SELECT * FROM login WHERE User_id='$uid'");

if($qry)
	{$row=mysqli_fetch_array($qry);
    if($uid==$row['User_id'])
		if($uid=='' || $pas=='')
			header("Location:loginpage.php?id=Some fields are empty");
		else if($uid==$row['User_id']&&$pas==$row['Password'])
		{ $empname=$row['Employee_name'];
			session_start();
            $_SESSION["CPFNO"]=$uid;
			$_SESSION["epname"]=$empname;
			$d=$row['Group'];
			$_SESSION["dep"]=$d;
		
		    header("Location:welcome.php");}
		else
			header("Location:loginpage.php?id= user id or password is wrong");
	else
		echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}
else
	header("Location:loginpage.php?id= user id not available");
	

?>