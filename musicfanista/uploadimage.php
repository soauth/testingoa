<?php
session_start();


if(isset($_FILES['file'])){

	$location='images/.jpg';
	//unlink($location);
	$name = $_FILES['file']['name'];
	
	//$size = $_FILES['file']['size'];
	$type = $_FILES['file']['type'];
	$tmp_name=$_FILES['file']['tmp_name'];
	//$error = $_FILES[''][''];
	
	if(isset($name)){
		if(!empty($name)){
			
			move_uploaded_file($tmp_name, $location);	
				echo "<script type=\"text/javascript\">";
echo "alert(\" File uploaded Successfully \");";
echo "window.location.href=\"update_movie.php\";";
echo "</script>";
			}
		
		}
		
	}
	
?>	

<html>
<head>
<title>File Uploading Form</title>
</head>
<body>
<h3>File Upload:</h3>
Select a file to upload: <br />
<form action="uploadimage.php" method="post"
                        enctype="multipart/form-data">
<input type="file" name="file" />
<br />
<input type="submit" value="Upload File" />
</form>
</body>
</html>