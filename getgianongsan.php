<?php 
 /**
  *  Created by Tien Le<tien06051992@gmail.com>
  **/
 require_once("simple_html_dom.php");
 // Create DOM from URL or file
 $html = file_get_html('http://xttm.mard.gov.vn/Site/vi-VN/189/189/Default.aspx');

 // Find all images 
 foreach($html->find('#Anthem__ctl2__ctl4__ctl0_dtgBaoCao__') as $element) 
       echo $element . '<br>';


?>