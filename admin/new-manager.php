<?php
$page_name="Contest Settings";
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
		<li>Ensure you provide valid email address</li>
		<li>Action cannot be undone as email will have been sent</li>
		</ul>
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Generate and send registration link to manager</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			<div style="display:none" class="alert alert-success success"></div>
													<div style="display:none" class="alert alert-info loading">Loading...</div>
													<div style="display:none" class="alert alert-danger error"></div>
													<div style="display:none" class="alert alert-danger error_show"></div>

     
			<form id="website_form" role="form">
			<div class="form-group"><div class="form-group">
			  <label>Email Address</label>
                <input type="email" class="form control" name="user_email" required>
              </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <div class="pull-right">
                <button type="submit" id="btnWeb" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send Link</button>
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
			url: "new_manager",
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
	</script>
	<!-- Bootstrap WYSIHTML5 -->
<script src="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script>
  $(function () {
    //Add text editor
    $("#compose-textarea").wysihtml5();
  });
</script>
<?php
include "../foot.php";
?>
