<?php
session_start();
session_destroy();
?><!DOCTYPE html>
<html>
	<head>
		<title>Antlax | Login</title>
		<meta name="viewport" content="width=device-width">
<style>
body {
	background-color:blue;
}
</style>
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<script src="js/jquery-1.11.3.min.js"></script>
		<script src="js/jjs.js"></script>

	</head>
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
				<div class="top-head">
					<h1>Login</h1>
				</div>
				<form id="user_login_form" class="reg-input">
					<ul id="meme">
		      			<li><label>E-mail Address:</label>
		      			<input type="E-mail" name="email"></li>
		      			<li><label>Password:</label>
		      			<input type="Password" name="password"></li>
		      			<li><label></label>
		      			<input id="allradio" type="radio" name="remember" value="1"><p>Remember Me</p></li>
						<div style="display:none" class="alert alert-success success"></div>
													<div style="display:none" class="alert alert-info loading">Loading...</div>
													<div style="display:none" class="alert alert-danger error"></div>
		      			<li><label></label><button id="btnLogin">Login</button><a href="forgot-password">Forgot Your Password?</a></li> 
		      		</ul>
				</form>
			</div>
		</section>
	</body>
	<script>
$(document).ready(function (e) {
	$("#user_login_form").on('submit',(function(e) {
		e.preventDefault();
		$('.loading').show();
		$('.success').hide();
		$('.error').hide();
		$('#btnLogin').attr('disabled','disabled');
		$.ajax({
			url: "user_login",
			type: "POST",
			data: new FormData(this),
			contentType: false,
			cache: false,
			processData:false,
			success: function(data)
			{
				$('#btnLogin').removeAttr('disabled');
				$('.loading').hide();
				
				if(data.search("Error")!=-1){
					$('.error').show();
					$('.success').hide();
					$('.error').html(data);
				}
				else{
					$('.success').show();
					$('.error').hide();
					$('.success').html(data);
				}
			}
		});
	}));
});
	</script>
</html>