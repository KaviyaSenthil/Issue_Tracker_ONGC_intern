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
   <a href="solveissue.php" target="left" class="GFG"> 
       Solve issue
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

<div class="select"></p>
<form action="createissueinsert.php" method="post" name="createissueinsert">
<table width="500" border="0.5px" align="center-left" cellpadding="10" cellspacing="10" class="Table">
<tr>
<td align="center" valign="top"><h1>Issue:</h1></td>
<td><textarea name="Issue" rows="10" cols="30">Issue</textarea></p><p></td>
<td>

<select align="center" name="Department">
<option value="Hardware">Hardware</option>

<option value="Software">Software</option>

<option value="Other">Other</option>

</select>
<br/>
</td>


</tr>

</table>
<input type="submit" name="submit" value="SUBMIT" id="submit" align="center">


</form>
</p>
</div>
</td>
</table>
</body>
</html>