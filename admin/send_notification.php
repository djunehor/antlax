<?php 
require '../includes/config.php'; 
require 'admin-auth.php'; 
//get variables from $REQUEST superglobal
$array=array("subject","content","filterby");
foreach($_REQUEST as $key=>$value){
	if(in_array($key,$array)){
		$$key=addslashes($value);
	}
}
$content = filter_var($content, FILTER_SANITIZE_STRING);
$subject = filter_var($subject, FILTER_SANITIZE_STRING);
$filter = filter_var($filter, FILTER_SANITIZE_STRING);

if(empty($subject) || empty($content)) {
	die('Error: Required fileds must be filled');
}
$note = mysqli_query($con,"INSERT INTO $notification_table(subject,content,postdate) VALUES('$content','$subject','".time()."')");
if($note) {
echo 'Notification saved!';
//get recipients and send push notification_table

//when successful
echo ' Notification have been sent to users';
} else {
echo "Error: ".mysqli_error($con);
}
?>