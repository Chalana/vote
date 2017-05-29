<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project_superadmin";

$con = mysqli_connect($servername, $username, $password);
mysqli_select_db($con, $dbname);
if(!$con) {
	die('connection failed' . mysql_error());
}

?>