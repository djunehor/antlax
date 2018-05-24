<?php 
require '../includes/config.php';
require 'admin-auth.php'; 
//get variables from $REQUEST superglobal
$array=array("mode","ref1","ref2","ref3","reset","resetref","resettype","rank1","rank2","rank3");
foreach($_REQUEST as $key=>$value){
	if(in_array($key,$array)){
		$$key=addslashes($value);
	}
}
//set variables names
$mode = filter_var($mode, FILTER_SANITIZE_STRING);
$ref1 = filter_var($ref1, FILTER_SANITIZE_STRING);
$ref2 = filter_var($ref2, FILTER_SANITIZE_STRING);
$ref3 = filter_var($ref3, FILTER_SANITIZE_STRING);
$rank1 = filter_var($rank1, FILTER_SANITIZE_STRING);
$rank2 = filter_var($rank2, FILTER_SANITIZE_STRING);
$rank3 = filter_var($rank3, FILTER_SANITIZE_STRING);
$resetref = filter_var($resetref, FILTER_SANITIZE_STRING);
if(!is_numeric($ref1) || !is_numeric($ref2) || !is_numeric($ref3) || !is_numeric($rank1) || !is_numeric($rank2) || !is_numeric($rank3)) {
die ("Error: Form contains invalid elements");
}
if (strlen($_FILES['myphoto']['name'])>4) { 
$filearray = $_FILES['myphoto'];
						$name = $filearray['name'];
						$tmpName  = $filearray['tmp_name'];
						$uploaddir = '../images/';
                      $uploadfile = $uploaddir . basename($name);
                      $url = $uploadfile;
							if (move_uploaded_file($tmpName, $uploadfile))
								{
								echo "File <b>".$name."</b> was successfully uploaded. ";
								$update = mysqli_query($con,"UPDATE options SET user_guide='$url' WHERE website_code='$website_code'");
									if($update) {
									echo " User guide has been updated. ";
									} else {
									die("Error: User Guide update failed. ");	
									}
								} else {
								die("Error: File <b>".$name."</b> upload failed! ");	
								}
}
if (strlen($_FILES['avatar']['name'])>4) { 
//$mfile = $_FILES['avatar'];
//$mimageFileType = pathinfo($mfile,PATHINFO_EXTENSION);
//if ( !in_array($mimageFileType, array('jpg','JPG')) )
//{
//die( "Error: Invalid Avatar - Only 'jpg' allowed! Your file ".$_FILES['avatar']['name']." is $mimageFileType");
//}
$filearray = $_FILES['avatar'];
						$name = $filearray['name'];
						$tmpName  = $filearray['tmp_name'];
						$uploaddir = '../images/';
                      $uploadfile = $uploaddir . basename($name);
                      $url = $uploadfile;
							if (move_uploaded_file($tmpName, $uploadfile))
								{
								echo "Avatar <b>".$name."</b> was successfully uploaded. ";
								$update = mysqli_query($con,"UPDATE $admin_table SET photo='$url' WHERE adminID='".$_SESSION['adminID']."'");
									if($update) {
									echo " Avatar been updated. ";
									} else {
									die("Error: Avatar update failed. ");	
									}
								} else {
								die("Error: Avatar <b>".$name."</b> upload failed! ");	
								}
}
//first save in daatabase
$setting = mysqli_query($con,"update $option_table set resettype=resettype='$resettype',maintenance='$mode',ref1='$ref1',ref2='$ref2',ref3='$ref3',rank1='$rank1',rank2='$rank2',rank3='$rank3' where website_code='$website_code'");
if($setting) {
echo 'Website settings update successful!';
	if($mode==1) {
		echo ' Maintenance mode has been activated.';
		}
} else {
echo "Error: ".mysqli_error($con);
}	
	
if($resettype==1 && $resetref==1) {
$reset = mysqli_query($con,"UPDATE $user_table SET monthref=0");
$save_reset = mysqli_query($con,"UPDATE $option_table SET lastreset='".time()."'");
	if($reset) {
		echo ' All Users monthly referral count has been reset';
			} else {
	echo 'Error: '.mysqli_error($con);
			}
} elseif($resettype==1) {
	echo ' Reset Mode is Manual';
}elseif($resettype==0) {
	echo ' Reset Mode is Automatic';
}
?>