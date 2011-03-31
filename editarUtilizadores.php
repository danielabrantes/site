<?php
require_once('common/common.php');
require_once('common/Verifica_loggado.php');

$mensagem='';
if(isset($_POST['pass'])&&isset($_POST['nome'])){
	$nome=$Dbsite->quote($_POST['nome']);
	$pass=$Dbsite->quote($_POST['pass']);
	$sql='UPDATE utilizador SET pass='.$pass.' WHERE nome='.$nome;
	if($Dbsite->query($sql)){
		$mensagem='A pass do utilizador: '.$nome.' foi alterada com sucesso';
	}else{
		$mensagem='Erro ao alterar a pass do utilizador: '.$nome;
	}
}else{
	$sql='SELECT * FROM utilizador WHERE empresa='.$user->getempresa();
	$result=$Dbsite->getall($sql);
}
$smarty->assign('result',$result);
$smarty->assign('mensagem',$mensagem);
$smarty->assign('menu','editarUtilizadores');
$smarty->display('index2.tpl');
