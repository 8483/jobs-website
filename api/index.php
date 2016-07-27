<?php

require 'vendor/autoload.php';

$app = new \Slim\App; 

$app->get('/jobs', 'getJobs');
$app->get('/jobs/{id}', 'getJob');
$app->post('/add_job', 'addJob');

$app->run();

function getJobs() {
	$sql = "select * FROM jobs ORDER BY id";
	try {
		$db = getConnection();
		$stmt = $db->query($sql);  
		$jobs = $stmt->fetchAll(PDO::FETCH_OBJ);
		$db = null;
		echo json_encode($jobs);
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}

function getJob($request, $response, $args) {
	$id = htmlspecialchars($args['id']);
	$sql = "select * FROM jobs WHERE id=:id ORDER BY id";
	try {
		$db = getConnection();
		$stmt = $db->prepare($sql);
		$stmt->bindParam("id", $id);
		$stmt->execute();
		$jobs = $stmt->fetchAll(PDO::FETCH_OBJ);
		$db = null;
		echo json_encode($jobs);
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}


function addJob($request) {
	//$request = Slim::getInstance()->request(); // This doesn't work! You inject $request into addJob() instead.
	$job = json_decode($request->getBody());
	$sql = "INSERT INTO jobs (title, company, location) VALUES (:title, :company, :location)";
	try {
		$db = getConnection();
		$stmt = $db->prepare($sql);  
		$stmt->bindParam("title", $job->title);
		$stmt->bindParam("company", $job->company);
		$stmt->bindParam("location", $job->location);
		$stmt->execute();
		$job->id = $db->lastInsertId();
		$db = null;
		echo json_encode($job); 
	} catch(PDOException $e) {
	echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}

function getConnection() {
	$dbhost=;
	$dbname=;
	$dbuser=;
	$dbpass=;
	$dbh = new PDO("mysql:host=".$dbhost."; dbname=".$dbname."; charset=UTF8", $dbuser, $dbpass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));	// Fixes the cyrillics font in MySQL
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	return $dbh;
}

?>