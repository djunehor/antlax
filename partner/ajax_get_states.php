<?php
require '../includes/config.php';
@$country= filter_var($_REQUEST['country'], FILTER_SANITIZE_STRING); 
$c = mysqli_fetch_assoc(mysqli_query($con,"SELECT id from countries where name='$country' limit 1"));
$s = mysqli_query($con,"select * FROM states where country_id='".$c['id']."'");
$output = '<select name="state" required>';
while($d = mysqli_fetch_assoc($s)) {
$output .= '<option value="'.$d['name'].'">'.$d['name'].'</option>';	
}
$output .= '</select>';
echo $output;
?>