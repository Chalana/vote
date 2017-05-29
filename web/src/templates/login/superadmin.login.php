<?php
$uname = $_POST['username'];
$pwd = $_POST['pwd'];
session_start();
include("connection_superadmin.php");



$sql = "SELECT username, password FROM superadmin;";
$result = mysqli_query($con, $sql) or die("query error");
$data = mysqli_fetch_array($result,MYSQL_ASSOC) or die("fetch error");
$username = $data['username'];
$password = $data['password'];

if($uname && $pwd){
	if($username == $uname && $password == $pwd){
		$_SESSION['username'] = $uname;
		$_SESSION['most_recent_activity'] = time();
		$_SESSION['id'] = 11;
		header('Location:../../../target/index.php');
		
	}else{
		 echo  "Email or password is invalid";
	}
	
}



?>