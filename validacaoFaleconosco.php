<?php
require_once('common/common.php');
function valida_email($email) {/* valida o email */
	if (preg_match("/^([[:alnum:]_.-]){3,}@([[:lower:][:digit:]_.-]{3,})(\.[[:lower:]]{2,3})(\.[[:lower:]]{2})?$/", $email)) {
		$valor = 'true';
	} else {
		$valor = 'false';
	}
	return $valor;
}

$nome = $DbSite->quote($_POST['nomeContato']) ;
$email = $_POST['emailContato'] ;
$loja = $DbSite->quote($_POST['lojaContato']);
$assunto =  $DbSite->quote($_POST['assuntoContato']);
$msg = $DbSite->quote($_POST['msgContato']) ;
$inf = isset($_POST['informacaoContato']) ? $DbSite->quote($_POST['informacaoContato']) : '';

if ($nome == '' || $email == '' || $assunto == '' || $msg == '') {
	$mensagemContato = "Preencha todos os campos com *";
	$mensagemContatoEmail = '';
} else {

	$validar = valida_email($email);

	if ($validar == 'false') {
		$mensagemContatoEmail = "Insira um Email válido";
		$mensagemContato = '';
	} else {
		$email = $DbSite->quote($_POST['emailContato']) ;
		if ($inf == '')
		$inf = "'off'";

        $sql = "INSERT INTO site.contato (nome, email, loja, assunto, mensagem, receberInformacao) VALUES ($nome, $email, $loja, $assunto, $msg, $inf)";
echo($sql);
        $result = $DbSite->query($sql);
        if ($result == true) {
            $mensagemContato = 'Mensagem enviada com sucesso';
            $mensagemContatoEmail = '';
            $nome = '';
            $email = '';
            $loja = '';
            $assunto = '';
            $msg = '';
        } else {
            $mensagemContato = 'Erro ao enviar mensagem';
            $mensagemContatoEmail = '';
        }
    }
}
/* $smarty->assign('nome', $nome);
  $smarty->assign('assunto', $assunto);
  $smarty->assign('email', $email);
  $smarty->assign('msg', $msg);
$smarty->assign('mensagemContatoEmail', $mensagemContatoEmail);*/
  $smarty->assign('mensagemContato', $mensagemContato); 

		$result = $DbSite->query($sql);
		if ($result == true) {
			$mensagemContato = 'Mensagem enviada com sucesso';
			$mensagemContatoEmail = '';
			$nome = '';
			$email = '';
			$loja = '';
			$assunto = '';
			$msg = '';
		} else {
			$mensagemContato = 'Erro ao enviar mensagem';
			$mensagemContatoEmail = '';
		
	
}
$smarty->assign('mensagemContato', $mensagemContato);
$smarty->display('faleConosco.tpl');
