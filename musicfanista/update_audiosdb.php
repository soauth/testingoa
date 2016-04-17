<?php
session_start();
$con=mysql_connect("localhost","root","");
if(!$con)
die("Couldn't connect to datatbase");
mysql_select_db("musicfanista",$con) or die("cannot select database");



$song=stripslashes(trim($_POST['song']));
//$fn=stripslashes(trim($_POST['fn']));
$singer=stripslashes(trim($_POST['singer']));
$mn=stripslashes(trim($_POST['mn']));
$type=stripslashes(trim($_POST['type']));

$q1="insert into audios (song,path,singer,m_name,type)values('$song','songs/".$song.".mp3','$singer','$mn','$type')";
mysql_query($q1);


echo "<script type=\"text/javascript\">";
echo "alert(\" New record inserted \");";
echo "window.location.href=\"update_audios.php\";";
echo "</script>";


?>