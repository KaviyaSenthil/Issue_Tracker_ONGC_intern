<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="refresh" content="60" >
<style>
.vertical-menu {
  width: 150px;
 
}

.vertical-menu a {
  background-color: #eee;
  color: black;
  display: block;
  padding: 12px;
  text-decoration: none;
}

.vertical-menu a:hover {
  background-color: #ccc;
}

.vertical-menu a.active {
  background-color: #4CAF50;
  color: white;
}
h1{ 
font-size:50px;
align:center;
}
h3{
	font-size:25px;
	align:centre;
}
.top
{background-color:lightblue;
    align:center;
	padding: 0.35px;

	text-align:center;
	}
body{text-align:center;
background-color:lightgrey;}
</style>
</head>
<body>
<div class="top">
<table width="100%" padding="0px" >
<td>
<img src="ONGC.jpg" alt="ONGC logo" height="100px" width="100px"/>
</td>

<td>
<pre>
<h1>           ISSUE TRACKER RCC</h1>
</pre>
</td>
<td>
<?php
session_start();
if(isset($_SESSION["epname"])){
echo "<h3>Welcome ".$_SESSION["epname"]."</h3>";}?>
</td>
</table>
</div>
<table align="centre" cellpadding="5" cellspacing="5"  width="100%"   >
<td>
<div class="vertical-menu">

  <a href="#" class="active">MENU</a>
  <a href="createissue.php" target="left" class="GFG"> 
        Create issue
    </a>
 
	<a href="checksolution.php" target="left" class="GFG"> 
           Check/Confirm/Req Solution
    </a>
	  <a href="viewissue.php" target="left" class="GFG"> 
       History
    </a>
	  <a href="welcome.php" target="left" class="GFG"> 
       Back
    </a>
	  <a href="logout.php" target="left" class="GFG"> 
       Logout
    </a>
	</div>
	</td>
	<td>

<div class="select"><h2>
<?php
if(isset($_GET['id'])){
echo "<h2>Issue_no ".$_GET['id']." has been solved</h2>";
}

?>

<h2>Select the issue to solve</h2>
<?php

$host='localhost';
$user='root';
$pass='';
$db='database';
$con=mysqli_connect($host,$user,$pass,$db)or die("failed to connect");
$depar=$_SESSION["dep"];
mysqli_select_db($con,"database")or die("no database");
$qry=mysqli_query($con,"SELECT * FROM issue WHERE Status LIKE 'Pending' AND Department LIKE '$depar' AND Solutionstatus LIKE 'Unsolved'") or die("Qyery not obtained");
?>
<table border='1' text-align='center' border-style='groove' >
<tr>
<th>Issue_no</th>
<th>Issue_Description</th>
<th>Department</th>
<th>Request_Date</th>
<th>Request_given_by</th>
<th>Status</th>
<th>Action_taken_description</th>
<th>Action_taken_by</th>
<th>Action_taken_Date</th>
<th>Solution Status</th>
<th>Want to solve?</th>

</tr>
<?php
while($row = mysqli_fetch_array($qry))
{
echo "<tr>";
echo "<td>" . $row['Issue_no'] . "</td>";
echo "<td>" . $row['Issue_Description'] . "</td>";
echo "<td>" . $row['Department'] . "</td>";
echo "<td>" . $row['Request_Date'] . "</td>";
echo "<td>" . $row['Request_given_by'] . "</td>";
echo "<td>" . $row['Status'] . "</td>";
echo "<td>" . $row['Action_taken_description'] . "</td>";
echo "<td>" . $row['Action_taken_by'] . "</td>";
echo "<td>" . $row['Action_taken_Date'] . "</td>";
echo "<td>" . $row['Solutionstatus'] . "</td>";
$is_no=$row['Issue_no'];?>
<td>
<form action="checksolve.php" method="post" name="alterissue"><input type="submit" name="submit" value="CHECK"/><input type="hidden" name="is_no" value="<?php echo $is_no;?>"/></form></td>

<?php
echo "</tr>";
}
echo "</table>";
?>

</div>
</td>
</table>
</body>
</html>