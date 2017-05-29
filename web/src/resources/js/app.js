
var myApp = angular.module("myModule", ["ngRoute"])
    .config(function($routeProvider) {
        $routeProvider
            .when("/",{ //welcome page
                templateUrl:"../src/templates/home/home.content.php",
            })
            .when("/createElection", {
				url:"/", 
                templateUrl:"../src/templates/create-election/create.election.php",
                controller:"myController11"
            })
            .when("/attach", {
                templateUrl:"../src/templates/current-election/current.election.php",
                controller:"myController"
            })
            .when("/votes", {
                templateUrl:"../src/templates/vote/vote.php",
                controller:"myController"
            })
            .when("/userProfile", {
                templateUrl:"../src/templates/user-profile/user.profile.php",
                controller:"myController"
            })
    })
	
    .controller("myController11", function($scope) {
		$scope.msg = "hi chalana";
    })









