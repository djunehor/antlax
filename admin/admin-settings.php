<?php
$page_name="Website Settings";
require "admin-auth.php";
require "../header.php";
?>
 <!-- bootstrap wysihtml5 - text editor -->
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
      <div class="row">
        <div class="col-md-3">
        <ul>
		<li>Ensure you crosscheck before submitting</li>
		<li>Rank 1 means minimum referral count (per month) to be in level 1</li>
		<li>Referral Earning Should be entered in dollar value</li>
		<li>Leave settings as they are if you don't want to change it</li>
		<li>If you tick reset checkbox and leave user email field empty, reset will take effect on ALL USERS!</li>
		<li>To reset single user referral count, tick checkbox and enter user email</li>
		</ul>
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Change Admin Settings</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
	<form id="website_form" role="form" enctype="multipart/form-data">
			<div class="form-group">
			  <label>Admin Avatar</label><br>
              <input class="form-control" name="avatar" type="file">
              </div>
			  <div class="form-group">
			  <label>Earn per ref</label>
                <input class="form-control" type="number" name="earn" value="<?php echo $option['earn']; ?>">
              </div>
			  <div class="form-group">
			  <label>Earn per thousand</label>
                <input class="form-control" type="number" name="ecum" value="<?php echo $option['ecum']; ?>">
              </div>
			  
			  <div class="form-group">
			  <label>Reset Referral Mode</label><br>
                <input type="radio" name="resettype" value="0" <?php if($option['reset_type']==0){echo 'checked';}?>>Automatic<br>
                <input type="radio" name="resettype" value="1" <?php if($option['reset_type']==1){echo 'checked';}?>>Manual
              </div>
			  <?php
			  if($option['resettype']==1) {
				  ?>
			  <div class="form-group">
			  <label>Reset Referral Count</label><br>
                <input type="checkbox" name="resetref" value="1">Reset Now
              </div>
			  <?php } ?>
			   <div class="form-group">
			  <label>Change User Guide</label>
                   <input onchange="check_photo(this.value)" class="form-control" name="myphoto" type="file">
													<div style="display:none" class="alert alert-danger upload_error"></div> 
              </div>
            </div>
            <!-- /.box-body -->
						<div style="display:none" class="alert alert-success success"></div>
													<div style="display:none" class="alert alert-info loading">Loading...</div>
													<div style="display:none" class="alert alert-danger error"></div>
													<div style="display:none" class="alert alert-danger error_show"></div>
            <div class="box-footer">
              <div class="pull-right">
                <button type="submit" id="btnWeb" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Save Settings</button>
              </div>
              </form>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<script>
$(document).ready(function (e) {
	$("#website_form").on('submit',(function(e) {
		e.preventDefault();
		$('.loading').show();
		$('.success').hide();
		$('.error').hide();
		$('#btnWeb').attr('disabled','disabled');
		$.ajax({
			url: "admin_settings",
			type: "POST",
			data: new FormData(this),
			contentType: false,
			cache: false,
			processData:false,
			success: function(data)
			{
				$('#btnWeb').removeAttr('disabled');
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
function check_photo(value){
	$.post("update_guide",{udoc:value},function(data){
		if(data.length != 0){
			$('.upload_error').show();
					$('.upload_error').html(data);
					$('#btnWeb').attr('disabled','disabled');
				} else {
					$('.upload_error').hide();
					$('#btnWeb').removeAttr('disabled');
				}
	});
}
	</script>
<?php
include "../foot.php";
?>
