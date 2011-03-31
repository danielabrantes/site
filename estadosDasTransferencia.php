<?php
require_once('common/common.php');
require_once('common/Verifica_loggado.php');

$result=$transferencia->estadosDasTransferencias();
$smarty->assign('result',$result);
$smarty->assign('menu','estadosDasTransferencias');
$view->display();