<?php
//ensure no server side errors are outputted for user
require '../includes/config.php';
require '../includes/functions.php';

$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
if(empty($email)) {
	$error = 'Email Cannot be empty';
}
elseif(mysqli_num_rows(mysqli_query($con,"select * from $user_table where email='$email'"))!=1){
$error = 'Email Does Not Exist';
}
else
{
	$reset_code = bin2hex(openssl_random_pseudo_bytes(16));
	$insert = mysqli_query($con,"UPDATE $user_table SET reset_code='$reset_code' WHERE email='$email'");
	if(!$insert)
	{
		$error = 'Error: '.mysqli_error($con);
	}
	else
	{
		$result = "Password Reset Instructions have been sent to your email.";
		$next = "http://".$_SERVER['SERVER_NAME']."/partner/reset-password?code=".$reset_code;
//send reset email
$message = "<HTML><BODY><div class=\"message\" style=\"position: relative;
    width: 60%;
    margin: 30px auto;
    display: block;
    padding: 0px;
    border: 1px solid rgb(207,121,48);
    border-radius: 7px;\">
						 	<div class=\"msg-head2\">
						 		<h1>Password reset</h1>
						 	</div>
						 	<div class=\"msg-body\">
						 		<h1 class=\"he\">Confirm your email address</h1>
						 		<p>Please confirm that you want to change your password. If you receive this by mistake or weren't expecting it, please disregard this email.</p>
						 	</div> 
						 	<button id=\"verifymail\" href=\"".$next."\">Click to Reset Password</button>
						 	<p class=\"verifya\">or paste the link to your browser:</p>
						 	<a class=\"verifyaa\" href=\"".$next."\">".$next."</a>
						 	<br><br>
						 </div>";
$message .= "<br><br><br>The Admin Team,<br />{$option['website_name']}</p>
</BODY></HTML>";
						SendMail('noreply@'.$_SERVER['SERVER_NAME'],'Password Reset',$email,$message,$option['website_name']);
	}
}
				if(isset($error)) { echo "Error: ".$error; } else{echo $result;}