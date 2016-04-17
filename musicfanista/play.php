<?php
session_start();
$con=mysql_connect("localhost","root","");
			if(!$con)
			die(mysql_error()."cannot connect to DB");
			mysql_select_db("musicfanista",$con);
			$p=$_POST['select'];
			$_SESSION['name']=$p;

			

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
				<tr><td width='30%'><form action="finalhome.php" method="post" name="form1">
				
				<input type="submit" id="submit"  value="BACK" align="center" onclick="">
				</form></td>
<td width='40%' align='center'><span id="h1"><font face='Edwardian Script ITC' color='yellow' ><b>MusicFanista</b></font> </span></td>
				<td width='30%'>
	</td></tr></table>
	
	
</div>


<embed src="<?php echo $p; ?>" width="80%" height="22%" autostart="true" loop="loop" float="center"><br>
<br><embed>
<a href="tryd.php">DOWNLOAD</a>

</div>
</body>

</html>