<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Delete Page</title>
</head>
<body>
<?php
	require("db.php");
	if(isset($_GET['id'])){
		$query = "delete from chat where id = '".$_GET['id']."'";
		if($db->query($query)){
			echo "<script>self.location='../index.php?a=viewmessage';</script>";
		}
		else{
			echo "Delete Error";
			echo "<script>self.location='../index.php?a=viewmessage';</script>";
			//echo $db->error;
		}
	}
?>
</body>
</html>