<html>
<head>
<title>Contact Us</title>
<style>
#para
		{
		float:left;
		margin-top:10px;
		padding:10px;
		
		}
		form
		{
		display:block;
		float:right;
		margin-left:10px;
		margin-top:0px;
		margin-right:0px;
		}
		#logbutton
		{
			
			border-radius:5px;
			border-width:0px;
			font-size:20px;
			padding:3px;
			font-weight:bold;
			font-family: Lucida Handwriting;
		}
		#txt
		{
			background-color:White;
			border-radius:3px;
			border-width:1px;margin:1px;
			border-color:Black;
			padding:7px;
			
		}
		#reg
		{
		color:ORANGE;
		margin-left:10px;
		font-size:15px;
		border-style:solid;
		border-color:CC6600;
		padding:5px;
		border-width:1px;
		border-radius:5px;
		width:150%;
		height:50%;
		}
		#reg td
		{
		padding:5px;
		}
</style>
</head>
<body>

<div style="padding:15px;border-radius:10px;border:5px solid #000000;">
<font face='Kristen ITC' color='EE872A' size='5'> <center>Contact Us<br><br></font>
<font face='Verdana' color='000000'>
<table>
<tr>
<td>Follow Us On:</td>
<td><a href="https://www.facebook.com/" target="_blank"><img src="fb3.jpg" height='35px' width='35px'></a></td>
<td><a href="https://www.twitter.com/" target="_blank"><img src="twitter2.jpg" height='35px' width='35px'></a></td>
<td><a href="https://www.linkedin.com/" target="_blank"><img src="in.jpg" height='35px' width='35px'></a></td>
</tr>
</table>
<br>
For more information contact:
<table cellspacing="50">
<tr>
<td>
Ms. Pooja Durge<br>
9930004637<br>
poojadurge2126@gmail.com</td><br>

<td>
Ms. Sayali Goregaonkar<br>
9699924624<br>
sayali.goregaonkar@gmail.com</td>
<td>
Mr. Tushar Kajale<br>
9029738438<br>
tusharkajale2507@gmail.com</td>
</tr>
</table>
</center>
<div id="para">
			
			<form name="mailme" id="mailme"  method="post" action="sendmail.php">
				<table id="reg">
				<tr>
					<td> E-mail</td>
				</tr>
				<tr>
					<td> <input type="text" name="email" size=65  id="txt"/></td>
				</tr>
				<tr>
					<td> Subject</td>
				</tr>
				<tr>
					<td>  <input type="text" name="sub" size =65 id="txt"/></td>
				</tr>
				<tr>
					<td>  Message</td>
				</tr>
				<tr>
					<td>  <textarea rows="20" cols="65" id="txt" name="msg"/> message </textarea></td>
				</tr>
				<tr>
					<td>  <button type="submit" id="logbutton" onClick="return validateForm(document.mailme.email)">Send</button> <button type="reset" id="logbutton" onClick="return resetCon()">Reset</button>
				</tr>
				</table>
			</form>
			


			</div>
</body>
</html>