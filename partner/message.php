<?php
$page_title = "Notification";
include 'header.php';
?>
				<div class="dashboard2">
					<div class="dashboard-title1">
						<label><i class="fa fa-mobile"></i>My Notification Inbox</label><br>
						<strong><?php echo date('Y/m/d g:i a'); ?></strong>
						<hr>
						<div class="home-first">
							 <div class="message">
							 	<div class="msg-head">
							 		<h1>Notification</h1>
							 	</div>
								<?php				
			  require_once '../includes/functions.php';			  
$query = "select * from notifications where type=0 and postdate>'".strtotime('this week')."' ORDER BY postdate DESC";			  
$mmm = pagination($con,substr($_SERVER['SCRIPT_NAME'],0,-4),$query,1);

while($v = mysqli_fetch_array($mmm))
		{
		?>
							 	<div class="msg-body" style="word-wrap:break-word;">
							 		<p><?php echo $v['subject']; ?></p>
									<p><?php echo $v['content']; ?>
							 		</p>
							 	</div>
		<?php } ?>
							 	
							 </div>
						</div> 
							 <div class="msg-foot">
						<?php	 	echo $pagination;
echo "<link href='..css/pagination.css' rel='stylesheet' type='text/css' />";
?>
							 	</div> 
					</div>					
				</div> 	
			<?php include 'footer.php'; ?>