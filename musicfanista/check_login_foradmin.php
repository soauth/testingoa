<?php
session_start();

?>
<?php
// Grab User submitted information
$myusername = $_POST["myusername"];
$mypassword = $_POST["mypassword"];

// Connect to the database
$con = mysql_connect("localhost","root","");
// Make sure we connected succesfully

if(! $con)
{
    die('Connection Failed'.mysql_error());
}

// Select the database to use
    
	   
		mysql_select_db("musicfanista",$con);

		$result = mysql_query("select * from admin where(a_name='".$myusername."'and a_pwd='".$mypassword."')");

		$row = mysql_fetch_array($result);


		if($row["a_name"]==$myusername && $row["a_pwd"]==$mypassword)
		  {
			$uname=$row["a_name"];
			$_SESSION['name']=$uname;

			header("location:Update.php"); 
			}
			
			
		else
			{
  			 echo "<script type=\"text/javascript\">";
			echo "alert(\" You are not a validated user \");";
			echo "window.location.href=\"main_login.php\";";
			echo "</script>";
		}
		  
		     
	       

?>
