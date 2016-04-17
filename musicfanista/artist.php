<?php

?>

<html>
<title>MusicFanista</title>

			<head>
				<link rel="stylesheet" type="text/css" href="style1.css">
			</head>
<?php
session_start();
$con=mysql_connect("localhost","root","");
			if(!$con)
			die(mysql_error()."cannot connect to DB");
			mysql_select_db("musicfanista",$con);
?>

<html>
<title>MusicFanista</title>

			<head>
				<link rel="stylesheet" type="text/css" href="style1.css">
				
				<script>
			
			function validateForm()
			{
				
				
				var d=document.forms["searchform"]["akey"].value;
				if (d==null || d=="")
				  {
				  alert("Please enter a keyword");
				  return false;
				}	

			}
			</script>
			</head>

	<body>
	<div id="mainbody">
		<div id="header">
			<table width='100%'>
				<tr><td width='30%'></td><td width=40%; align='center'><span id="h1"><font face='Edwardian Script ITC' color='yellow' ><b>MusicFanista</b></font> </span></td>
				<td width='30%'>
	</td></tr></table>
	
	
</div>

<div id="menu">
		<ul id="menubar">

		<li>
		<a href="finalhome.php" target="_parent"><span>Home</span></a></li>

		<li>
		<a href="audios.php" target="Below"><span>Audios</span></a></li>

		<li>
		<a href="videos.php" target="Below"><span>Videos</span></a></li>

		<li>
		<a href="lyrics.php" target="Below"><span>Lyrics</span></a></li>
		
		
			
			<li><a href="old.php">Oldies</a></li>
			<li><a href="artist.php">Artist</a></li>
			<li><a href="gazal.php">Gazals</a></li>
			<li><a href="wedding.php">Wedding</a></li>
			<li><a href="instru.php">Instrumental</a></li>
			<li><a href="register.php">Register</a></li>

		<li>
		<a href="Contact Us.php" target="Below"><span>Contact Us</span></a></li>

		</ul>
	</div>

<div id="main">

	<table width="100%">
		<tr><td width='100%'>
<form name="searchform" method="post" action="search_for_artist.php">
							<table id="tb1" >
							<tr height="150"></tr>
								<tr><td width="30%"></td><td width="40%"><font color="WHITE" size="4px"><b>Search Here For The Artist:</b></font><br><input type="text" id="txt2" name="akey"><button type="submit" id="logbutton1" onClick="return validateForm()"><img src="images/search.bmp" width="30px" height="30px"/></button></td></tr>
</td></tr></table></form></td>
<td width="30%"></td>
</tr>
<tr height="250"></tr>
</table>
</div>
</div>
</body>
</html>
