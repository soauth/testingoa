<?php
$con=mysql_connect("localhost","root","");
if(!$con)
die(mysql_error()."cannot connect to DB");
mysql_select_db("musicfanista",$con);
$fn=stripslashes(trim($_POST['fname']));
$ln=stripslashes(trim($_POST['lname']));
$uname=stripslashes(trim($_POST['uname']));
$e=stripslashes(trim($_POST['eid']));
$p=stripslashes(trim($_POST['pass']));
$d=date("Y-m-d ");
$_SESSION['name']=$uname;

$q1="insert into user_details(fname,lname,u_name,u_pwd,email_id,date_of_reg)values('$fn','$ln','$uname','$p','$e','$d')";

if(!mysql_query($q1))
{
	echo "<script type=\"text/javascript\">";
	echo "alert(\"User already exists \");";
	echo "window.history.back(-1);";
	echo "</script>";


}
else
{
	echo "<script type=\"text/javascript\">";
	echo "alert(\" Registration successfull \");";
	echo "window.location.href = \"finalhome.php\";";
	echo "</script>";
}
mysql_close($con);
?>