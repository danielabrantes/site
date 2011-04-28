<?php

require_once('common/common.php');
$language=isset($_GET['language'])?$_GET['language']:null;

$smarty->assign('language',$language);
/*if (isset($language)) {
    
    $smarty->display('index.tpl');
} else {
    
    $smarty->display('language.tpl');
}*/
$smarty->display('index.tpl');