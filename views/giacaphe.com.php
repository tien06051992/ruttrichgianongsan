<?php   
	foreach($html->find('#update_quote #gia_trong_nuoc') as $element) {
		$element->class = 'table table-bordered';
		echo $element . '<br>';
	}	
?>