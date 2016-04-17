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
			
			function validateForm()
			{
				
				
				var d=document.forms["searchform"]["skey"].value;
				if (d==null || d=="")
				  {
				  alert("Please enter a keyword");
				  return false;
				}	

			}
			
		

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
				<tr><td width='30%'>
<form name="searchform" method="post" action="search.php">
							<table id="tb1" >
								<tr><td><font color="WHITE"><b>Search Here For The Song:</b></font><br><input type="text" id="txt" name="skey"><button type="submit" id="logbutton1" onClick="return validateForm()"><img src="images/search.bmp" width="30px" height="30px"/></button></td></tr>
</td></tr></table></form></td>
<td width='40%' align='center'><span id="h1"><font face='Edwardian Script ITC' color='yellow' ><b>MusicFanista</b></font> </span></td>
				<td width='30'>
				<form action="preconfirmtalk.php" method="post" name="form1">
				
				<input type="submit" id="submit"  value="CHAT WITH ME" align="center">
				<?php if(isset($_POST['bk1'])){
				$_SESSION['ch']=true;
				
				}
				?>
				</form>
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
			<table width='100%'>
				<tr width='100%'>
					<td id="left" width='30%' >
						
						<ul>
						
						<li>
						<a href="badlapur.php">DOWNLOAD BADLAPUR SONGS</a></li>
						
						<img src="images/Badlapur_Poster.jpg" height="200" width='90%'><br>
						
						<br>
						<hr>
						
						
						<li>
						<a href="shamitabh.php">DOWNLOAD SHAMITABH SONGS</a></li>
						
						<img src="images/Shamitabh.jpg" height="200" width='90%'><br>
						
						<br>
						<hr>
						
						<li>
						<a href="baby.php">DOWNLOAD BABY SONGS</a></li>
						
						<img src="images/BABY_poster_2015.jpg" height="200" width='90%'><br>
						
						<br>
						<hr>
						
						<li><a href="Tevar.php">DOWNLOAD TEVAR SONGS</a></li>
						
						<img src="images/tevar.jpg" height="200" width='90%'><br>
						<br>
						<hr>
						
						
						<li>
						<a href="PK.php">DOWNLOAD PK SONGS</a></li>
						
						<img src="images/pk.jpg" height="200" width='90%'><br>
						
						<br>
						<hr>
						
						<li>
						<a href="haider.php">DOWNLOAD HAIDER SONGS</a></li>
						
						<img src="images/Haider_Poster.jpg" height="200" width='90%'><br>
						
						<br>
						
						
						
						</ul>
					</td>
					
				
					
					<td id="right" width='65%'>
					<?php
					$result=mysql_query("select DISTINCT m_name from movie_details ORDER BY m_name ASC");
				if(!$result) die(mysql_error());
		
				if(mysql_num_rows($result)==0)
					{
							echo "<script type=\"text/javascript\">";
							echo "alert(\" No record exists \");";
							echo "window.location.href=\"finalhome.php\";";
							echo "</script>";
					}
					else
					{
						echo "<table id=\"movie\">";
						echo "<form name=\"selectsong\" method=\"post\" action=\"getmov.php\">";

						while($row=mysql_fetch_array($result))
						{
					
							
							
								echo "<tr>";
								echo 	"<td> <input type=\"radio\" name=\"select\" checked value=\"".$row['m_name']."\"></td><td></td><td width=\"350\"><font color=\"Yellow\" size=\"5px\"><b>".$row['m_name']."</b></font></td><td></td><td></td><td width=\"58\"><button type=\"submit\" id=\"logbutton2\" >DOWNLOAD</button></td>";
								
								echo "</tr>";
						
						}
						echo "</form>";
					}
				mysql_close($con);
				?>
				
			</table>
</div>

	<div id="footer">
		<p>Admin <a target="_blank" href="main_login.php"><span id="me">Login</span></a></p>
		<p>Copyright S.P.T</p>

		</div>
</div>
</body>
</html>	