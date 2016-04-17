<?php
session_start();
//if(isset($_SESSION['myusername']))
//header("Location: check_login.php");
?>


<!DOCTYPE html>
<html>
<head>
   <title>Transfer page</title>
   <link href="bootstrap/bootstrap.min.css" rel="stylesheet">
   <script src="bootstrap/jquery.min.js"></script>
   <script src="bootstrap/bootstrap.min.js"></script>
   
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

</head>
<body>

<div class="panel panel-primary">
   <div class="panel-heading">
      <h1 class="panel-title"> <center>Login 
	 using your  <br>  <strong> <font face="Edwardian Script ITC" color="yellow" size="20" >MusicFanista</font>  </strong> <br> Credentials </center> </h1>
   </div>
   <div class="panel-body">
   
   <div class="panel panel-info">

   
   <?php
$_SESSION['id']="";
$a="";
$b="";
$h="";
$again=true;
$correct=false;




$con=mysql_connect("localhost","root");
if(!$con)
die(mysql_error()."cannot connect to DB");
mysql_select_db("oauth_db",$con);


$_SESSION['auth_code']="";
$a1 = $_SESSION['responsetype'];
$b1 = $_SESSION['clientid'];
$c1 = $_SESSION['redirecturi'];
$d1 = $_SESSION['scope'];
$length = 4;
$auth_c_rd = substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);

$query1="update oauth_authorization_codes set authorization_code='$auth_c_rd ' where client_id='$b1'";
									
if(!mysql_query($query1,$con))
					{
					echo( die(mysql_error()));
					}
					mysql_close($con);

				//$cid = $_SESSION['$b1'];
				$_SESSION['auth_code']=$auth_c_rd ;
				//$_SESSION['try']=$flag7;
				$_SESSION['c__id']= $b1;
				
				
				




if (isset($_POST['login']))
{
			$a=$_POST['pwd'];
			$b=$_POST['pwd1'];
			if (empty($b) || empty($a))
			{
				$again=true;
				$h="*All fields are mandatory";
			}
				else
			{
				$conn=mysql_connect("localhost","root","");
				if (!$conn)
				{
				die('could not connect' . mysql_error());
				}
				mysql_select_db("musicfanista", $conn);
				
				$res=mysql_query("select * from user_details");
				if(!$res)
				{
				echo 'could not execute' . die(mysql_error());
				}
				while ($row=mysql_fetch_array($res))
				{
					if($a==$row['u_name'] && $b==$row['u_pwd'])
					{
					$correct=true;
					break;
					}
				}
				
				
				if($correct)
				{
				$_SESSION['id']=$a;   //this is username 
				header("Location: confirmtransferpage.php");
				}
				else
				{
				$h="Invalid login id or password";
				$again=true;
				}
			}
}
if($again)
{
?>
   
   
   
   
     
<form class="form-horizontal" role="form" action="confirmtransferpage.php" name="form1" method="POST">
<?php
echo '<p>';
echo '<font color="red">';
echo $h;
echo '</font>';
echo '</p>';
?>


 <div class="form-group">
  <br>
    <label class="col-sm-2 control-label">LoginID</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="myusername" name="pwd"
	           placeholder="LoginID">

    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="mypassword"  name="pwd1"
	  placeholder="Password">
    </div>
   </div>
   <br>
   <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
         <div class="checkbox">
            <label>
               <input type="checkbox"> Remember me
            </label>
         </div>
      </div>
   </div>
   <br>
   <div class="form-group"><center>
   <input class="btn btn-primary" type="reset" name="clr" value ="CLEAR" class="sub_button"> &nbsp; 
   <input class="btn btn-primary" type="submit" name="login" onClick="return vallog()" value="LOGIN">

</center></div>

   </form>
  <?php
}

?>
 <br>
 <br>
 </div>
 </div> </div>
 
</body>
</html>


