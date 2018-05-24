<?php
$page_title = "Home";
include 'header.php';
$actRef = round((mysqli_num_rows(mysqli_query($con,"SELECT * FROM $user_table WHERE activated=1 and refid='".$_SESSION['userID']."' AND joindate between '".strtotime('this month')."' and '".(strtotime('next month')-1)."'")))*((100-$user['reduce'])/100));
$totRef = round(mysqli_num_rows(mysqli_query($con,"SELECT * FROM $user_table WHERE activated=1 and refid='".$_SESSION['userID']."'"))*((100-$user['reduce'])/100));
if($user['role']==0) {
$totearn = $totref*0.5;	
}
?>
			<div class="dashboard2">
					<div class="dashboard-title1">
						<label><i class="fa fa-mobile"></i>My Account Summary</label><br>
						<strong><?php echo date('Y/m/d g:i a'); ?></strong>
						<hr>
						<div class="home-first">
							<div class="home-first-sub">
								<a href="profile-settings"><h2>Settings</h2>
								<img src="images/settings.png"></a>
							</div>
							<div class="home-first-sub">
								<a href="message"><h2>Notifications</h2>
								<img src="images/notification.png">
								<span>Unread : <strong><?php echo $unread;?></strong></span></a>
							</div>
							<div class="home-first-sub"> 
								<a href="myaccount"><img src="images/users.png">
								<ul>
									<li>AR : <strong></strong><?php echo $actRef; ?></li>
									<li>CR : <strong><?php echo $totRef; ?></strong></li>
									<li>IR : <strong><?php echo $user['reduce']; ?>%</strong></li>
									<li>ER : <strong>$<?php echo $totearn; ?></strong></li>
								</ul></a>
							</div>
							<div class="home-first-sub"> 
								<a href="myloan"><img src="images/loan.png">
								<p>Interest<br>Free Loan</p></a>
							</div>
						</div>
						<label class="dash-label">Dashboard</label><br>
						<div class="home-second">
							<div class="home-second-sub">
								<a href="setup-instructions"><img src="images/bulkset.png">
								<p>Setup<br>Instruction</p></a>
							</div>
							<div class="home-second-sub">
								<a href="faq"><img src="images/faq.png">
								<p>Questions<br>Answered</p></a>
							</div>
							<div class="home-second-sub">
								<a href="social-sharing"><img src="images/share.png">
								<p>Social<br>Sharing</p></a>
							</div>
							<div class="home-second-sub">
								<a href="referral-contest"><img src="images/contest.png">
								<p>Referral<br>Contest</p></a>
							</div>
						</div>  
					</div>					
				</div> 	
				<?php include 'footer.php'; ?>