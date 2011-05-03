<?php
require_once('common/common.php');
if(isset($language))
{
	$smarty->display('index.tpl');
}
else{
	$smarty->display('bandeiras.tpl');
}

