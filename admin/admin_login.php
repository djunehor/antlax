<?php
//ensure no server sde errors are outputted for user
require '../includes/config.php';
require '../includes/functions.php';

//get variables from $REQUEST superglobal
$array=array("username","password");
foreach($_REQUEST as $key=>$value){
	if(in_array($key,$array)){
		$$key=addslashes($value);
	}
}

//set variables names
$username = filter_var($username, FILTER_SANITIZE_STRING);
$pasword = filter_var($password, FILTER_SANITIZE_STRING);
$pword = md5($pasword); //hash password
if(empty($username) || empty($password)) {
die("Error: Username and Password is required!");	
}
session_start();
$x = mysqli_query($con,"SELECT * FROM $admin_table WHERE username='$username' AND password='$pword'");
if(mysqli_num_rows($x)==1) {
			$login = mysqli_fetch_assoc($x);

			session_regenerate_id(true);
			$_SESSION['adminID'] = $login['adminID'];
			$_SESSION['adminName'] = $login['username'];
			$_SESSION['adminEmail'] = $login['email'];
			$_SESSION['adminPassword'] = $login['password'];
			$_SESSION['adminImg'] = $login['photo'];
			
			//output to user. Redirect to appropriate page
			$result = 'Login Successful. Redirecting in 5 seconds. <script>window.setTimeout(function(){ window.location = "index"; },5000)</script>';
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