<?php
$page_title = "Profile Setting";
include 'header.php';
?> 
<link href='css/bootstrap.css' rel='stylesheet' type='text/css' />

				<div class="dashboard2">
					<div class="dashboard-title1">
						<label><i class="fa fa-mobile"></i>My Account Details</label><br>
						<strong><?php echo date('Y/m/d g:i a'); ?></strong>
						<hr>
						<div class="home-first">
							<div class="myaccount">
								<table>
								<form id="profile_form" role="form">
									<tr>
										<td>Full Names:</td>
										<td><input type="text" value="<?php echo $user['fullname']; ?>" name="fullname"></td>
									</tr>
									<tr>
										<td>Date of Birth:</td>
										<td><input type="date" value="<?php echo date('M d, Y',$user['dob']); ?>" name="dob"></td>
									</tr>
									<tr>
										<td>Country:</td>
										<td><select name="country" onchange="getStates(this.value)">
									<?php
									$o = mysqli_query($con,"SELECT * FROM countries");
									while($c = mysqli_fetch_assoc($o)) {
									echo '<option ';
									echo ($c['name']==$user['country']) ? 'selected ' : '';
									echo 'value="'.$c['name'].'">'.$c['name'].'</option>';	
									}
									?>
									</select></td>
									</tr>
									<tr>
										<td>State:</td>
										<td><?php
										$country = $user['country']; 
$c = mysqli_fetch_assoc(mysqli_query($con,"SELECT id from countries where name='$country' limit 1"));
$s = mysqli_query($con,"select * FROM states where country_id='".$c['id']."'");
$output = '<select name="state" class=state_now">';
while($d = mysqli_fetch_assoc($s)) {
$output .= '<option ';
$output .= ($d['name']==$user['state']) ? 'selected ' : '';
$output .= ' value="'.$d['name'].'">'.$d['name'].'</option>';	
}
$output .= '</select>';
echo $output; ?><span style="display:none"></span></td>
									</tr>
									<tr>
										<td>Address:</td>
										<td><input type="text" value="<?php echo $user['address']; ?>" name="address"></td>
									</tr>
									<tr>
										<td>Email:</td>
										<td><?php echo $user['email']; ?></td>
									</tr>
									<tr>
										<td>Phone Number:</td>
										<td><input type="number" value="<?php echo $user['phone']; ?>" name="phone"></td>
									</tr>
									<tr>
										<td>Whatsapp Line:</td>
										<td><input type="number" value="<?php echo $user['whatsapp']; ?>" name="whatsapp"></td>
									</tr>
									<tr>
										<td>Paypal Email:</td>
										<td><input type="email" value="<?php echo $user['pemail']; ?>" name="pemail"></td>
									</tr>
									<tr>
										<td>Bitcoin Wallet:</td>
										<td><input type="text" value="<?php echo $user['bitcoin']; ?>" name="bitcoin"></td>
									</tr>
									<tr>
										<td>Change Password</td>
										<td>Leave the below fields blank if you do not wish to change password</td>
									</tr>
									<tr>
										<td>Old Password:</td>
										<td><input type="password" name="opassword"></td>

									</tr>
									<tr>
										<td>New Password:</td>
										<td><input type="password" name="password"></td>

									</tr>
									<tr>
										<td>Confirm Password:</td>
										<td><input type="password" name="cpassword"></td>

									</tr>
									<tr>										
										<td><button type="submit" class="btn btn-primary btn-block btn-flat" id="btnUpdate">Update</button></td>
									</tr>
									
								</form></table>
								<div style="display:none" class="alert alert-success success"></div>
													<div style="display:none" class="alert alert-info loading">Loading...</div>
													<div style="display:none" class="alert alert-danger error"></div>
							</div>
						</div>  
					</div>					
				</div>
 <script>
	$(document).ready(function (e) {
	$("#profile_form").on('submit',(function(e) {
		e.preventDefault();
		$('.loading').show();
		$('.success').hide();
		$('.error').hide();
		$('#btnUpdate').attr('disabled','disabled');
		$.ajax({
			url: "user_profile",
			type: "POST",
			data: new FormData(this),
			contentType: false,
			cache: false,
			processData:false,
			success: function(data)
			{
				$('#btnUpdate').removeAttr('disabled');
				$('.loading').hide();
				
				if(data.search("Error")!=-1){
					$('.error').show();
					$('.success').hide();
					$('.error').html(data);
				}
				else{
					$('.success').show();
					$('.error').hide();
					$('.success').html(data);
				}
			}
		});
	}));
});
function getStates(value){
	$.post("partner/ajax_get_states",{email:value},function(data){
		if(data.length != 0){
			$('.state_now').hide();
			$('.state_show').show();
			$('.state_show').html(data);
		}
	});
}
</script>				
				<?php include 'footer.php'; ?>