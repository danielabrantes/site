<?php

require_once('common/common.php');
switch ($language) {
    case 'pt':
        $smarty->display('promocao13pt.tpl');
        break;
    case 'es':
        $smarty->display('promocao13es.tpl');
        break;
    case 'en':
        $smarty->display('promocao13en.tpl');
        break;
}

