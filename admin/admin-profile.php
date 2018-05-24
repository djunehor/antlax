<?php
$page_name="Profile";
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
	   <div style="display:none" class="alert alert-success success"></div>
													<div style="display:none" class="alert alert-info loading">Loading...</div>
													<div style="display:none" class="alert alert-danger error"></div>
													<div style="display:none" class="alert alert-danger error_show"></div>

     
<form id="admin_profile" role="form">
<table class="table table-bordered table-striped">
							<tbody>				
								
								<tr>
									<td>Username</td>
									<td width="70%"><input type="text" class="form-control" name="username" value="<?php echo $_SESSION['adminName'] ;?>" readonly /></td>
								</tr>
								<tr>
									<td >Old Password</td>
									<td><input type="password" class="form-control" name="opassword" required /></td>
								</tr>
								<tr>
									<td >New Password</td>
									<td><input type="password" class="form-control" name="password" required /></td>
								</tr>
								<tr>
									<td >Retype Password</td>
									<td><input type="password" class="form-control" name="cpassword" required /></td>
								</tr>
								<tr>
									<td colspan="2" style="text-align:center;">
										<button type="submit" id="btnAdmin" class="btn btn-info" ><i class="edit icon"></i>Update Profile</button>
									</td>
								</tr>
							</tbody>
						</table>
					</form>
					</section>
</div>
<script>
$(document).ready(function (e) {
	$("#admin_profile").on('submit',(function(e) {
		e.preventDefault();
		$('.loading').show();
		$('.success').hide();
		$('.error').hide();
		$('#btnAdmin').attr('disabled','disabled');
		$.ajax({
			url: "admin_profile",
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
