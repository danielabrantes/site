<?php
require_once('common/common.php');
require_once('common/Verifica_loggado.php');
if(isset($_POST['morada']))
{
	$smarty->assign('mensagem',$user->saveMorada()?'Pedido de alteração de morada efectuado com sucesso':'Pedido de alteração de morada não efectuado');
}
$smarty->assign('menu','dadosDoCliente');
$smarty->assign('submenu','morada');
$smarty->assign('user',$user->getDados());
$view->display();