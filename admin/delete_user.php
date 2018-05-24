<?php
//ensure no server sde errors are outputted for user
require '../includes/config.php';
require 'admin-auth.php';

//set variables names
@$userID= $_REQUEST['pid'];

if(!is_numeric($userID)) {
$error = "Invalid User!";	
} elseif(mysqli_num_rows(mysqli_query($con,"SELECT userID FROM $user_table WHERE userID='$userID'"))!=1) {
$error ="User does not exist!";	
} else {
$delete_user = mysqli_query($con,"DELETE FROM $user_table WHERE userID='$userID'");
if($delete_user) {
			$result = "User has been deleted! <script>$(user".$userID.").hide();</script>";
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