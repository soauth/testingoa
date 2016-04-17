<?php
session_start();
$con=mysql_connect("localhost","root","");
if(!$con)
die("Couldn't connect to datatbase");
mysql_select_db("musicfanista",$con) or die("cannot select database");



$mn=stripslashes(trim($_POST['mn']));
$yr=stripslashes(trim($_POST['yr']));
$cast=stripslashes(trim($_POST['cast']));
$dr=stripslashes(trim($_POST['dr']));
$pr=stripslashes(trim($_POST['pr']));
$mdr=stripslashes(trim($_POST['mdr']));
$im=stripslashes(trim($_POST['im']));

$q1="insert into movie_details (m_name,year_of_release,cast,director,producer,music_director,img_path)values('$mn','$yr','$cast','$dr','$pr','$mdr','images/".$im."')";
mysql_query($q1);


echo "<script type=\"text/javascript\">";
echo "alert(\" New record inserted \");";
echo "window.location.href=\"file_uploader2.php\";";
echo "</script>";


?>