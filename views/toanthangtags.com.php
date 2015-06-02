<?php   
	foreach($html->find('table a[title="Tải xuống"]') as $element) {
		echo $element->href. '<br>';
	}	
?>