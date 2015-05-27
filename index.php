<?php
	echo '<meta http-equiv="Content-type" content="text/html; charset=utf-8" />';
	require 'Slim/Slim.php';
	require_once("simple_html_dom.php");
	\Slim\Slim::registerAutoloader();

	$app = new \Slim\Slim();

	$app->get('/gianongsan/:action/', function ($action) {
		require 'controllers/homeCtrl.php';
	});

	$app->run();
?>