<?php
session_start();
//if(isset($_SESSION['name']))
//header("Location: token_interface.php");
?>


<!DOCTYPE html>
<html>
<head>
   <title>ConfirmTransfer page</title>
   <link href="bootstrap/bootstrap.min.css" rel="stylesheet">
   <script src="bootstrap/jquery.min.js"></script>
   <script src="bootstrap/bootstrap.min.js"></script>
   <script src="bootstrap\fonts" > </script>
   
 </head>
<body>

<div class="panel panel-warning">
   <div class="panel-heading">
      <h1 class="panel-title"> <center> <br>  <strong> <font face="Edwardian Script ITC" size="24"  > Music Fanista </font> <p> <br>
	  CONFORMATION PAGE <br>
		</strong> </center> </h1>
   </div>
 
 
   
 <div class="panel-body">		<br><br>
 
 
 
 
 
 
  <div class="panel panel-warning">   
	 <h1 class="panel-title"><br> <br> <center> User's are required to note that the Client Applicaton 
	 <font face="Edwardian Script ITC" size="14"> Chat With Me </font><br>
	 <p>  is requesting to access following details stored with 
	 <p> <font face="Edwardian Script ITC" size="14"> Music Fanista </font>
	 <p> . Your EmailId <P> Do you allow access for it ?? <p>
   <form class="form-horizontal" role="form"  name="form1" method="POST">
   <br>  <br>
 
<?php
//$user_id = $_SESSION['id']; 
$auth_c_rd = $_SESSION['auth_code'] ;
$clientid = $_SESSION['c__id'] ;

$length = 10;
$token = substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"), 0, $length);


$con=mysql_connect("localhost","root");
if(!$con)
die(mysql_error()."cannot connect to DB");
mysql_select_db("oauth_db",$con);

$query1="update oauth_access_tokens set access_token ='$token ' where client_id='$clientid'";

//$query1= "insert into oauth_access_tokens ( access_token ,expires,scope ) values ('$token',  ' 3600' ,' emailid') ";
										
if(!mysql_query($query1,$con))
					{
					echo( die(mysql_error()));
					}
					mysql_close($con);
?>


 <div class="form-group"><center>	   
   <a class="btn btn-warning" type="submit" href="finalhome.php" value ="REJECT" role="button" name="bk1" > REJECT </a>
     &nbsp; 
   <a class="btn btn-warning" type="submit" href="/chat3/index.php" value="ALLOW" role="button" name="pr1" > ALLOW </a> 
   </center>
   </div> <br><br>
   </form>
  </div>
  </div>
 
 <br>
 <br>
 
 </div>
</body>
</html>
