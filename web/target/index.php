<?php
	if (!isset($_SESSION)){
    	session_start();
  	}
	if(!isset($_SESSION['username'])){
		header('Location:../src/templates/login/login.php');
	}
?>
<!DOCTYPE html>
<html ng-app="myModule">
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <nav>
            <a class="nav-toggle-btn"></a>
            <ul>
                <div  class="links">
                    <li><a  href="#/createElection">Create New Election</a></li>
                    <li><a href="#/attach">Current Election</a></li>
                    <li><a href="#/votes"> Votes </a></li>
                    <li><a href="#/userProfile">User Profile</a></li>
                    <li><a  href="../src/templates/logout/logout.php">Logout</a></li>
                </div>
            </ul>
        </nav>
			
			
			
			
        <div class="content">
            <div class="header">
                <h1> SUPERUSER ADMIN CENTER </h1>
            </div>
            <div class="middle">
                <ng-view></ng-view>
            </div>
            <div class="footer"></div>
        </div> <!-- content -->
    </body>
	
    <script type="text/javascript" src="portal/lib/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="portal/lib/angular/angular.min.js"></script>
    <script type="text/javascript" src="portal/lib/angular/angular-route.min.js"></script>
    <script type="text/javascript" src="../src/resources/js/app.jquery.js"></script>
    <script type="text/javascript" src="../src/resources/js/app.js"></script>
<script type="text/javascript" src="templates/createElection.js"></script>
</html>