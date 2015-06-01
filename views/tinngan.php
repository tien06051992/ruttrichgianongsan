<?php   
	//echo $response->body;
	$html = str_get_html($response->body);
	foreach($html->find('.table-football') as $element)
		echo $element . '<br>';
?>