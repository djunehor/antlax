<?php
$page_title = "Referral Contest";
include 'header.php';
?>
				<div class="dashboard2">
					<div class="dashboard-title1">
						<label><i class="fa fa-mobile"></i>Top Members List</label><br>
						<strong><?php echo date('Y/m/d g:i a'); ?></strong>
						<hr>
						<div class="loanp">
							<p>You will see your name here when you referred minimum of 100 active users in a month. Top 100 users will be selected for various prizes as listed below. Prizes are awarded at the end of the month and referral count is reset for new month contest.
							</p>
							<table class="contestr">
								<tr>
									<th>Places</th>
									<th>Prizes</th>
								</tr>
								<tr>
									<td>1 - 10:</td>
									<td>A new Laptop + Free Antlax T-Shirt with Free Shipping worldwide.</td>
								</tr>
								<tr>
									<td>11 - 20:</td>
									<td>Android Tablet + Free Antlax T-Shirt with Free Shipping worldwide.</td>
								</tr>
								<tr>
									<td>21 - 50:</td>
									<td>One[1] year data subscription + Free Antlax T-Shirt with Free Shipping worldwide.</td>
								</tr>
								<tr>
									<td>51 - 100:</td>
									<td>Six[6] month data subscription + Free Antlax T-Shirt with free Shipping worldwide.</td>
								</tr>
							</table>
						</div>
						<div class="home-first">
							 <div class="message">
							 	<div class="msg-head">
							 		<h1>This Month Top Members</h1>
							 	</div>
							 	<div style="padding: 0px;" class="msg-body"> 
						 			<table id="myTable" class="display">
								        <tr>
								            <th>Place</th>
								            <th>Full Names</th>
								            <th>Country</th>
								            <th>No. of Referrals</th>
								        </tr>
										<?php
										$query = "SELECT *,userID as myid,
(select count(distinct userID) from $user_table 
where refid=myid and 
joindate between '".strtotime('this month')."' and '".(strtotime('next month')-1)."') 
as refcount, 
((select count(distinct userID) from $user_table 
where refid=myid and 
joindate between '".strtotime('this month')."' and '".(strtotime('next month')-1)."')
*((100-reduce)/100))
 as newcount FROM $user_table 
 order by newcount desc";
										$j = mysqli_query($con,$query) or die(mysqli_error($con));
										$rank=0;
										while($k=mysqli_fetch_assoc($j)) {
											if(round($k['newcount'])>=1) {
											$rank++;
											?>
								        <tr>
								            <td><?php echo $rank; ?></td>
								            <td><?php echo $k['fullname']; ?></td>
								            <td><?php echo $k['country']; ?></td>
								            <td><?php echo round($k['newcount']); ?></td>
								        </tr>
											<?php } } ?>
									</table>
									<div class="con">
										<?php	 	echo $pagination;
echo "<link href='..css/pagination.css' rel='stylesheet' type='text/css' />";
?>
									</div>
							 	</div> 
							 </div>
						</div>  
					</div>					
				</div> 	
				<?php
include 'footer.php';
?>