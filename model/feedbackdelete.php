<?php
	require("db.php");
	if(isset($_GET['id'])){
		$sql = "select * from feedback where id = '".$_GET['id']."'";
			$data = $db->query($sql);
			while($pic = mysqli_fetch_object($data)){
				$old_ext = $pic->picture;
			}
			
		$query = "delete from feedback where id = '".$_GET['id']."'";
		
		if($db->query($query)){
			if($old_ext){
					unlink("../view/admin/feedback/picture/comment-" . $_GET['id']. "." . "$old_ext");
			}
            unlink("../view/admin/feedback/files/comment-" . $_GET['id'] . ".txt");
            echo "Feedback Delete Successful";
			//echo "<script>self.location='../index.php?a=viewcomment';</script>";
		}
		else{
			echo "Delete Error";
			//echo "<script>self.location='../index.php?a=viewcomment';</script>";
		}
	}
?>

