<?php
session_start();
//if(isset($_SESSION['myusername']))
//header("Location: check_login_foradmin.php");
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>MusicFanista</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>

<body>
	<div id="mainbody">
		<div id="header">
			<table width='100%'>
				<tr><td width='30%'></td>
<td width='40%' align='center'><span id="h1"><font face='Edwardian Script ITC' color='yellow' ><b>MusicFanista</b></font> </span></td>
				<td width='30'></td>
				</tr></table>
	
	
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
	
	<table width="500" border="0" align="center" cellpadding="0" cellspacing="1" bordercolor="blue" height="500">
		<tr>
		<form name="form1" method="post" action="update_moviedb.php" >
		<td>
		<table width="100%" border="0" cellpadding="3" cellspacing="1" >
		<tr>
		<td colspan="3"><font color='GREEN' size="6px"><b><strong>Update Movie Details </strong></b></font></td>
		</tr>
		<tr>
		<tr>
		<td width="200"><font color='RED' size="5px"><b>Movie Name</b></font></td>
		<td width="6"><font color='RED' size="5px">:</b></font></td>
		<td width="294"><input  type="text" name="mn" id="mn"></td>
		</tr>
		<tr>
		<td><font color='RED' size="5px"><b>Year Of Release</b></font></td>
		<td><font color='RED' size="5px">:</b></font></td>
		<td><input  type="year" name="yr" id="yr"></td>
		</tr>
		<tr>
		<td><font color='RED' size="5px"><b>Cast</b></font></td>
		<td><font color='RED' size="5px">:</b></font></td>
		<td><input  type="text" name="cast" id="cast"></td>
		</tr>
		
		<tr>
		<td><font color='RED' size="5px"><b>Director</b></font></td>
		<td><font color='RED' size="5px">:</b></font></td>
		<td><input  type="text" name="dr" id="dr"></td>
		</tr>
		
		
		<tr>
		<td><font color='RED' size="5px"><b>Producer</b></font></td>
		<td><font color='RED' size="5px">:</b></font></td>
		<td><input  type="text" name="pr" id="pr"></td>
		</tr>
		
		<tr>
		<td><font color='RED' size="5px"><b>Music Director</b></font></td>
		<td><font color='RED' size="5px">:</b></font></td>
		<td><input  type="text" name="mdr" id="mdr"></td>
		</tr>
		
		<tr>
		<td><font color='RED' size="5px"><b>Image File Name</b></font></td>
		<td><font color='RED' size="5px">:</b></font></td>
		<td><input  type="text" name="im" id="im"></td>
		</tr>
		
		<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td><input type="submit" id="submit" onClick="return vallog()" value="Update"></td>
		</tr>
		</table>
		</td>
		</form>
		</tr>
		</table> 
	
	
	</div>

</div>
</body>
</html>
	
	