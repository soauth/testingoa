<?php
session_start();


?>


<!DOCTYPE html>
<html>
<head>
   <title>PreConfirmTalk page</title>
   <link href="bootstrap/bootstrap.min.css" rel="stylesheet">
   <script src="bootstrap/jquery.min.js"></script>
   <script src="bootstrap/bootstrap.min.js"></script>
   <script src="bootstrap\fonts" > </script>
   
 </head>
<body>

<?php

$val=true;
$response_type = 'code' ;
$_SESSION['responsetype']="";
$_SESSION['clientid']="";
$_SESSION['redirecturi']="";
$_SESSION['scope']="";
$_SESSION['pay']="";

 
$length = 4;
$c_id = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz123456789"), 0, $length);


$client_id = $c_id ;
$redirect_uri = 'http://localhost/chat3/index.php' ;
$scope = 'emailid' ;
					
$con=mysql_connect("localhost","root");
if(!$con)
{	die(mysql_error()."cannot connect to DB");
}
    mysql_select_db("oauth_db",$con);

				
				$query = "insert into oauth_authorization_request(response_type ,client_id,redirect_uri,scope) 
				values('code', '$c_id', 'http://localhost/chat3/index.php' ,'emailid')";
				if(!mysql_query($query,$con))
				{					echo( die(mysql_error()));				}
								
				$query1 = " insert into oauth_clients ( client_id ,client_secret, redirect_uri,grant_types , scope, user_id) 
						values ( '$c_id' , 'CHATWITHME' , 'http://localhost/chat3/index.php' ,'code' , 'emailid' , 'null')";
				if(!mysql_query($query1,$con))
				{	echo( die(mysql_error()));}		
						
				$query2 = "insert into oauth_scopes(  scope , is_default) values (  'emailid',' true')";
			    if(!mysql_query($query2,$con))
				{
				echo( die(mysql_error()));
				}	

				$query3 = "insert into oauth_users( client_id ) values (  '$c_id')";
			    if(!mysql_query($query3,$con))
				{
				echo( die(mysql_error()));
				}

				$query4 = "insert into oauth_access_tokens( client_id ) values (  '$c_id')";
			    if(!mysql_query($query4,$con))
				{
				echo( die(mysql_error()));
				}				
				
				$query5 = "insert into oauth_authorization_codes( client_id , expires,scope ) values 
									(  '$c_id', 3600 , 'emailid')";
			    if(!mysql_query($query5,$con))
				{
				echo( die(mysql_error()));
				}				
 mysql_close($con);					
?>

<div class="panel panel-warning">
   <div class="panel-heading">
      <h1 class="panel-title"> <center> <br>  <strong> <font face="Edwardian Script ITC" size="20" >NOTICE </font>  </strong> </center> </h1>
   </div>
 <div class="panel-body">
   
   <br><br>
	<div class="panel panel-warning">
     
	 <h1 class="panel-title"><br> <br> <center> User's are required to be registered with our main website <p> <font face="Edwardian Script ITC" size="14"> Music Fanista </font>
	 <p>  inorder to access the chat server.<p> If you are not registered you can register now... <P> or LogIn using your credentials... <p>
   <form class="form-horizontal" role="form" action="transferpage.php" name="form1" method="POST">
   <br>  <br>
 
   
   
   <div class="form-group"><center>	 

    <a class="btn btn-warning" type="submit" href="finalhome.php" value ="CANCEL" role="button" > CANCEL </a>
     &nbsp;
   <a class="btn btn-warning" type="submit" href="dd.php" value ="REGISTER" role="button" > REGISTER </a>
     &nbsp; 
   <a class="btn btn-warning" type="submit" href="transferpage.php" name="bk1" value="LOGIN" role="button"> LOGIN </a> 
    </center>
    </div> <br><br>
 
 <?php
 //$_SESSION['check']="$v" ;
$_SESSION['responsetype']=$response_type;
$_SESSION['clientid']=$c_id;
$_SESSION['redirecturi']=$redirect_uri;
$_SESSION['scope']=$scope;
 $_SESSION['pay']=$val;
 


?>
    

  </form>
  </div>  </div>
 
 <br> <br>
  </div>
</body>
</html>
