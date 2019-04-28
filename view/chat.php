<?php
require("../model/db.php");

	function formatDate($date){
		return date('g:i a', strtotime($date));
	}
	$query = "select * from chat order by id desc";
	$run = $db->query($query);
	while($row = $run->fetch_array()){
?>
		<div class="row chat-row">
			<div class="smsg"><?php echo $row['message']; ?></div>
			<div class="time"><?php echo formatDate($row['datetime']); ?></div>
		</div>
	<?php } ?>