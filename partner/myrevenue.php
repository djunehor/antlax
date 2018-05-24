<?php
$page_title = "My Revenue";
include 'header.php';
$actRef = round((mysqli_num_rows(mysqli_query($con,"SELECT * FROM $user_table WHERE activated=1 and refid='".$_SESSION['userID']."' AND joindate between '".strtotime('this month')."' and '".(strtotime('next month')-1)."'")))*((100-$user['reduce'])/100));
$totRef = round(mysqli_num_rows(mysqli_query($con,"SELECT * FROM $user_table WHERE activated=1 and refid='".$_SESSION['userID']."'"))*((100-$user['reduce'])/100));
if($user['role']==0) {
$totearn = $totref*0.5;	
}
?> 
				<div class="dashboard2">
					<div class="dashboard-title1">
						<label><i class="fa fa-mobile"></i>My Earnings</label><br>
						<strong><?php echo date('Y/m/d g:i a'); ?></strong>
						<hr> 
						<div class="home-first">
							<div class="message5">
							 	<div class="msg5-head">
							 		<h1>Referral Stats</h1>
							 	</div>
							 	<div class="msg5-body"> 
							 		<p><?php echo date('M Y'); ?></p>
							 		<table>
							 			<tr>
							 				<td>Active Refferals</td>
							 				<td><?php echo $actRef; ?></td>
							 			</tr>
							 			<tr>
							 				<td>Active Cumulative Referrals</td>
							 				<td><?php echo $totRef; ?></td>
							 			</tr>
							 			<tr>
							 				<td>Attrition</td>
							 				<td><?php echo $user['reduce']; ?>%</td>
							 			</tr>
							 			<tr style="font-weight: bold;">
							 				<td>Estimated Payment</td>
							 				<td>$<?php echo $totearn; ?></td>
							 			</tr>
							 			<tr>
							 				<td colspan="2"><p>Note: Inactive referral earnings will be removed before payment</p></td>
							 			</tr>
							 		</table>
							 	</div>							 	 
							</div>
							<div class="message6">
								<h2>Payments Summary</h2>
							 	<div class="msg6-body" style="word-wrap:break-word;">  
							 		<table>
							 			<tr>
							 				<th>Month</th>
							 				<th>Active Cumulative Referrals</th>
							 				<th>Active Referrals</th>
							 				<th>Payment ($)</th>
							 				<th>Narrative</th>
							 				<th>Status</th>
							 			</tr>
										<?php 
										error_reporting(E_ALL);
										$s = mysqli_query($con,"SELECT * FROM payments WHERE userID='".$_SESSION['userID']."' and postdate between '".strtotime('this year')."' AND '".(strtotime('next year')-1)."' order by postdate asc");
										while($p=mysqli_fetch_assoc($s)) {
										?>
							 			<tr>
							 				<td><?php echo date('M, Y',$p['postdate']); ?></td>
							 				<td><?php echo $p['actcum']; ?></td>
							 				<td><?php echo $p['actref']; ?></td>
							 				<td style="font-weight: bold;"><?php echo $p['pay']; ?></td>
							 				<td><?php echo $p['detail']; ?></td>
							 				<td style="color: <?php if($p['status']==1) {$status= "Paid";echo "green";} else {$status= "Pending";echo "red";} ?>"><?php echo $status; ?></td>
							 			</tr>
										<?php } ?>
							 		</table>
							 	</div>
							</div>
						</div>  
					</div>					
				</div> 	
				<?php include 'footer.php'; ?>