<?php
session_start();

$con=mysql_connect("localhost","root","");
			if(!$con)
			die(mysql_error()."cannot connect to DB");
			mysql_select_db("musicfanista",$con);
			
		
			
			$result=mysql_query("select * from movie_details where m_name='PK'");
				if(!$result) die(mysql_error());
		
				if(mysql_num_rows($result)==0)
					{
							echo "<script type=\"text/javascript\">";
							echo "alert(\" No record exists\");";
							echo "window.location.href=\"finalhome.php\";";
							echo "</script>";
					}
					else
					{
					while($r=mysql_fetch_array($result))
						{
							$mn=$r['m_name'];
							$yr=$r['year_of_release'];
							$c=$r['cast'];
							$d=$r['director'];
							$p=$r['producer'];
							$md=$r['music_director'];
							//$re=$r['review'];
							//$pt=$r['path'];
							$ip=$r['img_path'];

}}
?>

<html>
			<title>MusicFanista
					</title>
			<head>
				<link rel="stylesheet" type="text/css" href="style1.css"></head>

<body>
<div id="mainbody">
		<div id="header">
			<table width='100%'>
				<tr><td width='30%'></td>
<td width='40%' align='center'><span id="h1"><font face='Edwardian Script ITC' color='yellow' ><b>MusicFanista</b></font> </span></td>
				<td width='30'>
				
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

<div width=100% height=34%>
<table>
<tr>
<td width=44% height=34%>
<img src="<?php echo $ip; ?>" width="400" height="350">
</td>
<td width=56% height=34%>
<font color='#D8D8D8'size="10px"><b><?php echo $mn; ?></b></font><br><br>
<font color='RED' size="4px"><b>Year Of Release:</b></font>
<font color='#D8D8D8'><b><?php echo $yr; ?></b></font><br>
<font color='RED' size="4px"><b>Cast:</b></font>
<font color='#D8D8D8'><b><?php echo $c; ?></b></font><br>
<font color='RED' size="4px"><b>Director:</b></font>
<font color='#D8D8D8'><b><?php echo $d; ?></b></font><br>
<font color='RED' size="4px"><b>Producer:</b></font>
<font color='#D8D8D8'><b><?php echo $p; ?></b></font><br>
<font color='RED' size="4px"><b>Music Director:</b></font>
<font color='#D8D8D8'><b><?php echo $md; ?></b></font><br>
</tr>
</table>
</div>
<div id="songlist" width="100%" height="64%">
<?php
$res=mysql_query("select * from audios where m_name='".$mn."'");

				if(!$res) die(mysql_error());
		
				if(mysql_num_rows($res)==0)
					{
							echo "<script type=\"text/javascript\">";
							echo "alert(\" No record exists\");";
							echo "window.location.href=\"finalhome.php\";";
							echo "</script>";
					}
					else
					{
						echo "<table id=\"song\">";
						echo	"<tr id=\"m1\">";
						echo	"<td> <b>Select</b></td><td></td><td width=\"250\"><font color=\"Green\" size=\"6px\"><b>Song </b></font></td><td></td><td></td><td width=\"500\"><font color=\"Green\" size=\"6px\"><b>Singer</b></font></td>";
						echo "</tr>";
						echo "<form name=\"selectsong\" method=\"post\" action=\"play.php\">";

						while($row=mysql_fetch_array($res))
						{
					
								echo "<tr>";
								echo 	"<td> <input type=\"radio\" name=\"select\" checked value=\"".$row['path']."\"></td><td></td><td width=\"78\"><font color=\"RED\" size=\"5px\"><b>".$row['song']."</b></font></td><td></td><td></td><td width=\"78\"><font color=\"RED\" size=\"5px\"><b>".$row['singer']."</b></font></td><td><button type=\"submit\" id=\"logbutton\" >Play</button></td>";
								echo "</tr>";

							echo "<tr height=\"10\">";
							echo"</tr>";


						$d=$row['song'];
						$_SESSION['c']=$d;

	
						}

						$d=$row['song'];
						$_SESSION['c']=$d;

						
						echo "</form>";
					}
					mysql_close($con);	
?>
</div>

</div>
</div>
</body>
</html>