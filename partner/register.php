<?php
include '../includes/config.php'; 
?><!DOCTYPE html>
<html>
	<head>
		<title>Antlax | Application-form</title>
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
	<!--	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">  -->
		<script src="js/jquery-1.11.3.min.js"></script>
		<script src="js/jjs.js"></script>
		<script src="js/slick.js"></script>
		<style>
		 .alert {
			 background-color:rgb(207,121,48); color:white;
			 padding-left: 5%;
			 font-weight:bold;
		 }
		</style>
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
					<h1>Registration</h1>
				</div>
				<?php include 'register_form.php'; ?>
			</div>
		</section>
		<script>
	$(document).ready(function (e) {
	$("#register_form").on('submit',(function(e) {
		e.preventDefault();
		$('.loading').show();
		$('.success').hide();
		$('.error').hide();
		$('#btnRegister').attr('disabled','disabled');
		$.ajax({
			url: "user_register",
			type: "POST",
			data: new FormData(this),
			contentType: false,
			cache: false,
			processData:false,
			success: function(data)
			{
				$('#btnRegister').removeAttr('disabled');
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
function confirm_pw(value){
	var pw=$('#password').val();
	if(pw!=value){
		$('.pw_error_show').show();
		$('.pw_error_show').html('The same password should be entered in both fields. Please, re-enter the password correctly.');
		$('#btnSubmit').attr('disabled','disabled');
	}else{
		$('.pw_error_show').hide();
		$('#btnRegister').removeAttr('disabled');
	}
}
function getStates(value){
	$.post("ajax_get_states",{country:value},function(data){
		if(data.length != 0){
			$('.state_now').hide();
			$('.state_show').show();
			$('.state_show').html(data);
		}
	});
}
</script>
	</body>
</html>