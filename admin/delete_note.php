<?php
//ensure no server sde errors are outputted for user
require '../includes/config.php';
require 'admin-auth.php';
//set variables names
@$userID= $_REQUEST['pid'];

if(!is_numeric($userID)) {
$error = "Invalid Notification!";	
} elseif(mysqli_num_rows(mysqli_query($con,"SELECT ID FROM $notification_table WHERE ID='$userID'"))!=1) {
$error ="Notification does not exist!";	
} else {
$delete_user = mysqli_query($con,"DELETE FROM $notification_table WHERE ID='$userID'");
if($delete_user) {
			$result = "Notification has been deleted! <script>$(note".$userID.").hide();</script>";
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