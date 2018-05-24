<?php
	require_once '../includes/config.php';
	//First check if session_variable exists. If not, check if cookie variable exists. If not, redirect user to login page
	session_start();
	//other authentication can be done here
	if(isset($_SESSION['userID'])) {
	$user = mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM $user_table WHERE userID='".$_SESSION['userID']."' limit 1"));
	//allow access
	} elseif(isset($_COOKIE['remember_me'])) {
	$remember = $_COOKIE['remember_me'];
	$query = mysqli_query($con,"SELECT * FROM $user_table WHERE remember='$remember'");
			if(mysqli_num_rows($query)==1) {
			$user = mysqli_fetch_assoc($query);
			session_regenerate_id(true);
			$_SESSION['userID'] = $user['userID'];
						
			$last_login = time();
			//update user last login
			$update_login = mysqli_query($con,"UPDATE $user_table SET lastLogin='$last_login' where userID='".$_SESSION['userID']."'");
			
			//Grant access to current page
	} else {
	header("location: login");	
		}
	}else {
		header("location: login");
		exit();
	} 
?>