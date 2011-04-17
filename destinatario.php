<?php
require_once('common/common.php');
require_once('common/Verifica_loggado.php');
printArray($_POST);
if(isset($_POST['actualizarContas']))
{
 
}
if(isset($_POST['actualizarDestinatario']))
{
	$smarty->assign('mensagem',User::saveDestinatario($user->getId())?'Pedido de actualização de destinatário enviado com sucesso':'Problemas na actualização do destinatário');
	$smarty->assign('submenu','actualizarDestinatario');
}
elseif(isset($_POST['destinatario']))
{
	$accao=$_POST['destinatario'];
	switch($accao)
	{
		case 'actualizarDestinatario':
			$smarty->assign('submenu','actualizarDestinatario');
			break;
		case 'removerDestinatario':
			$smarty->assign('mensagem',$user->saveRemoverDestinatario()?'Pedido de remoção de destinatário enviado com sucesso':'Problemas no pedido de remoção do destinatário');
			break;
		case 'actualizarContas':
			$smarty->assign('submenu','actualizarContas');
			$conta=$user->getInformacoesDaContaPorDestinatario();
			$smarty->assign('conta',$conta);
			break;
		case 'removerContas':
			$smarty->assign('submenu','removerContas');
			break;
		case 'adicionarContas':
			$smarty->assign('submenu','adicionarContas');
			break;
	}
}
else
{
	$smarty->assign('submenu','destinatario');
}
$parentescos=$user->getParentescos();
$destinatario=$user->getDestinatario();
printArray($destinatario);
/* $destinatarios=$user->getDestinatarios();
  printArray($destinatarios); */
$parentesco=$user->getParentescoById($destinatario);
$informacoes=$user->getInformacaoDoDestinatario();
$smarty->assign('parentescos',$parentescos);
$smarty->assign('destinatario',$informacoes);
$smarty->assign('parentesco',$parentesco);
$smarty->assign('menu','dadosDoCliente');
$view->display();