<?php
$page_name="Edit User";
require "admin-auth.php";
require "../header.php";
?>
<div class="content-wrapper">
                <section class="content-header">
      <h1><?php echo $page_name; ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"><?php echo $page_name; ?></li>
      </ol>
    </section>
	   <section class="content">
	   

     
<form id="user_profile" role="form">
<table class="table table-bordered table-striped">
							<tbody>				
<?php
$userID= isset($_GET['id']) ? $_GET['id']:0;
$user = mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM $user_table WHERE userID='$userID'"));
?>								
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
										<td><input type="email" value="<?php echo $user['email']; ?>" name="email"></td>
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
										<td><input type="hidden" name="userID" value="<?php echo $user['userID']; ?>"><button type="submit" class="btn btn-primary btn-block btn-flat" id="btnAdmin">Update</button></td>
									</tr>
							</tbody>
						</table>
						<div style="display:none" class="alert alert-success success"></div>
													<div style="display:none" class="alert alert-info loading">Loading...</div>
													<div style="display:none" class="alert alert-danger error"></div>
					</form>
					</section>
</div>
<script>
$(document).ready(function (e) {
	$("#user_profile").on('submit',(function(e) {
		e.preventDefault();
		$('.loading').show();
		$('.success').hide();
		$('.error').hide();
		$('#btnAdmin').attr('disabled','disabled');
		$.ajax({
			url: "edit_user",
			type: "POST",
			data: new FormData(this),
			contentType: false,
			cache: false,
			processData:false,
			success: function(data)
			{
				$('#btnAdmin').removeAttr('disabled');
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
	</script>
<?php
include "../foot.php";
?>
