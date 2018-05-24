<!DOCTYPE html>
<html>
	<head>
		<title>Antlax | Password Retrieval</title>
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
					<h1>Retrieve your password</h1>
				</div>
				<div class="top-head2">
					<p>Enter your email below and we will send a link to reset your password to you</p>
					<p>You need to contact <a href="#">support</a> if you have lost access to your email or you simply want to update your email address.</p>
				</div>
				<div class="reg-input">
					<ul>
		      			<li><label>Your Email:</label>
		      			<input type="email" id="email"></li>  
		      			<li><label></label><button id="dede" type="reset">Cancel</button> <button id="preset" onclick="forgotPassword()">Submit</button></li> 
		      		</ul>
				</div>
				<div class="top-head1">
					 &nbsp;
													<div style="display:none" class="alert alert-info loading">Loading...</div>
				</div>
				<br><br>
			</div>
		</section>
	</body>
	<script>
	function forgotPassword(){
		$('#preset').attr('disabled','disabled');
		var email = document.getElementById("email").value;
		$('.loading').show();
	$.post("http://localhost/antlax/partner/forgot_password",{email:email},function(data){
		if(data.length != 0){;
			$('.loading').html(data);
			$('#preset').removeAttr('disabled');
		}
	});
}
</script>
	
</html>