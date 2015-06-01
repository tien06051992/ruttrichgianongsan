<?php
	if(isset($_GET['date'])) $date = $_GET['date'];
	$html = file_get_html('http://giacaphe.com/gia-ca-phe-noi-dia-ngay-' . $date . '/');
	require 'views/giacaphe.com.php';
?>