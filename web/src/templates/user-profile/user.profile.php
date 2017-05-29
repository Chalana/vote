<?php
	if (!isset($_SESSION)){
    	session_start();
  	}
	if(!isset($_SESSION['username'])){
		header('Location:../login/login.php');
	}
?>
<div class="">
    <p>code for view admin user profile details<p>

</div>