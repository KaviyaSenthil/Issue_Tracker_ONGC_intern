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
 
	<a href="solveissue.php" target="left" class="GFG"> 
           Solve issue
    </a>
	  <a href="viewissue.php" target="left" class="GFG"> 
      History
    </a>
	  <a href="checksolution.php" target="left" class="GFG"> 
       Back
    </a>
	  <a href="logout.php" target="left" class="GFG"> 
       Logout
    </a>
	</div>
	</td>
	<td>

<?php
$host='localhost';
$user='root';
$pass='';
$db='database';
$con=mysqli_connect($host,$user,$pass,$db)or die("failed to connect");
mysqli_select_db($con,"database")or die("no database");
$uid=$_POST['is_no'];

$qry=mysqli_query($con,"SELECT * FROM chat WHERE Issue_no=$uid");?>
<h2>Issue no:<?php echo $uid;?></h2>
<table border='1' text-align='center' border-style='groove' >
<tr>

<th>Request_Date</th>
<th>Request_given_by</th>

<th>Action_taken_description</th>
<th>Action_taken_by</th>
<th>Action_taken_Date</th>



</tr>
<?php
while($row = mysqli_fetch_array($qry))
{
echo "<tr>";


echo "<td>" . $row['Request_given_date'] . "</td>";
echo "<td>" . $row['request_given_by'] . "</td>";

echo "<td>" . $row['Action_description'] . "</td>";
echo "<td>" . $row['replied_by'] . "</td>";
echo "<td>" . $row['Replied_date'] . "</td>";?>

<?php
echo "</tr>";
}
echo "</table>";
?>
<table align="center" width="100%" >
<tr>
<td style="text-align:center">
<h3><form action="Request.php" method="post" name="confirmsolution">
<input type="submit" name="submit" value="Request" align="center"/>
<input type="hidden" name="is_no" value="<?php echo $uid;?>"/></form></td><td  style="text-align:left">
<form action="confirmsolution.php" method="post" name="confirmsolution">
<input type="submit" name="submit" value="Confirm" align="center"/>
<input type="hidden" name="is_no" value="<?php echo $uid;?>"/></form></h3></td></tr></table>
</td>
</table>
</body>
</html>
