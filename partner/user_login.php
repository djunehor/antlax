<?php
//ensure no server sde errors are outputted for user
require '../includes/config.php';

//set variables names
$email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
$pasword = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
$remember = filter_var($_POST['remember'], FILTER_SANITIZE_STRING);
$pword = md5($pasword); //hash password

session_start();
$x = mysqli_query($con,"SELECT * FROM $user_table WHERE email='$email' AND password='$pword'");
if(mysqli_num_rows($x)==1) {
	
			$login = mysqli_fetch_assoc($x);
if($login['activated']!=1) {
die('
				<div style="background-color:rgb(207,121,48); color:white;">
				A verification link has been sent to your email account
				</div>
				<div style="color:rgb(207,121,48); background-color:white;">
				Please click on the link that has just been sent to your email account to verify your email and continue the registration process.
				</div>
');	
}
			session_regenerate_id(true);
			$_SESSION['userID'] = $login['userID'];
			$_SESSION['userRole'] = $login['role'];
			$lastlogin = $login['lastlogin'];
			if($remember==1) {
				//get strong 64 characters string as unique identifier, save cookie in user browser and save copy in user row;
				$sessionid = bin2hex(openssl_random_pseudo_bytes(32));
				setcookie("remember_me", $sessionid, time() + (86400*30));	
			}
			$mtn = mysqli_query($con,"UPDATE $user_table SET sessionid='$sessionid',lastlogin='".time()."' WHERE userID='".$_SESSION['userID']."'");
			//output to user. Redirect to appropriate page
			$result = 'Login Successful. Redirecting in 3 seconds. <script>window.setTimeout(function(){ window.location = "index"; },3000)</script>';
			$result .= "<script>$('#btnLogin').attr('disabled','disabled');</script>";
} else {
	$error = "Invalid email or password!";	
		}
	if(isset($error)) {
		echo "Error: ".$error;
		} elseif(isset($result)) {
			echo $result;
			}
?>