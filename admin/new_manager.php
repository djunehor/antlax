<?php 
require '../includes/config.php';
require '../includes/functions.php';
require 'admin-auth.php'; 
//get variables from $REQUEST superglobal
$array=array("user_email");
foreach($_REQUEST as $key=>$value){
	if(in_array($key,$array)){
		$$key=addslashes($value);
	}
}
//set variables names
$email = filter_var($user_email, FILTER_SANITIZE_EMAIL);
if(mysqli_num_rows(mysqli_query($con,"select * from $user_table where email='$email'"))>0){
$error = 'Email Already Exist';
}
else
{
	$email_code = bin2hex(openssl_random_pseudo_bytes(16));
	$insert = mysqli_query($con,"INSERT INTO $user_table (email,activated,email_code,role) 
	VALUES ('$email',1,'$email_code',1)");
	if(!$insert)
	{
		$error = 'Error: '.mysqli_error($con);
	}
	else
	{
		$result = "Registration Link has ben generated and sent to <b>$email</b>.";
		$url = "http://".$_SERVER['SERVER_NAME']."/partner/user-registration?code=$email_code";
//send welcome email
$message = "<HTML><BODY>
<div style='font-family:arial; border:2px solid #c0c0c0; padding:15px; -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px;'>
<div style='font-size:22px; color:darkblue; font-weight:bold;'>Invitation from {$option['website_name']}</div>
You have recieved a registration invite from us.<br>
	<a href=\"{$url}\">Click here to open a manager account</a> or copy the following link : {$url}
<br><br><br>The Admin Team,<br />{$option['website_name']}</p>
</div></BODY></HTML>";
						SendMail('noreply@'.$_SERVER['SERVER_NAME'],'Registration Link',$email,$message,$option['website_name']);
	}
}
				if(isset($error)) { echo "Error: ".$error; } else{echo $result;}
?>