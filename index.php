<!DOCTYPE html>
<html ng-app="app">
<!-- Run this module when the document loads -->

<head>
	<meta charset="UTF-8">
	<?php require 'inc/css.html'; ?>
		<?php require 'inc/scripts.html'; ?>
</head>

<body>

	<div class="container-fluid">
		<div class="col-md-2">
			<div class="sidebar">
				<div class="row">
					<div class="col-xs-4"><a href="">Контакт</a></div>
					<div class="col-xs-4 col-xs-offset-4"><a href="#/login">Најава</a></div>
				</div>
				<a href="/career.mk" style="font-family:impact; font-size:30pt;" class="col-md-12 text-center">Career.mk</a>
				<form>
					<div class="form-group">
						<input type="text" class="form-control" id="searchJobs" ng-model="searchJobs" placeholder="Барај">
						<br/>

						<div class="dropdown">
							<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
								Категорија
								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li><a href="#">Separated link</a></li>
							</ul>
						</div>
						<br/>

						<input type="text" class="form-control" placeholder="Подреди">
						<br/>
						<input type="text" class="form-control" placeholder="Статус">
						<br/>
						<input type="text" class="form-control" placeholder="Договор">
					</div>
				</form>

				<a class="btn btn-success center-block" href ng-href="#/add-job" role="button" align="center" style="margin-bottom:20px;">Додади нова работа</a>
			</div>
		</div>

		<div class="col-md-10" ng-view=""></div>
	</div>

	<!-- ng-view = Load the results from ng-route here. -->

</body>

</html>