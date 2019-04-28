<?php
require ('view/createfile.php');

	if(isset($_POST['fsub'])){
		$msg = '';
		if($_POST['comment'] == ''){
			$msg .= "Write you anything";
		}

		if($_FILES["pic"]["name"]){
			$ext = pathinfo($_FILES["pic"]["name"]);
			$ext = strtolower($ext["extension"]);
			if($ext != "jpg" && $ext != "jpeg" && $ext != "gif" && $ext != "png"){
				$ext = "";
			}
		}else{
			$ext;
		}
		if($msg == ""){
			$sql = "insert into feedback(picture, rating) values('".$ext."', '".$_POST['rating']."')";
			//echo($sql);
			$sql = $db->query($sql);
			if($sql){
				$id = mysqli_insert_id($db);
				makefiles("view/admin/feedback/files/comment-" . $id . ".txt", $_POST['comment'] );
				if($ext != ""){
					$store = "view/admin/feedback/picture/comment-" . $id . "." . $ext; 
					move_uploaded_file($_FILES['pic']['tmp_name'], $store);
				}
				echo "Save succfully";
				echo "<script>self.location='index.php';</script>";
			}else{
				//echo $db->error;
				echo "Surver too busy";
				echo "<script>self.location='index.php';</script>";
			}
		}
		else{
			echo "Value missing in required field<br />";
			echo $msg;
		}
	
	}else{
		echo "Invalid";
	}

?>