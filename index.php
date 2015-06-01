<!DOCTYPE html>
<html>
<head>
<title>Title of the document</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="/assets/css/bootstrap-theme.min.css">
<script src="/assets/js/jquery-1.11.2.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body>
<?php
	require 'Slim/Slim.php';
	require_once("simple_html_dom.php");
	require_once("Requests.php");
	Requests::register_autoloader();
	\Slim\Slim::registerAutoloader();

	$app = new \Slim\Slim();

	$app->get('/gianongsan/:action/', function ($action) {
		require 'controllers/homeCtrl.php';
	});

/**
 * Step 4: Run the Slim application
 *
 * This method should be called last. This executes the Slim application
 * and returns the HTTP response to the HTTP client.
 */
$app->run();
?>
</body>

</html>

