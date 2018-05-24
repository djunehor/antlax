<?php
require '../includes/config.php';
$email_code = filter_var($_GET['code'], FILTER_SANITIZE_STRING);;
//update payment status, available balance, confirmation time, total sent
	if(mysqli_num_rows(mysqli_query($con,"select * from $user_table WHERE email_code='$email_code'"))==1)
	{
	$s = mysqli_query($con,"update $user_table set email_code=null WHERE email_code='$email_code'") or die('Verification failed');
$result = 'Email Verification Successful! <a target="_blank" style="text-decoration: underline;color: #000;" href="'.$option['forex'].'">Register eWallet Now.</a> No deposit required.';
	}
	else
	{
$result = "Email Verification failed. Try again or contact support. SMS Verification has been disabled. Login now.";
	}	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Antlax | Verification Successful</title>
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/clock.css">
		<script src="js/jquery-1.11.3.min.js"></script>
		<script src="js/jjs.js"></script>
		<script src="js/slick.js"></script>
	</head>
	<body>
		<section class="dashboard"> 
			<div class="dashboard2">
				<div class="verification"> 
					<div class="vrf"> 
					</div>
					<div class="home-first">
						 	<br><br> 
						 <div style="border-radius: 0px;" class="message">
						 	<div class="msg-body">
						 		<img style="margin: 0 auto;position: relative;display: block;width: auto;height: 60px;" src="images/success.png">
						 		<h1 class="he1">Email Verification Messsage!</h1>
						 		<p class="comp"><?php echo $result; ?> </p>
						 	</div> 
						 	<button id="verifymail" onclick="eWalletReg()">Login Now</button> 
						 </div>
					</div>  
				</div>					
			</div>
		</section> 	 
		<script type="text/javascript">			
			function myFunction() {
			    var x = document.getElementById("left-menu-toggle");
			    if (x.style.display === "block") {
			        x.style.display = "none";
			    } else {
			        x.style.display = "block";
			    }
			}
			function () {
			window.location = "login";	
			}
		</script>
	</body>
</html>