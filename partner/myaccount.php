<?php
$page_title = "My Account";
include 'header.php';
?> 

				<div class="dashboard2">
					<div class="dashboard-title1">
						<label><i class="fa fa-mobile"></i>My Account Details</label><br>
						<strong><?php echo date('Y/m/d g:i a'); ?></strong>
						<hr>
						<div class="home-first">
							<div class="myaccount">
								<table>
									<tr>
										<td>Full Names:</td>
										<td><?php echo $user['fullname']; ?></td>
									</tr>
									<tr>
										<td>Date of Birth:</td>
										<td><?php echo date('M d, Y',$user['dob']); ?></td>
									</tr>
									<tr>
										<td>Country:</td>
										<td>
									<?php echo $user['country'];
									?></td>
									</tr>
									<tr>
										<td>State:</td>
										<td><?php echo $user['state']; ?></td>
									</tr>
									<tr>
										<td>Address:</td>
										<td><?php echo $user['address']; ?></td>
									</tr>
									<tr>
										<td>Email:</td>
										<td><?php echo $user['email']; ?></td>
									</tr>
									<tr>
										<td>Phone Number:</td>
										<td><?php echo $user['phone']; ?></td>
									</tr>
									<tr>
										<td>Whatsapp Line:</td>
										<td><?php echo $user['whatsapp']; ?></td>
									</tr>
									<tr>
										<td>Referral Link:</td>
										<td>https://antlax/partner/<?php echo $user['userID']; ?></td>
									</tr>
								</table>
						</div>  
					</div>					
				</div>
				</div>
				<?php include 'footer.php'; ?>