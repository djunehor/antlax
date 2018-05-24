<?php
include 'user-auth.php';
$unread = mysqli_num_rows(mysqli_query($con,"SELECT * FROM notifications WHERE postdate>'".$user['lastlogin']."'"));
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $option['website_name']." | $page_title"; ?> </title>
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/clock.css">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="js/jquery-1.11.3.min.js"></script>
		<script src="js/jjs.js"></script>
		<script src="js/slick.js"></script>
		
		<script>
			var slider = document.getElementById("myRange-dash");
			var output = document.getElementById("demo-dash");
			output.innerHTML = slider.value;

			slider.oninput = function() {
			  output.innerHTML = this.value;
			}
		</script>
		<script type="text/javascript">			
			function myFunction() {
			    var x = document.getElementById("left-menu-toggle");
			    if (x.style.display === "block") {
			        x.style.display = "none";
			    } else {
			        x.style.display = "block";
			    }
			}
		</script>
	</head>
	<body>
		<section class="dashboard">
			<div class="dash-head">
				<div class="dash-logo">
					<a href="#"><img src="images/logo.png"></a>
					<div class="sandwich">
						<button></button>
					</div>
				</div>
				<div class="dash_header_content">  
				</div>
				<div class="dashboard-profile">
					<ul>
						<li><a href="myaccount"><i class="fa fa-cog"></i></a></li> 
						<li><a href="setup-instructions"><i class="fa fa-cogs"></i></a></li>
						<li><a class="notify1" href="message"><i class="fa fa-bell"><?php echo $unread; ?></i></a></li>
						<li><a href="profile-settings"><i class="fa fa-users"></i></a></li> 
						<li><a href="social-sharing"><i class="fa fa-share-alt"></i></a></li>
						<li><a href="referral-contest"><i class="fa fa-trophy"></i></a></li>
						<li><a href="login"><i class="fa fa-sign-out"></i></a></li>
					</ul> 					
				</div>
				<div onclick="myFunction();" class="media-span">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
			<div id="left-menu-toggle" class="dash-leftmenu">
				<h2><i class="fa fa-home fa-1x"></i>Dashboard</h2>
				<div class="extra-space"></div>
				<ul>
					<li><a href="myaccount"><i class="fa fa-cog"></i>My Account</a></li> 
				</ul>
				<span></span> 
				<ul>
					<li><a href="setup-instructions"><i class="fa fa-cogs"></i>Setup Instructions</a></li>
					<!-- <li><a href="#"><i class="fa fa-money"></i>Earnings</a></li>
					<li><a href="#"><i class="fa fa-globe"></i>Commision</a></li> -->
				</ul>
				<span></span> 
				<ul>
					<li><a class="notify" href="trade-notification"><i class="fa fa-bell"></i>Live Notification Inbox</a></li>
					<!-- <li><a href="#"><i class="fa fa-stack-exchange"></i>Exchange</a></li>
					<li><a href="#"><i class="fa fa-credit-card-alt"></i>Deposit</a></li>
					<li><a href="#"><i class="fa fa-usd"></i>Withdrawal</a></li>
					<li><a href="#"><i class="fa fa-sticky-note"></i>Listing Votes</a></li> -->
				</ul>
				<span></span> 
				<ul>
					<li><a href="myrevenue"><i class="fa fa-users"></i>My Revenue</a></li>
				</ul>
				<span></span>
				<ul>
					<li class="loan"><a href="myloan"><i class="fa fa-book"></i>My Loan</a></li>
				</ul>
				<span></span>
				<ul>
					<li><a href="social-sharing"><i class="fa fa-share-alt"></i>Social Promotion</a></li>
				</ul>
				<span></span>
				<ul>
					<li><a href="referral-contest"><i class="fa fa-trophy"></i>Referral Contest</a></li>
				</ul>
				<span></span>
				<ul>
					<li><a href="login"><i class="fa fa-sign-out"></i>Logout</a></li>
				</ul> 
			</div><div class="dash-content"> 
				