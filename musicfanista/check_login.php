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

		$result = mysql_query("select * from user_details where(u_name='".$myusername."'and u_pwd='".$mypassword."')");

		$row = mysql_fetch_array($result);


		if($row["u_name"]==$myusername && $row["u_pwd"]==$mypassword)
		  {
			$uname=$row["u_name"];
			$_SESSION['name']=$uname;

			header("location:../chat3/index.php"); 
			}
			
			
		else
			{
  			 echo "<script type=\"text/javascript\">";
			echo "alert(\" You are not a validated user \");";
			echo "window.location.href=\"finalhome.php\";";
			echo "</script>";
		}
		  
		     
	       

?>
