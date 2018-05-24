<?php
//ensure no server sde errors are outputted for user
require '../includes/config.php';
require 'admin-auth.php';

//get variables from $REQUEST superglobal
$array=array("password","cpassword","opassword","username");
foreach($_REQUEST as $key=>$value){
	if(in_array($key,$array)){
		$$key=addslashes($value);
	}
}

//set variables names
$username = filter_var($username, FILTER_SANITIZE_STRING);
$password = filter_var($password, FILTER_SANITIZE_STRING);
$opassword = filter_var($opassword, FILTER_SANITIZE_STRING);
$cpassword = filter_var($cpassword, FILTER_SANITIZE_STRING);
$opwd = md5($opassword); //hash password
$npwd = md5($password); //hash password

session_start();
if($opwd!=$_SESSION['adminPassword']) {
$error = "Incorrect Old Password!";	
} elseif($password!=$cpassword) {
$error ="New Passwords do not match!";	
} elseif(strlen($password)<8) {
	$error ="New Password cannot be less than 8 characters";
} else {
$update_admin = mysqli_query($con,"UPDATE $admin_table SET password='$npwd' WHERE username='$username'");
if($update_admin) {

			$_SESSION['adminPassword'] = $npwd;
			$result = 'Password has been changed successfully!';
} else {
	$error = "Unexpected Error occured. Try again later!";	
		}
}
	if(isset($error)) {
		echo "Error: ".$error;
		} elseif(isset($result)) {
			echo $result;
			}
?>