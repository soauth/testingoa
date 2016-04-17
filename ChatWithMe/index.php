<html>
<head>
	<title>Chat With Me</title>
	
	
   <link href="/musicfanista/bootstrap/bootstrap.min.css" rel="stylesheet">
   <script src="/musicfanista/bootstrap/jquery.min.js"></script>
   <script src="/musicfanista/bootstrap/bootstrap.min.js"></script>
   
</head>
<body>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '949460205087646',
      xfbml      : true,
      version    : 'v2.2'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>



<div class="panel panel-info">
   <div class="panel-heading">
      <h1 class="panel-title">
        <center>  <br>  <strong> <font face="Edwardian Script ITC" size="20" > Chat With Me </font>  </strong></center>
      </h1>
   </div>
   <div class="panel-body">
         <div class="panel panel-default">

   <div class ="container">
	<form method="post" action="chat.php" role="form" class="form-horizontal">
	<br>
	<br>
		 <div class="form-group">
			<label for="email" class="col-sm-3 control-label" >Your Email : </label>
		<div class="col-sm-5" >	
			<input type="email" name="myid" value="" id="email" required="required"></div>
		</div> 
		<br>
		 <div class="form-group">
			<label for="femail" class="col-sm-3 control-label" >Friend Email : </label>
		<div class="col-sm-5">	
			<input type="email" name="fid" value="" id="femail" required="required"></div>
		</div>
		<br><br>
		<div class="form-group">
		<center>	 <input class="btn btn-info" type="reset" name="clr" value =" CLEAR " class="sub_button"> &nbsp; 
					<input class="btn btn-info" type="submit" value=" DONE "> </center>
		</div>
	</form> </div>
	</div>
</div></div>
</body>
</html>