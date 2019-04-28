<?php 
	$db = new mysqli("localhost", "root", "", "travel");
session_start();
if(isset($_POST['sub'])){	
	$query = "select * from login where email = '".mysqli_real_escape_string($db, $_POST['email'])."' and password = '".md5($_POST['password'])."'";
	
	$query = $db->query($query);
	if(mysqli_num_rows($query) > 0){
		while($d = mysqli_fetch_assoc($query)){
			$_SESSION['myid'] = $d['id'];
		}
		echo "<script>self.location='../index.php?a=adminpanel';</script>";
	}
	else{
		echo "Invalid Email or Password";
		echo "<script>self.location='../index.php?f=login';</script>";
	}
}

?>