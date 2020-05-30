<html>
<head>

</head>
<body>
<h2 align="center">
Your issues
</h2>
<?php
session_start();
$host='localhost';
$user='root';
$pass='';
$db='database';
$con=mysqli_connect($host,$user,$pass,$db)or die("failed to connect");
$depar=$_SESSION["dep"];
$ui=$_SESSION["CPFNO"];
mysqli_select_db($con,"database")or die("no database");
$qry=mysqli_query($con,"SELECT * FROM issue WHERE Request_given_by ='$ui'") or die("Qyery not obtained");
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


<?php
echo "</tr>";
}
echo "</table>";
?>


</body>
</html>