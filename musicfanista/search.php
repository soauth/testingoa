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
<script>
function validateIssue()
			{
				alert("Please login to download the song");
				return false;
			}
			
			</script>	
<style>

m1{
font-size:32px;
}

table,tr,td{
font-size:18px;
}


</style>
			<head>
				<link rel="stylesheet" type="text/css" href="style1.css">
			</head>

	<body>
	<div id="mainbody">
		<div id="header">
			<table width="100%">
				<tr><td width="30%"></td>
				<td width="40%" align='center'><span id="h1"><font face='Edwardian Script ITC' color='yellow' ><b>MusicFanista</b></font> </span></td>
				<td width="30%"></td></tr></table>
	
	
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

<div id="result">
				
				<?php
					$con=mysql_connect("localhost","root","");
				if(!$con)
				die(mysql_error()."cannot connect to DB");
				mysql_select_db("musicfanista",$con);
				$result=mysql_query("select * from audios where song like '%".$_POST['skey']."%'");
				if(!$result) die(mysql_error());
		
				if(mysql_num_rows($result)==0)
					{
							echo "<script type=\"text/javascript\">";
							echo "alert(\" No record exists \");";
							echo "window.location.href=\"search.php\";";
							echo "</script>";
					}
					else
					{
						echo "<table id=\"song\">";
						echo	"<tr id=\"m1\">";
						echo	"<td> <b>Select</b></td><td></td><td width=\"250\"><font color=\"Green\" size=\"6px\"><b>Song </b></font></td><td></td><td></td><td width=\"500\"><font color=\"Green\" size=\"6px\"><b>Singer</b></font></td>";
						echo "</tr>";
						echo "<form name=\"selectsong\" method=\"post\" action=\"play.php\">";

						while($row=mysql_fetch_array($result))
						{
					
							
							
								echo "<tr>";
								echo 	"<td> <input type=\"radio\" name=\"select\" checked value=\"".$row['path']."\"></td><td></td><td width=\"78\"><font color=\"RED\" size=\"5px\"><b>".$row['song']."</b></font></td><td></td><td></td><td width=\"78\"><font color=\"RED\" size=\"5px\"><b>".$row['singer']."</b></font></td><td><button type=\"submit\" id=\"logbutton\" >Play</button></td>";
								echo "</tr>";

							echo "<tr height=\"20\">";
							echo"</tr>";


						$a=$row['m_name'];
						

	
						}

						$_SESSION['b']=$a;

						
						echo "</form>";
					}
				mysql_close($con);
				?>
				
		
</table>
</div>
	</div>
</body>
</html>