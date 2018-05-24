<?php
$page_name="Send Notification";
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
      <div class="row">
       
            <div class="box-header with-border">
              <h3 class="box-title">Compose New Message</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			<div style="display:none" class="alert alert-success success"></div>
													<div style="display:none" class="alert alert-info loading">Loading...</div>
													<div style="display:none" class="alert alert-danger error"></div>
													<div style="display:none" class="alert alert-danger error_show"></div>

     
			<form id="send_note" role="form">
              <div class="form-group">
                <select class="form-control" name="filterby">
				<?php
				echo '<option>-------- Filter By --------</option><option>--- Country ---</option>';
				$x = mysqli_query($con,"SELECT DISTINCT(country) FROM $user_table WHERE activated=1");
				while($y=mysqli_fetch_assoc($x)) {
				echo '<option value="'.$y['country'].'">'.$y['country'].'</option>';	
				}
				echo '<option>--- Gender ---</option><option value="female">Female</option><option value="male">male</option>';
				?>
				</select>
              </div>
              <div class="form-group">
                <input class="form-control" name="subject" required placeholder="Subject:">
              </div>
              <div class="form-group">
                    <textarea name="content" required class="form-control" style="height: 300px"></textarea>
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <div class="pull-right">
                <button type="submit" id="btnWeb" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Save & Send</button>
              </div>
			  </form>
            </div>
            <!-- /.box-footer -->
          </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<script>
$(document).ready(function (e) {
	$("#send_note").on('submit',(function(e) {
		e.preventDefault();
		$('.loading').show();
		$('.success').hide();
		$('.error').hide();
		$('#btnWeb').attr('disabled','disabled');
		$.ajax({
			url: "send_notification",
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
<?php
include "../foot.php";
?>
