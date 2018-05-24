<?php
//ensure no server sde errors are outputted for user
require '../includes/config.php';
require 'user-auth.php';

//set variables names
$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
$cpassword = filter_var($_POST['cpassword'], FILTER_SANITIZE_STRING);
$opassword = filter_var($_POST['opassword'], FILTER_SANITIZE_STRING);
$country = filter_var($_POST['country'], FILTER_SANITIZE_STRING);
$state = filter_var($_POST['state'], FILTER_SANITIZE_STRING);
$address = filter_var($_POST['address'], FILTER_SANITIZE_STRING);
$phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
$whatsapp = filter_var($_POST['whatsapp'], FILTER_SANITIZE_STRING);
$fullname = filter_var($_POST['fullname'], FILTER_SANITIZE_STRING);
$pemail = filter_var($_POST['pemail'], FILTER_SANITIZE_STRING);
$bitcoin = filter_var($_POST['bitcoin'], FILTER_SANITIZE_STRING);
$dob = strtotime($_POST['dob']);
$opwd = md5($opassword); //hash password
$npwd = md5($password); //hash password

if(empty($state)) {
	$error = "State cannot be empty!";	
}
if(!empty($password)) {
		if($opwd!=$_SESSION['password']) {
$error = "Incorrect Old Password!";	
} elseif($password!=$cpassword) {
$error ="New Passwords do not match!";	
} elseif(strlen($password)<8) {
	$error ="New Password cannot be less than 8 characters";
}
}

if(!$error) {
$query = (!empty($opwd)) ? "UPDATE $user_table SET country='$country',state='$state',address='$address',phone='$phone',whatsapp='$whatsapp',fullname='$fullname',dob='$dob',password='$npwd',pemail='$pemail',bitcoin='$bitcoin' WHERE userID='".$_SESSION['userID']."'" : "UPDATE $user_table SET country='$country',state='$state',address='$address',phone='$phone',whatsapp='$whatsapp',fullname='$fullname',dob='$dob',pemail='$pemail',bitcoin='$bitcoin' WHERE userID='".$_SESSION['userID']."'";
$st = mysqli_query($con,$query) or die("Error: ".mysqli_error($con));
$result = "Profile Updated successfully";
}
	if(isset($error)) {
		echo "Error: ".$error;
		} elseif(isset($result)) {
			echo $result;
			}
?>