<?php
error_reporting(0);
//database variables
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "antlax";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
    die("Error: Connection failed-> " . $con->connect_error);
 }
$website_code = '0X&KHJ22hast';
$website_url = 'http://localhost/antlax';
$admin_table = "admins";
$user_table = "users";
$country_table = "countries";
$notification_table = "notifications";
$option_table = "options";
$admin_folder = "test-admin"; //localtion of admin folder. Default is test-admin
$option = mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM options WHERE website_code='$website_code'"));
?>