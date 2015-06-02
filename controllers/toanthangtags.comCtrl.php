<?php
	if(isset($_GET["id"])) $id = $_GET["id"];
	$html = file_get_html('http://www.toanthangtags.com/News/23/'.$id.'/Bang_gia_nong_san.html');
	require 'views/toanthangtags.com.php';
?>