<!-- Request to logout -->
<?php  
	session_start();
	session_destroy();
	header('Location:/TaskManager/index.php');
?>