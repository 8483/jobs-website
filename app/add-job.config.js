(function () {

	angular
		.module('app')
		.config(config);

	function config($routeProvider) {
		$routeProvider.when('/add-job', {
			templateUrl: 'templates/add-job.view.html',
			controller: AddController,
			controllerAs: 'addCtrl'
		});
	};

	function AddController($http) {
		var that = this;

		that.add_new = function (job) {
			$http.post('api/add_job', that.job).success(function () {
				//alert("added!");
			});
		};
	}

})();