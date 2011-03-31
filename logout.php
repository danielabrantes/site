<?php
require_once('common/common.php');
require_once('common/Verifica_loggado.php');

$_SESSION=array();
session_unset();
//3 - clean the sessions
if(isset($_COOKIE[session_name()])){
	setcookie('moneyexpress','',time()-4200,'/','',true.true);
}
//4 - Destroy the session

session_destroy();
$smarty->clear_all_assign();
$smarty->clear_all_cache();
$smarty->clear_compiled_tpl();
header('location:index.php');
