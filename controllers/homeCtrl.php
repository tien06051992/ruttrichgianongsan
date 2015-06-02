<?php
    switch ($action) {
        case 'gov':
            require 'controllers/govCtrl.php';
            break;
        case 'argo':
            require 'controllers/argoCtrl.php';
            break;
        case 'giacaphe.com':
            require 'controllers/giacaphe.comCtrl.php';
            break;
        case 'tinngan':
            require 'controllers/tinnganCtrl.php';
            break;
        case 'toanthangtags.com':
            require 'controllers/toanthangtags.comCtrl.php';
            break;
        default:
            require 'controllers/errorCtrl.php';
            break;
    }
?>