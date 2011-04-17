<?php
require_once('common/common.php');
require_once('common/Verifica_loggado.php');

//printArray($_POST);
if(isset($_POST['senha']))
{
	if($user->setSenha($_POST['senha']))
	{

		$smarty->assign('mensagem','Senha alterada com sucesso');
	}
	else
	{
		$smarty->assign('senha','erro ao alterar a senha');
	}
}


$smarty->assign('senha',$user->getSenha());
$smarty->assign('menu','dadosDoCliente');
$smarty->assign('submenu','senha');
$view->display();