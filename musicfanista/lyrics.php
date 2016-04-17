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

<div id="menu" >
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
	
	<div id="main" >
	<table width="50%">
	<tr>
<font color="white" size="5px">
<?php
$myfile = fopen("Chikani chameli.txt", "r") or die("Unable to open file!");
while(!feof($myfile)) { 
	    echo fgets($myfile) . "<br />";
	}

	fclose($myfile);

	?>
</font>
</tr>
<br>
<hr>
<br>
<tr>
<font color="white" size="5px">
<?php
$myfile = fopen("gun guna.txt", "r") or die("Unable to open file!");
while(!feof($myfile)) { 
	    echo fgets($myfile) . "<br />";
	}

	fclose($myfile);

	?>
</font>
</tr>
<br>
<hr>
<br>
<tr>
<font color="white" size="5px">
<?php
$myfile = fopen("deva shree ganesha.txt", "r") or die("Unable to open file!");
while(!feof($myfile)) { 
	    echo fgets($myfile) . "<br />";
	}

	fclose($myfile);

	?>
</font>
</tr>
<br>
<hr>
<br>
<tr>
<font color="white" size="5px">
<?php
$myfile = fopen("abhi mujh me kahi.txt", "r") or die("Unable to open file!");
while(!feof($myfile)) { 
	    echo fgets($myfile) . "<br />";
	}

	fclose($myfile);

	?>
</font>
</tr>
<br>
<hr>
<br>
<tr>
<font color="white" size="5px">
<?php
$myfile = fopen("ainvayi ainvayi.txt", "r") or die("Unable to open file!");
while(!feof($myfile)) { 
	    echo fgets($myfile) . "<br />";
	}

	fclose($myfile);

	?>
</font>
</tr>

</table>
</div>

</div>
</body>
</html>