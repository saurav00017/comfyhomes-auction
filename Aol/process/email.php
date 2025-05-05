<?php
ob_start();
session_start();
if ( isset( $_POST['email'] ) ) {
		
		$_SESSION['email'] 	  = $_POST['email'];
		
	
		
		header("Location: ../password.php");
        exit();
	} else {
		header("Location: ../index.php");
		exit();
	}

?>