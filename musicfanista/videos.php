<?php
session_start();
$con=mysql_connect("localhost","root","");
			if(!$con)
			die(mysql_error()."cannot connect to DB");
			mysql_select_db("musicfanista",$con);
?>

<html>
			<title>MusicFanista
					</title>

			<head>
				<link rel="stylesheet" type="text/css" href="style1.css">
				<script>
			
	
		

function vallog()

{

var x=document.forms["form1"]["myusername"].value;

var y=document.forms["form1"]["mypassword"].value;



if (x==="" || y==="")
  
{

  alert(" Please enter the required field");

  return false;

}


}


			
			</script>	
			</head>
	<body>
	<div id="mainbody">
		<div id="header">
			<table width='100%'>
				<tr><td width='30%'></td>
<td width='40%' align='center'><span id="h1"><font face='Edwardian Script ITC' color='yellow' ><b>MusicFanista</b></font> </span></td>
				<td width='30%'>
				
				</td>
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

	<table width="100%">
		<tr>
		<td width="50%">
			<ul>
			
				<li><span id="vid"><b>Tere Naina Maar Hi Daalenge..</b></span><br>
				<video width="80%" height="45%" controls> 
					<source src="vid song/Tere Naina Maar Hi Daalenge.mp4"  autostart="true" loop="loop" float="center" type="video/mp4"><br>
					<br><b>Tere Naina Maar Hi Daalenge</b></video></li>

				<li><span id="vid"><b>aazamale-aazamale..</b></span><br>
				<video width="80%" height="45%" controls>
					<source src="vid song/aazamale-aazamale.mp4"  autostart="true" loop="loop" float="center" type="video/mp4"><br>
					<br><b>aazamale-aazamale</b></video></li>
				
			
				<li><span id="vid"><b>Asalaam e Ishqum..</b></span><br>
				<video width="80%" height="45%" controls> 
					<source src="vid song/Asalaam e Ishqum.mp4"  autostart="true" loop="loop" float="center" type="video/mp4"><br>
					<br><b>Asalaam e Ishqum</b></video></li>

				<li><span id="vid"><b>Mala sang na..</b></span><br>
				<video width="80%" height="45%" controls>
				<source src="vid song/Mala Sang Na.mp4"  autostart="true" loop="loop" float="center" type="video/mp4"><br>
				<br><b>Mala Sang Na</b></video></li>

				
				
				<li><span id="vid"><b>GIVE ME SOME SUNSHINE..</b></span><br>
				<video width="80%" height="45%" controls> 
					<source src="vid song/GIVE ME SOME SUNSHINE.mp4"  autostart="true" loop="loop" float="center" type="video/mp4"><br>
					<br><b>GIVE ME SOME SUNSHINE</b></video></li>
				
				
				<li><span id="vid"><b>Ranjhana Hua Tera..</b></span><br>
				<video width="80%" height="45%" controls> 
					<source src="vid song/Ranjhana.mp4"  autostart="true" loop="loop" float="center" type="video/mp4"><br>
					<br><b>Ranjhana Hua Tera</b></video></li>
				
			</ul>
		</td>
		
		
		</tr>

</table>
</div>
</div>
</body>
</html>
