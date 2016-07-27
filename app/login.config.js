(function () {

	angular
		.module('app')
		.config(config);

	function config($routeProvider) {
		$routeProvider.when('/login', {
			templateUrl: 'templates/login.view.html',
			controller: LoginController,
			controllerAs: 'loginCtrl'
		});
	};
	
	function LoginController($http) {

	}

})();