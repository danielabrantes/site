<?php
require_once('common/common.php');
//$smarty->clearCache('index.tpl');
$smarty->caching = 2; // lifetime is per cache
$smarty->cache_lifetime = 1;
$smarty->display('index.tpl');
//$smarty->clearAllCache();
//$view->display();
