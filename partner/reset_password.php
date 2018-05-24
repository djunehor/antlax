<?php
//ensure no server sde errors are outputted for user
require '../includes/config.php';

//get variables from $REQUEST superglobal
//set variables names
$code = filter_var($_POST['code'], FILTER_SANITIZE_STRING);
$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
$npwd = md5($password); //hash password

if(strlen($code)<32) {
	$error ="Key <b>$code</b> not valid";
}
elseif(mysqli_num_rows(mysqli_query($con,"SELECT * FROM $user_table WHERE reset_code='$code'"))!=1){
$error = 'Provided key not found!';		
}
elseif(strlen($password)<8) {
	$error ="New Password cannot be less than 8 characters";
} else {
$update_user = mysqli_query($con,"UPDATE $user_table SET password='$npwd',reset_code=null WHERE reset_code='$code'");
if($update_user) {
			$result = 'Password has been changed successfully! You can Login Now.';
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