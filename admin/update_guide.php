<?php 
require '../includes/config.php';
require 'admin-auth.php'; 
//get variables from $REQUEST superglobal
if(isset($_REQUEST['udoc'])) {
$file = @$_REQUEST['udoc'];
$imageFileType = pathinfo($file,PATHINFO_EXTENSION);
if ( !in_array($imageFileType, array('pdf')) )
{
$error .= "Invalid File: Only 'pdf' allowed! Your file is $imageFileType";
}
echo $error;
}
?>