<?php
	if (!isset($_SESSION)){
    	session_start();
  	}
	if(!isset($_SESSION['username'])){
		header('Location:../login/login.php');
	}
?>

<div>
	<div>
		<form  action="submit.php" autocomplete="on"> 
		<div ng-controller="myController11">{{msg}}</div>
			<h1>Create New Election</h1> 
			<p> 
				<label for="Ename" class="" > Election Name </label>
				<input id="Ename" name="Ename" required="required" type="text" placeholder="Election Name"/>
			</p>
			<p> 
				<label for="Edate" class="" > Election Date </label>
				<input id="pickdate" name="Edate" required="required" type="text" placeholder="Date"/>
			</p>								

			<p class="login button"> 
				<input type="submit" value="Create" /> 
			</p>
		</form>
	</div>

</div>

<!-- don't edit-->
	<script src="templates/createElection/jquery-3.1.1.js"></script>
	<script type="text/javascript" src="templates/createElection/createElection.js"></script>
	<script type="text/javascript" src="templates/createElection/jquery-ui/jquery-ui.js"></script>
	<link rel="stylesheet" type="text/css" href="templates/createElection/jquery-ui/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="templates/createElection/jquery-ui/jquery-ui.strcture.css">
	<link rel="stylesheet" type="text/css" href="templates/createElection/jquery-ui/jquery-ui.theme.css">
<!--******-->