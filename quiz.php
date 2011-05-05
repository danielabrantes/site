<?php
require_once('common/common.php');

//printArray($_POST);

function respostaCorrecta() {

	if (
	$_POST['1'] == 'c' and
	$_POST['2'] == 'c' and
	$_POST['3'] == 'c' and
	$_POST['4'] == 'b') {
		return true;
	}
	return false;
}

function colocouEmail() {
	if (
	isset($_POST['email'])
	and
	$_POST['email'] != null
	) {
		return true;
	}
	return false;
}

function respondeuAoQuiz() {
	if (
	isset($_POST['1']) and
	isset($_POST['2']) and
	isset($_POST['3']) and
	isset($_POST['4'])

	) {
		return true;
	}
	return false;
}

function insereEmail() {
	//echo 'insereEmail';
	global $DbSite, $numero;
	$email = $DbSite->quote($_POST['email']);
	$telemovel= $DbSite->quote($_POST['telemovel']);
	$frase= $DbSite->quote($_POST['frase']);
	$cidade=$DbSite->quote($_POST['cidade']);
	$sql = "insert into site.quiz(email,telemovel,frase,cidade) values($email,$telemovel,$frase,$cidade)";
	//echo $sql;
	//die;
	$result = $DbSite->query($sql);
	//var_dump($result);
	if ($result === false) {
		//echo 'email duplicado';
		return false;
	} else {
		$sql = 'select id from site.quiz where email like ' . $email . ';';
		$result = $DbSite->getall($sql);
	}
	//echo 'numero: '.$result[0]->id;
	return $result[0]->id;
}

//$smarty->assign('resposta', 'Responda ao questionário e insira o seu email');
$resposta = '';
if (respondeuAoQuiz()) {
	if (respostaCorrecta()) {
		if (colocouEmail()) {
			if (valida_email($_POST['email'])) {
				$numero = insereEmail();
				if ($numero === false) {
					$resposta = 'Só pode tentar uma vez por email';
				} else {
					$smarty->assign('numero', $numero);
					//$texto = 'O seu número da sorte é "' . $numero . '".<br /> Na data do sorteiro irá receber um email com o número vencedor.<br /> Boa Sorte :)';
					$texto = 'A sua frase foi enviada<br />No dia 17 de Maio, irá receber um email com os nomes dos vencedores.<br /> Boa Sorte :)';
					$smarty->assign('texto', $texto);
				}
			} else {
				$resposta = 'Email inválido';
			}
		} else {
			$resposta = 'Introduza um email';
		}
	} else {
		$resposta = 'Respostas incorrectas, tente de novo!';
	}
} else {
	$resposta = 'Responda ao questionário e coloque seu email!';
}
//echo $resposta;
$smarty->assign('resposta', $resposta);
$view->display();