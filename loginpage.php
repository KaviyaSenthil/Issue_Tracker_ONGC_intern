<html>
<head>
<style>
h1{ 
font-size:50px;
}
h3{
	font-size:25px;
}
.top
{background-color:lightblue;
  padding: 0;
}
h2
{
font-size:30px;
}
body{align:center;
background-color:lightgrey;
}
.bo{
	margin-left:450px;
	margin-right:450px;
	margin-top:100px;
	align:center;
	text-align:center;
	border-color:grey;

	 border-style: solid;
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
</td>
</table>
</div>
<div class="bo"><h2><b>LOGIN PAGE</b></h2></p>
<p>
<form action="verifylogin.php" method="post" name="LOGIN_FORM">
<table width="500" border="0.5px" align="center-left" cellpadding="10" cellspacing="3" class="Table">
<tr>
<td align="center" valign="top">User_id</td>
<td><input name="User_id" type="text" class="input" placeholder="User_id" id="User_id"></td>
</tr>
<tr>
<td align="center" valign="top">Password</td>
<td><input name ="Password" type="password" class="input" placeholder="Password" id="Password" ></td>
</tr>
</table>
<input type="submit" name="submit" value="LOGIN" id="submit"><br>
</form>
<?php
if(isset($_GET['id'])){
echo $_GET['id'];
}
?>
</p>
</div>
</body>
</html>