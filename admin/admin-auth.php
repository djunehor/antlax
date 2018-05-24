<?php
require '../includes/config.php';
session_start();
if(!isset($_SESSION['adminID']) || empty($_SESSION['adminID'])) {
header("Location: admin-login");
exit();
}
