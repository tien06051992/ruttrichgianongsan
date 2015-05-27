<?php
    switch ($action) {
        case 'gov':
            require 'controllers/govCtrl.php';
            break;
        default:
            require 'controllers/errorCtrl.php';
            break;
    }
?>