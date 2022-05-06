<?php
	if(!isset($_SESSION))
		session_start();
		unset($_SESSION["success"]);
		
		unset($_SESSION["hotenadmin"]);
		
		header("location:login.php");
		session_destroy();
?>