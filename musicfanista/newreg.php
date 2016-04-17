<html>
<title>REGISTER</title>
<head>
<link rel="stylesheet" type="text/css" href="style1.css">
	<script>
			
			function validateForm()
			{
				var x=document.forms["regform"]["fname"].value;
				if (x==null || x=="")
				  {
			 	 alert("First name must be filled out");
			 	 return false;
			  	}

				var y=document.forms["regform"]["lname"].value;
				if (y==null || y=="")
				  {
			 	 alert("Last name must be filled out");
			 	 return false;
			  	}
				var z=document.forms["regform"]["eid"].value;
				if (z==null || z=="")
				  {
			 	 alert("Email ID must be filled out");
			 	 return false;
			  	}
				var pass=document.forms["regform"]["pass"].value;
				var conpass=document.forms["regform"]["conpass"].value;
				if (pass==null || pass=="")
				  {
				  alert("Password must be filled out");
				  return false;

					}

				if(conpass!=pass)
				{
					alert("passwords do not match");
					return false;
				}
		}
</script>
</head>

<body>
<div id="mainbody">
<div id="header">
			<table width=100%;>
				<tr><td width=30%;></td><td width='40%' align='center'><span id="h1"><font face='Edwardian Script ITC' color='yellow' ><b>MusicFanista</b></font> </span></td>
				<td width='30%'></td></tr></table>
	
	
</div>




 <div id="mid">
		<table width="800" border="0" align="center" cellpadding="0" cellspacing="1" bordercolor="blue" height="500">
		<tr>
		<form name="regform" method="post" action="regdbc.php">
		<td>
		<table width="100%" border="0" cellpadding="3" cellspacing="1" >
		<tr>
		<td colspan="3"><font color='GREEN' size="6px"><b><strong>Member Registration </strong></b></font></td>
		</tr>
		<tr>
		<td width="30%"><font color='RED' size="5px"><b>First Name</b></font></td>
		<td width="5%"><font color='RED' size="5px">:</b></font></td>
		<td width="65%"><input  type="text" name="fname" id="fname"></td>
		</tr>
		<tr>
		<td><font color='RED' size="5px"><b>Last Name</b></font></td>
		<td><font color='RED' size="5px">:</b></font></td>
		<td><input  type="text" name="lname" id="lname"></td>
		</tr>
		<tr>
		<td><font color='RED' size="5px"><b>User Name</b></font></td>
		<td><font color='RED' size="5px">:</b></font></td>
		<td><input  type="text" name="uname" id="uname"></td>
		</tr>
		<tr>
		<td><font color='RED' size="5px"><b>Email Id</b></font></td>
		<td><font color='RED' size="5px">:</b></font></td>
		<td><input  type="text" name="eid" id="eid"></td>
		</tr>
		<tr>
		<td><font color='RED' size="5px"><b>Password</b></font></td>
		<td><font color='RED' size="5px">:</b></font></td>
		<td><input  type="password" name="pass" id="pass"></td>
		</tr>
		<tr>
		<td><font color='RED' size="5px"><b>Confirm Password</b></font></td>
		<td><font color='RED' size="5px">:</b></font></td>
		<td><input  type="password" name="conpass" id="conpass"></td>
		</tr>
		<tr>
		<td></td>
		<td></td>
		<td><a class="btn btn-default" type="reset" href="" id="logbutton" value="CLEAR" role="button" > CLEAR </a>
		   <a class="btn btn-default" type="submit" href="finalhome.php" id="logbutton" value ="CANCEL" role="button" name="bk1"> CANCEL </a>
		<button id="logbutton" type="submit" onClick="return validateForm()">Register</button></td>
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