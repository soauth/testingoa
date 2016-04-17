<?php

session_start();
if (!isset($_SESSION['user_info'])){
	header('Location:login.php');
	
	}

if (isset($_SESSION['user_info'])){
	require_once 'includes/sql.php' ;

	$user_info=$_SESSION['user_info'];
	$result1=get_stud_info($user_info['roll_no']);

	}
	require_once 'includes/sql.php' ;
	$query_result= get_place_info($user_info['roll_no']);
	/*print_r($query_result['sem1']);
	exit();*/
	
	if(isset($_POST['update'])){
	$usscyr=$_POST['sscyr'];
	$usscm=$_POST['sscm'];
	$uhscyr=$_POST['hscyr'];
	$uhscm=$_POST['hscm'];
	$usem1=$_POST['sem1'];
	$usem2=$_POST['sem2'];
	$usem3=$_POST['sem3'];
	$usem4=$_POST['sem4'];
	$usem5=$_POST['sem5'];
	$usem6=$_POST['sem6'];
	$udeadkt=$_POST['deadkt'];
	$ulivekt=$_POST['livekt'];
	$uaddr=$_POST['addr'];
	$ubday=$_POST['DOBDay'];
	$ubyr=$_POST['DOBYear'];
	$ubmonth=$_POST['DOBMonth'];
	$uemail=$_POST['email'];
	$ubranch=$_POST['branch'];
	$umob=$_POST['mob'];
	$uroll=$_POST['roll'];
	
	require_once 'includes/sql.php' ;
	
		$msg1 = update_student($uroll,$uemail,$umob,$ubmonth,$ubday,$ubyr,$uaddr,$ubranch);
		$msg2 = update_placement($uroll,$usscyr,$usscm,$uhscyr,$uhscm,$usem1,$usem2,$usem3,$usem4,$usem5,$usem6,$udeadkt,$ulivekt);
	
} 
if(isset($_FILES['file'])){
	$location='files_data/uploads/placement/resume/' . $ubranch . '/' . $user_info['roll_no'] . '.pdf';
	//unlink($location);
	$name = $_FILES['file']['name'];
	
	//$size = $_FILES['file']['size'];
	$type = $_FILES['file']['type'];
	$tmp_name=$_FILES['file']['tmp_name'];
	//$error = $_FILES[''][''];
	
	if(isset($name)){
		if(!empty($name)){
			
			move_uploaded_file($tmp_name, $location);				
			}
		
		}
		
	}

?>


<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<meta charset="utf-8">
<title>FCES</title>
<script type='text/javascript' src='js/jquery-1.11.2.min.js'></script>
<script type='text/javascript' src='js/common.js'></script>
</head>
<body>
<?php require_once "common/header.php" ?>
<?php require_once "common/menu.php" ?>
<div id="pgsize">
<br>
<div id="pheader">
<h2>Update Profile</h2><br>
</div>
		
		<?php 
		/*$test=$_SESSION['user_info'];
		print_r($test['roll_no']);
		*/?>

<form  method="post" enctype="multipart/form-data">
<h3 name="subhead"><strong>Your Personal Details</strong> </h3>
<p><input type="text" required placeholder="First Name" value=<?php if(isset($_SESSION['user_info'])) echo $result1['fname'];?> />		
<input type="text" required placeholder="Last Name" value=<?php if($_SESSION['user_info']) echo $result1['lname'];?> /></p>
<p><input type="text" name="email" required placeholder="E-Mail" value="<?php if(isset($_SESSION['user_info'])) echo $result1['email'];?>" />
<input type="text" name="mob" required placeholder="Mobile" value="<?php if(isset($_SESSION['user_info'])) echo $result1['mob_no'];?>" />
<p>Date of Birth:    
<select name="DOBMonth" required placeholder="Month" value="<?php if(isset($_SESSION['user_info'])) echo $result1['bmonth'];?>">
	<option value="<?php if(isset($_SESSION['user_info'])) echo $result1['bmonth'];?>">
	<?php if(isset($_SESSION['user_info'])) echo $result1['bmonth'];?></option>
	<option value="January">January</option>
	<option value="Febuary">Febuary</option>
	<option value="March">March</option>
	<option value="April">April</option>
	<option value="May">May</option>
	<option value="June">June</option>
	<option value="July">July</option>
	<option value="August">August</option>
	<option value="September">September</option>
	<option value="October">October</option>
	<option value="November">November</option>
	<option value="December">December</option>
</select>

