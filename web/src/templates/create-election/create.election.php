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