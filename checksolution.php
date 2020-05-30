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
}
h3{
	font-size:25px;
}
.top
{background-color:lightblue;
    align:center-left;
	padding: 0.35px;

	text-align:center;
	}
body{align:center;
background-color:lightgrey;}
.select
{   
    align:center-left;
	padding: 0.35px;
	margin-top: 150px;
	margin-left:350px;
	margin-right:350px;
	text-align:center;

}
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
 
	<a href="solveissue.php" target="left" class="GFG"> 
           Solve issue
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

<h2 align="center">
Solution for your issues
</h2>
<?php
$host='localhost';
$user='root';
$pass='';
$db='database';
$con=mysqli_connect($host,$user,$pass,$db)or die("failed to connect");
$depar=$_SESSION["dep"];
$ui=$_SESSION["CPFNO"];

mysqli_select_db($con,"database")or die("no database");
$sql=
$qry=mysqli_query($con,"SELECT * FROM issue WHERE Status LIKE 'Pending' AND Request_given_by LIKE '$ui' and Solutionstatus LIKE 'Solved'") or die("Qyery not obtained".mysqli_error($con));
echo "<table border='2' align='center' border-style='groove' >
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
<th>Solutionstatus</th>
<th>Check solutions</th>
</tr>";

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
<form action="chat.php" method="post" name="confirmsolution">
<input type="submit" name="submit" value="Check"/>
<input type="hidden" name="is_no" value="<?php echo $is_no;?>"/></form>
</td>
<?php
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
         
?>

<?php
if(isset($_GET['id'])){
echo "<h4>Issue ".$_GET['id']."</h4>";
}

?>
</td>
</table>
</body>
</html>