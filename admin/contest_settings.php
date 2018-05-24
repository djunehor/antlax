<?php 
require '../includes/config.php';
require 'admin-auth.php'; 
//get variables from $REQUEST superglobal
$array=array("user_email","reduce");
foreach($_REQUEST as $key=>$value){
	if(in_array($key,$array)){
		$$key=addslashes($value);
	}
}
//set variables names
$reduce = filter_var($reduce, FILTER_SANITIZE_STRING);
$email = filter_var($user_email, FILTER_SANITIZE_EMAIL);

//check if valid number was entered
if($reduce>100 || $reduce<1) {
	die("Error: Invalid value supplied for reduction percent");
}
$query = "UPDATE $user_table SET reduce='$reduce'";
$x = mysqli_query($con,"SELECT * FROM $user_table WHERE email='$email'");
		if(!empty($email) && mysqli_num_rows($x)==1) {			
			$query .= " WHERE email='$email'";	
			} elseif(!empty($email) && mysqli_num_rows($x)!=1){
			die ("Error: Provided email does not exist");	
			}			
$reduction = mysqli_query($con,$query);
	if($reduction) {
		echo "User <b>".$email."</b> referral count has been reduced by $reduce %";
			} else {
	die('Error: '.mysqli_error($con));
			}
?>