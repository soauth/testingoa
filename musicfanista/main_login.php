<?php
session_start();
if(isset($_SESSION['myusername']))
header("Location: check_login_foradmin.php");
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>MusicFanista</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>

<script>

function vallog()

{

var x=document.forms["form1"]["myusername"].value;

var y=document.forms["form1"]["mypassword"].value;



if (x==="" || y==="")
  
{

  alert(" Please enter the required field");

  return false;

}


}

</script>

	<body>
	<div id="mainbody">
	    <div id="header">
			<table width='100%'>
				<tr><td width='20%'></td><td width='60%' align='center'><span id="h1"><font face='Edwardian Script ITC' color='yellow' ><b>MusicFanista</b></font> </span></td>
				<td width='20%'></td></tr></table>
	
	
</div>

	     <div id="mid">
		<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bordercolor="blue" height="500">
		<tr>
		<form name="form1" method="post" action="check_login_foradmin.php">
		<td>
		<table width="100%" border="0" cellpadding="3" cellspacing="1" >
		<tr>
		<td colspan="3"><font color='GREEN' size="6px"><b><strong>Member Login </strong></b></font></td>
		</tr>
		<tr>
		<td width="78"><font color='RED' size="5px"><b>Username</b></font></td>
		<td width="6"><font color='RED' size="5px">:</b></font></td>
		<td width="294"><input  type="text" name="myusername" id="myusername"></td>
		</tr>
		<tr>
		<td><font color='RED' size="5px"><b>Password</b></font></td>
		<td><font color='RED' size="5px">:</b></font></td>
		<td><input  type="password" name="mypassword" id="mypassword"></td>
		</tr>
		<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td><input type="submit" id="submit" onClick="return vallog()" value="Login"></td>
		</tr>
		</table>
		</td>
		</form>
		</tr>
		</table> 
	     </div>
	     </div>
	     	</body>
</html>