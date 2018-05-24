<?php
$page_name="All Managers";
require "admin-auth.php";
require "../header.php";
?>
<!-- DataTables -->
  <link rel="stylesheet" href="../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
     <section class="content-header">
      <h1><?php echo $page_name; ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo $page_id; ?>"><i class="fa fa-dashboard"></i> <?php echo $page_name; ?></a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">
			  <?php				
			  require_once '../includes/functions.php';			  
$query = "select * from $user_table WHERE activated=1 AND role=1 ORDER BY userID DESC";			  
$mmm = pagination($con,substr($_SERVER['SCRIPT_NAME'],0,-4),$query,50);
	?>
			  All Users <?php echo "(Page ".$page."/".$lastpage." pages)"; ?></h3>
			  <button class="btn btn-danger" style="float:right;"><a style="color:white;" href="contest-settings">Reset User Referral</a></button>
            </div>
            
          </div>
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">User Details</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			<div class="alert alert-danger pname_error_show" style="display:none"></div>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>UserID</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Reg Date</th>
                  <th>Facebook</th>
                  <th>Country</th>
                  <th>Gender</th>
                  <th>Actions</th>
                  <th></th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
						  <?php
while($v = mysqli_fetch_array($mmm))
		{
		?>
                <tr id="user<?php echo $v['userID']; ?>">
                  <td><?php echo $v['userID']; ?></td>
                  <td><?php echo $v['username']; ?></td>
                  <td><?php echo $v['email']; ?></td>
                  <td><?php echo date('d/M/Y g:i a',$v['joindate']); ?></td>
                  <td><a target="_blank" href="<?php echo $v['facebook']; ?>">View Profile</a></td>
                  <td><?php echo $v['country']; ?></td>
                  <td><?php echo $v['gender']; ?></td>
                  <td><button class="btn btn-info"><a style="color:white;" href="contest-settings?id=<?php echo $v['email']; ?>">Reduce Referral</a></button></td>
                  <td><button class="btn btn-success"><a style="color:white;" href="edit-user?id=<?php echo $v['userID']; ?>">Edit</a></button></td>
                  <td><button onclick="del_con(this.value)" id="btnDelete" type="submit" value="<?php echo $v['userID']; ?>" class="btn btn-danger">Delete</button></td>
                </tr>
				<?php } ?>
                </tbody>
                <tfoot>
                <tr>
                 <?php
echo $pagination; ?>
<link href="../dist/css/pagination.css" rel='stylesheet' type='text/css' />
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<script>
			function del_con(value){
	$.post("delete_user",{pid:value},function(data){
		if(data.length != 0){
			$('.pname_error_show').show();
			$('.pname_error_show').html(data);
		}else{
			$('.pname_error_show').hide();
			$('#btnDelete').removeAttr('disabled');
		}
	});
}
</script> 
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<?php include '../foot.php'; ?>