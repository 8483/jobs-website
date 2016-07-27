(function () {

	angular
		.module('app')
		.config(config);

	function config($routeProvider) {
		$routeProvider.when('/jobs/:jobId', {
			templateUrl: 'templates/job.view.html',
			controller: JobController,
			controllerAs: 'jobCtrl'
		});
	};

	function JobController($routeParams, jobService) {
		this.params = $routeParams;

		var that = this;

		jobService.getJob(this.params.jobId || "").success(function (data) {
			that.jobs = data;
		});
	};

})();