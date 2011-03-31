<?php
require_once('common/common.php');
require_once('common/Verifica_loggado.php');

if(isset($_POST['nome'])&&isset($_POST['pass'])){
	$mensagem='';
	if($_POST['nome']==''){
		$mensagem='Falta inserir o Nome<br />';
	}
	if($_POST['pass']==''){
		$mensagem=$mensagem.'Falta inserir a Pass<br />';
	}
	if($mensagem!=''){
		$smarty->assign('mensagem',$mensagem);
	}
	$sql='
                INSERT INTO utilizador (nome, pass,empresa)
                VALUES ('.
		$Dbsite->quote($_POST['nome']).','.
		$Dbsite->quote($_POST['pass']).','.$user->getempresa().');
        ';
	//echo ($sql);
	$result=$Dbsite->query($sql);
	if($result==true){
		$mensagem='O cliente foi inserido com sucesso';
	}else{
		$mensagem='Não foi possivel inserir o cliente com estes dados';
	}
	$smarty->assign('mensagem',$mensagem);
}
$view->display();
