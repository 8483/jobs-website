(function () {

	angular
		.module('app')
		.config(config);

	function config($routeProvider) {
		$routeProvider.when('/', {
			templateUrl: 'templates/jobs.view.html',
			controller: JobController,
			controllerAs: 'jobCtrl'
		});
	};

	function JobController(jobService) {
		var that = this;

		jobService.getJobs().success(function (data) {
			that.jobs = data;
		});
	};

})();