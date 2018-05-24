<?php
$page_name="Update User Guide";
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
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			<div style="display:none" class="alert alert-success success"></div>
													<div style="display:none" class="alert alert-info loading">Loading...</div>
													<div style="display:none" class="alert alert-danger error"></div>

     
			<form id="user_guide_form" role="form">
              
              <div class="form-group">
			  Choose pdf file
                   <input onchange="check_photo(this.value)" class="form-control" name="myphoto" type="file">
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <div class="pull-left">
                <button type="submit" id="btnWeb" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Update</button>
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
function check_photo(value){
	$('.loading').show();
	$.post("update_guide",{udoc:value},function(data){
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
				$('.loading').hide();
	});
}
	</script>
<?php
include "../foot.php";
?>
