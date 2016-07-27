(function () {

	angular
		.module('app')
		.factory('jobService', jobService);

	function jobService($http) {
		
		var baseUrl = 'api/';

		return {
			getJobs: getJobs,
			getJob: getJob
		};
		
		function getJobs() {
			return $http.get(baseUrl + 'jobs');
		}
		
		function getJob(jobId) {
			return $http.get(baseUrl + 'jobs/' + encodeURIComponent(jobId));
		}
	};

})();