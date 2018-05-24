<?php
//ensure no server side errors are outputted for user
require '../includes/config.php';
require '../includes/functions.php';
require '../includes/class.validate_input.php';
$validate = new validateInput();
//get variables from $REQUEST superglobal
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
$confpass = filter_var($_POST['confirmpassword'], FILTER_SANITIZE_STRING);
$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
$country = filter_var($_POST['country'], FILTER_SANITIZE_STRING);
$state = filter_var($_POST['state'], FILTER_SANITIZE_STRING);
$address = filter_var($_POST['address'], FILTER_SANITIZE_STRING);
$phone = filter_var($_POST['phonenumber'], FILTER_SANITIZE_STRING);
$whatsapp = filter_var($_POST['whatsappnumber'], FILTER_SANITIZE_STRING);
$referrer = filter_var($_POST['referrer'], FILTER_SANITIZE_STRING);
$fullname = filter_var($_POST['fullname'], FILTER_SANITIZE_STRING);
$dob = strtotime($_POST['dob']);
if(empty($email) || ($validate->email($email,false))===false){
$error = 'Enter a valid Email';
}
else if(strlen($validate->password($password))>5) {
$error = $validate->password($password);
}
else if($password!=$confpass){
$error = 'Passwords do not match!';
}
else if(mysqli_num_rows(mysqli_query($con,"select * from $user_table where email='$email'"))>0){
$error = 'Email Already Exist';
}
else if(mysqli_num_rows(mysqli_query($con,"select * from $user_table where username='$username'"))>0){
$error = 'Username Already Exist';
}
elseif(!$error)
{
	$pword = md5($password);
	$reg_time = time();

	$insert = mysqli_query($con,"INSERT INTO $user_table (email,password,username,phone,country,joindate,refid,email_code,state,address,whatsapp,fullname,dob) 
	VALUES ('$email','$pword','$username','$phone','$country','$reg_time','$referrer','$email_code','$state','$address','$whatsapp','$fullname','$dob')");
	
	$next = "http://".$_SERVER['SERVER_NAME']."/partner/verify-email?code=$email_code";
	
	if(!$insert)
	{
		$error = 'Error: '.mysqli_error($con);
	}
	else
	{
		$result = "Registration Successful.";
//send welcome email
$message = "<HTML><BODY><div class=\"message\" style=\"position: relative;
    width: 60%;
    margin: 30px auto;
    display: block;
    padding: 0px;
    border: 1px solid rgb(207,121,48);
    border-radius: 7px;\">
						 	<div class=\"msg-head2\">
						 		<h1>Email Confirmation</h1>
						 	</div>
						 	<div class=\"msg-body\">
						 		<h1 class=\"he\">Confirm your email address</h1>
						 		<p>Please confirm that you want to use this as your profile email address. If you receive this by mistake or weren't expecting it, please disregard this email.</p>
						 	</div> 
						 	<button id=\"verifymail\" href=\"".$next."\">Confirm your account</button>
						 	<p class=\"verifya\">or paste the link to your browser:</p>
						 	<a class=\"verifyaa\" href=\"".$next."\">".$next."</a>
						 	<br><br>
						 </div>";
$message .= "<br><br><br>The Admin Team,<br />{$option['website_name']}</p>
</BODY></HTML>";
						SendMail('noreply@'.$_SERVER['SERVER_NAME'],'New Registration',$email,$message,$option['website_name'],$username);
	}
}
				if(isset($error)) { echo "Error: ".$error; } else{echo $result;}