<select name="DOBDay" required placeholder="Date" value="<?php if(isset($_SESSION['user_info'])) echo $result1['bday'];?>">
	<option value="<?php if(isset($_SESSION['user_info'])) echo $result1['bday'];?>">
	<?php if(isset($_SESSION['user_info'])) echo $result1['bday'];?></option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
	<option value="13">13</option>
	<option value="14">14</option>
	<option value="15">15</option>
	<option value="16">16</option>
	<option value="17">17</option>
	<option value="18">18</option>
	<option value="19">19</option>
	<option value="20">20</option>
	<option value="21">21</option>
	<option value="22">22</option>
	<option value="23">23</option>
	<option value="24">24</option>
	<option value="25">25</option>
	<option value="26">26</option>
	<option value="27">27</option>
	<option value="28">28</option>
	<option value="29">29</option>
	<option value="30">30</option>
	<option value="31">31</option>
</select>

<select name="DOBYear" required placeholder="Day" value="<?php if(isset($_SESSION['user_info'])) echo $result1['byear'];?>">
	<option><?php if(isset($_SESSION['user_info'])) echo $result1['byear'];?></option>
	<option value="1993">1998</option>
	<option value="1993">1997</option>
	<option value="1993">1996</option>
	<option value="1993">1995</option>
	<option value="1993">1994</option>
	<option value="1993">1993</option>
	<option value="1992">1992</option>
	<option value="1991">1991</option>
	<option value="1990">1990</option>
	<option value="1989">1989</option>
	<option value="1988">1988</option>
	<option value="1987">1987</option>
	<option value="1986">1986</option>

</select>
</p>
<p align="center"><input name="addr" type="text" required placeholder="Address" value="<?php if(isset($_SESSION['user_info'])) echo $result1['addr'];?>"></p>
<h3 name="subhead"><strong>Your academic details</strong> </h3>
<p><select name="branch" required placeholder="" >
<option value="<?php if(isset($_SESSION['user_info'])) echo $result1['branch'];?>">
<?php if(isset($_SESSION['user_info'])) echo $result1['branch'];?></option>
<option value="Computer">Computer Engineering</option>
<option value="Information Technology">Information Technology</option>
<option value="Mechanical">Mechanical Engineering</option>
<option value="ExTc">Electronics and Telecommunication</option>
<option value="Electrical">Electrical Engineering</option>
</select>
		<input type="text" required placeholder="Roll No" name="roll" value=<?php if($_SESSION['user_info']) echo $user_info['roll_no'];?> /></p>
<p><h4 name="sshead">SSC</h4></p>
<p><input type="text" required placeholder="SSC Year" name="sscyr" value="<?php if(isset($_SESSION['user_info'])) echo $query_result['ssc_yr'];?>">		
<input type="text" name="sscm" required placeholder="SSC marks %" value="<?php if(isset($_SESSION['user_info'])) echo $query_result['ssc_marks'];?>" ></p>
<p><h4 name="sshead">HSC</h4></p>
<p><input type="text" required placeholder="HSC Year" name="hscyr" value="<?php if(isset($_SESSION['user_info'])) echo $query_result['hsc_yr'];?>" >		
<input type="text" required placeholder="HSC marks % " name="hscm" value="<?php if(isset($_SESSION['user_info'])) echo $query_result['hsc_marks'];?>" ></p>
<p><h4 name="sshead">Engineering</h4></p>
<p><input type="text" required placeholder="SEM 1(marks/800)" name="sem1" value="<?php if(isset($_SESSION['user_info'])) echo $query_result['sem1'];?>" >		
<input type="text" required placeholder="SEM 2(marks/800)" name="sem2" value="<?php if(isset($_SESSION['user_info'])) echo $query_result['sem2'];?>" ></p>
<p><input type="text" required placeholder="SEM 3(marks/850)" name="sem3" value="<?php if(isset($_SESSION['user_info'])) echo $query_result['sem3'];?>" >		
<input type="text" required placeholder="SEM 4(marks/850)" name="sem4" value="<?php if(isset($_SESSION['user_info'])) echo $query_result['sem4'];?>" ></p>
<p><input type="text" required placeholder="SEM 5(marks/850)" name="sem5" value="<?php if(isset($_SESSION['user_info'])) echo $query_result['sem5'];?>" >		
<input type="text" required placeholder="SEM 6(marks/850)" name="sem6" value="<?php if(isset($_SESSION['user_info'])) echo $query_result['sem6'];?>" ></p>
<p><input type="text" required placeholder="Live kt" name="livekt" value="<?php if(isset($_SESSION['user_info'])) echo $query_result['live_kt'];?>">		
<input type="text" required placeholder="Dead kt" name="deadkt" value="<?php if(isset($_SESSION['user_info'])) echo $query_result['dead_kt'];?>" ></p>
<p><input  placeholder="upload rusume" class="resume" id="file" type="file"  name="file" />
<br>Update Resume: * only .pdf files allowed.<p>
<p><input type="submit" value="update" name="update" ></p>
</form>

</div>
<?php require_once "common/footer.php" 
?>
</body>
</html>