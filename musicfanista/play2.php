<?php
session_start();

$con=mysql_connect("localhost","root","");
			if(!$con)
			die(mysql_error()."cannot connect to DB");
			mysql_select_db("musicfanista",$con);
			$a=$_SESSION['b'];
			$p=$_POST['select'];
			

			

?>

<html>
			<title>MusicFanista
					</title>

			<head>
				<link rel="stylesheet" type="text/css" href="style1.css">
			</head>

	<body>
	<div id="mainbody">
		<div id="header">
			<table width='100%'>
				<tr><td width='30%'></td>
<td width='40%' align='center'><span id="h1"><font face='Edwardian Script ITC' color='yellow' ><b>MusicFanista</b></font> </span></td>
				<td width='30%'>
	</td></tr></table>
	
	
</div>

<embed src="<?php echo $p; ?>" width="80%" height="22%" autostart="true" loop="loop" float="center"><br>
<br><embed>
<a href="tryd.php">DOWNLOAD</a>

<?php
$_SESSION['name']=$p;
?>
</div>
</body>

</html>