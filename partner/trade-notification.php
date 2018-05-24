<?php
$page_title = "Trade Notification";
include 'header.php';
?> <div class="dashboard2">
					<div class="dashboard-title1">
						<label><i class="fa fa-mobile"></i>My Notification Inbox</label><br>
						<strong><?php echo date('Y/m/d g:i a'); ?></strong>
						<hr> 
						<div class="home-first">
							<div style="margin: 50px auto;" class="message5">
							 	<div class="msg5-head">
							 		<h1>Trade Notification</h1>
							 	</div>
							 	<div class="msg5-body"> 
							 		<p><?php echo date('l M'); ?></p>
									 <?php				
			  require_once '../includes/functions.php';			  
$query = "select * from notifications where type=1 ORDER BY postdate DESC";			  
$mmm = pagination($con,substr($_SERVER['SCRIPT_NAME'],0,-4),$query,1);

echo $pagination;
echo "<link href='../css/pagination.css' rel='stylesheet' type='text/css' />";
while($v = mysqli_fetch_array($mmm))
		{
		?>
							 		<table style="width: 70%;margin: 0 auto;">
							 			<tr>
							 				<td style="font-size: 16px;">Trade type:</td>
							 				<td style="font-size: 16px;"><?php echo $v['tradetype']; ?></td>
							 			</tr>
							 			<tr>
							 				<td style="font-size: 16px;">Symbol:</td>
							 				<td style="font-size: 16px;"><?php echo $v['sybmol']; ?></td>
							 			</tr>
							 			<tr>
							 				<td style="font-size: 16px;">LotSize:</td>
							 				<td style="font-size: 16px;"><?php echo $v['lotsize']; ?></td>
							 			</tr>
							 			<tr>
							 				<td style="font-size: 16px;">StopLoss:</td>
							 				<td style="font-size: 16px;"><?php echo $v['stoploss']; ?></td>
							 			</tr>
							 			<tr>
							 				<td colspan="2"><p style="text-align: center;line-height: 1.7;">LotSize Explained<br><?php echo $v['explain']; ?></p></td>
							 			</tr>
							 		</table>
		<?php }?>
							 	</div>							 	 
							</div> 
						</div>  
					</div>					
				</div> 	
				<?php
include 'footer.php';
?> 