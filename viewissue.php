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
	<a href="checksolution.php" target="left" class="GFG"> 
        Check/Confirm/Req Solution
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

<div class="select">
<h2>Select the date to view the issues </h2>
<form action="showissues.php" method="post" name="showissues">
<table width="500" border="0.5px" align="center" cellpadding="5" cellspacing="5" class="Table">
<tr><td> 
  From <input type="date" name="from"></td><td>
  To <input type="date" name="to">
  </td><td>
 
  <select align="center" name="type">
<option value="Pending">Pending</option>

<option value="Completed">Completed</option>
<option value="All">All</option>
</select>
 </td></tr></table>
 <br/>
   <input type="submit" name ="submit" value="Submit" align="center" >
</form>

</div>
</td>
</table>
</body>
</html>