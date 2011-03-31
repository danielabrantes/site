<?php
require_once('common/common.php');
require_once('common/Verifica_loggado.php');
if(isset($_POST['alterarDadosPessoais']))
{
	$logado=true;
	$smarty->assign('mensagem',User::saveDadosPessoais($logado)?'Pedido de alteração de dados efectuado com sucesso':'Pedido de alteração de dados não efectuado');
}
$dados=$user->getDados();
//$dados->CliMailing=1;
$checked=null;
if($dados->CliMailing==0)
{
	$checked=null;
}
else
{
	$checked='checked="checked"';
	
}
$smarty->assign('checked',$checked);
$smarty->assign('menu','dadosDoCliente');
$smarty->assign('submenu','dadosPessoais');
$view->display();