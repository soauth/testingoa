<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
   <title>Register page</title>
   <link href="bootstrap/bootstrap.min.css" rel="stylesheet">
   <script src="bootstrap/jquery.min.js"></script>
   <script src="bootstrap/bootstrap.min.js"></script>
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
<link rel="stylesheet" type="text/css" href="style1.css">
 </head>
<body>

<div id="mainbody">
<div id="header">
			<table width=100%;>
				<tr><td width=30%;></td><td width='40%' align='center'><span id="h1"><font face='Edwardian Script ITC' color='yellow' ><b>MusicFanista</b></font> </span></td>
				<td width='30%'></td></tr></table>
</div>






 <div id="mid" class="panel-body" >

<?php
$a="";
$b="";
$c="";
$d="";
$e="";
$f1=true;
$h="";
$flag=false;
if (isset($_POST['bk1']))
{

}
elseif (isset($_POST['pr1']))
{
			$a=$_POST['fname'];
			$b=$_POST['lname'];
			$c=$_POST['uname'];
			$k=$_POST['eid'];
			$d=$_POST['pwd'];
			$e=$_POST['pwd1'];
			if (empty($a) || empty($b) || empty($d) || empty($c) || empty($e))
				{
				$f1=false;
				$flag=true;
				$h="All fields are mandatory";
				}
				else if($d!=$e)
				{
				$f1=false;
				$flag=true;
				$h="*Confirm password correctly";
				}
				else
				{
				$flag=false;
				$con=mysql_connect("localhost","root","");
				if(!$con)
				{
				die ('could not connect' . mysql_error());
				}
				mysql_select_db("musicfanista",$con);
				
				if (!mysql_query($query1,$con))
				{
				die ('Could not execute' . mysql_error());
				}
				mysql_close($con);
				
				}
}
else
{
$f1=true;
$flag=true;
}
if($flag)
{
?>
 
<form class="form-horizontal" role="form" align="center" name="regform" method="post" action="preconfirmtalk.php">
<?php
echo '<p>';
echo '<font color="red">';
echo $h;
echo '</font>';
echo '</p>';
?>
  <div class="form-group">
      <label for="Member_registration" > <font color='GREEN' size="6px"><b><strong>Member Registration </strong></b></font> </label>
      </div>
	<div class="form-group">
      <label for="firstname" class="col-sm-5 control-label"><font color='RED' size="5px"><b>First Name</b></font></label>
      <div class="col-sm-5">
         <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname"  >
      </div>
   </div>		
 <div class="form-group">
      <label for="lastname" class="col-sm-5 control-label"><font color='RED' size="5px"><b>Last Name</b></font></label>
      <div class="col-sm-5">
         <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname"  >
      </div>
   </div>
  <div class="form-group">
      <label for="username" class="col-sm-5 control-label"><font color='RED' size="5px"><b>User Name</b></font></label>
      <div class="col-sm-5">
         <input type="text" class="form-control" id="uname" placeholder="Enter User Name" name="uname"  >
      </div>
   </div> 
  <div class="form-group">
      <label for="Emailid" class="col-sm-5 control-label"><font color='RED' size="5px"><b>Email Id</b></font></label>
      <div class="col-sm-5">
         <input type="text" class="form-control" id="eid" placeholder="Enter Email Id" name="eid"  >
      </div>
   </div>
  <div class="form-group">
    <label for="inputPassword" class="col-sm-5 control-label"><font color='RED' size="5px"><b>Password </b></font></label>
    <div class="col-sm-5">
      <input type="password" class="form-control" id="pwd" placeholder="Password" name="pwd" >
    </div>
   </div>
  <div class="form-group">
    <label for="confirmPassword" class="col-sm-5 control-label"><font color='RED' size="5px"><b>Confirm Password </b></font></label>
    <div class="col-sm-5">
      <input type="password" class="form-control" id="pwd1" placeholder="Confirm Password" name="pwd1" >
    </div>
   </div>
   
	<br>  <br>
  <div class="form-group"><center>	 
   <a class="btn btn-default" type="reset" href="" id="logbutton" value="CLEAR" role="button" > CLEAR </a>
     &nbsp;    
   <a class="btn btn-default" type="submit" href="finalhome.php" id="logbutton" value ="CANCEL" role="button" name="bk1"> CANCEL </a>
     &nbsp; 
   <a class="btn btn-default" type="submit" href="preconfirmtalk.php" id="logbutton" value="REGISTER" role="button" name="pr1" onClick="return validateForm()"> REGISTER </a> </center>
   </div> <br><br>
	
	</form>
   </div>

 <?php
}
?>

 
 </div>

 
 

 
 
 
 </body>  </html>