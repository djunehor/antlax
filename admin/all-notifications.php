<?php
$page_name="All Notifications";
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
        <li><a href="index"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"><?php echo $page_name; ?></li>
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
$query = "select * from $notification_table ORDER BY ID DESC";			  
$mmm = pagination($con,substr($_SERVER['SCRIPT_NAME'],0,-4),$query,50);
	?>
			  All Notifications <?php echo "(Page ".$page."/".$lastpage." pages)"; ?></h3>
            </div>
            
          </div>
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Recent Notifications</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">			
			<div class="alert alert-danger pname_error_show" style="display:none"></div>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Subject</th>
                  <th>Content</th>
                  <th>Post Date</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
						  <?php
while($v = mysqli_fetch_array($mmm))
		{
		?>
                <tr id="note<?php echo $v['ID']; ?>">
                  <td><?php echo $v['ID']; ?></td>
                  <td><?php echo $v['subject']; ?></td>
                  <td><?php echo $v['content']; ?></td>
                  <td><?php echo date('d/M/Y g:i a',$v['postdate']); ?></td>
                  <td><button onclick="del_note(this.value)" id="btnDelete" type="submit" value="<?php echo $v['ID']; ?>" class="btn btn-danger">Delete</button></td>
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
			function del_note(value){
	$.post("delete_note",{pid:value},function(data){
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