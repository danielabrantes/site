<?php
require_once('common/common.php');
if(isset($language))
{
	//$smarty->display('index.tpl');
	$view->display($language);
}
else{
	$smarty->display('bandeiras.tpl');
}

