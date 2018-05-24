<!DOCTYPE html>
<html>
	<head>
		<title>Antlax | Password Reset</title>
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/clock.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<script src="js/jquery-1.11.3.min.js"></script>
		<script src="js/jjs.js"></script>
		<script src="js/slick.js"></script>
	</head>
	<body class="log">
		<header>
			<div class="container">
				<div class="log-logo">
					<img src="images/logo.png">
				</div>
				<div class="log-menu">
					<ul>
						<li><a href="login">Login</a></li>
						<li><a href="register">Register</a></li>	
					</ul>
				</div>
			</div>
		</header>
		<section class="applicationsform">
			<div class="app-frm">
				<div class="top-head1">
					<h1>Reset your password</h1>
				</div>
				<div class="top-head2">
				 <?php
				 include '../includes/config.php';
$key = filter_var($_GET['code'], FILTER_SANITIZE_STRING);
if(empty($key)) {
print('<div class="alert alert-danger error">Key is Missing!</div>');	
}
elseif(mysqli_num_rows(mysqli_query($con,"SELECT * FROM $user_table WHERE reset_code='$key'"))!=1){
print('<div class="alert alert-danger error">Provided key not found!</div>');		
} else {
?></div>
				<div class="reg-input">
					<ul>
<li><input type="password" class="form-control1" name="password" id="password" placeholder="New Password" autofocus="" required></li>
      <li><input type="password" class="form-control1" name="cpassword" id="confirm_password" onblur="confirm_pw(this.value)" placeholder="Confirm Password" required></li>
      <li><input type="hidden" name="reset_code" id="code" value="<?php echo $key; ?>"></li>						
		      			<li><label></label><button id="dede" type="reset">Cancel</button> <button id="btnReset" onclick="resetPassword()">Submit</button></li> 
		      		</ul>
				</div>
<?php } ?>
				<div class="top-head1">
					 &nbsp;
													<div style="display:none" class="alert alert-info loading">Loading...</div>
				</div>
				<br><br>
			</div>
		</section>
	</body>
	<script>
	function confirm_pw(value){
	var pw=$('#password').val();
	if(pw!=value){
		$('.loading').show();
		$('.loading').html('The same password should be entered in both fields. Please, re-enter the password correctly.');
		$('#btnReset').attr('disabled','disabled');
	}else{
		$('.loading').hide();
		$('#btnReset').removeAttr('disabled');
	}
}
	function resetPassword(){
		$('#btnReset').attr('disabled','disabled');
		var value = document.getElementById("password").value;
		var key = document.getElementById("code").value;
		$('.loading').show();
	$.post("reset_password",{password:value,code:key},function(data){
		if(data.length != 0){;
			$('.loading').html(data);
			$('#btnReset').removeAttr('disabled');
		}
	});
}
</script>
	
</html>