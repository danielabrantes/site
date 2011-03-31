<?php
require_once('common/common.php');
function valida_email($email){/* valida o email */
	if(preg_match("/^([[:alnum:]_.-]){3,}@([[:lower:][:digit:]_.-]{3,})(\.[[:lower:]]{2,3})(\.[[:lower:]]{2})?$/",$email)){
		$valor='true';
	}else{
		$valor='false';
	}
	return $valor;
}
/* CADASTRO */
$nome=isset($_POST['nomeRegisto'])?$_POST['nomeRegisto']:'';
$telfixo=isset($_POST['telfixoRegisto'])?$_POST['telfixoRegisto']:'';
$telmovel=isset($_POST['telmovelRegisto'])?$_POST['telmovelRegisto']:'';
$email=isset($_POST['emailRegisto'])?$_POST['emailRegisto']:'';
$pais=isset($_POST['paisRegisto'])?$_POST['paisRegisto']:'';
$regiao=isset($_POST['regiaoRegisto'])?$_POST['regiaoRegisto']:'';
$localidade=isset($_POST['localRegisto'])?$_POST['localRegisto']:'';
$morada=isset($_POST['moradaRegisto'])?$_POST['moradaRegisto']:'';
$cp=isset($_POST['codigopostalRegisto'])?$_POST['codigopostalRegisto']:'';
$numero=isset($_POST['numeroRegisto'])?$_POST['numeroRegisto']:'';
$porta_andar=isset($_POST['portaRegisto'])?$_POST['portaRegisto']:'';
$naturalidade=isset($_POST['naturalidadeRegisto'])?$_POST['naturalidadeRegisto']:'';
$datanascimento=isset($_POST['nascimentoRegisto'])?$_POST['nascimentoRegisto']:'';
$sexoRegisto=isset($_POST['sexoRegisto'])?$_POST['sexoRegisto']:'';
$nacionalidade=isset($_POST['nacionalidadeRegisto'])?$_POST['nacionalidadeRegisto']:'';
$nacionalidade1=isset($_POST['nacionalidade1Registo'])?$_POST['nacionalidade1Registo']:'';
$actividade=isset($_POST['actividadeRegisto'])?$_POST['actividadeRegisto']:'';
$conhecimento=isset($_POST['conhecimentoRegisto'])?$_POST['conhecimentoRegisto']:'';
$funcionario=isset($_POST['funcionarioRegisto'])?$_POST['funcionarioRegisto']:'';
$escolaridade=isset($_POST['escolaridadeRegisto'])?$_POST['escolaridadeRegisto']:'';
$estadocivil=isset($_POST['estadocivilRegisto'])?$_POST['estadocivilRegisto']:'';
$valormensal=isset($_POST['valormensalRegisto'])?$_POST['valormensalRegisto']:'';
$origemvencimento=isset($_POST['origemvencimentoRegisto'])?$_POST['origemvencimentoRegisto']:'';
$referencia=isset($_POST['referenciaRegisto'])?$_POST['referenciaRegisto']:'';

/* DOCUMENTO */
$tipodoc=isset($_POST['tipodocRegisto'])?$_POST['tipodocRegisto']:'';
$dataemissao=isset($_POST['emissaoRegisto'])?$_POST['emissaoRegisto']:'';
$numerodoc=isset($_POST['numerodocRegsito'])?$_POST['numerodocRegsito']:'';
$caducidade=isset($_POST['caducidadeRegisto'])?$_POST['caducidadeRegisto']:'';
$orgao=isset($_POST['orgaoRegisto'])?$_POST['orgaoRegisto']:'';

/* BENEFICIARIO */
$parentescBenef=isset($_POST['parentescBenefRegisto'])?$_POST['parentescBenefRegisto']:'';
$nomeBenef=isset($_POST['nomeBenefRegisto'])?$_POST['nomeBenefRegisto']:'';
$obsBenef=isset($_POST['obsBenefRegisto'])?$_POST['obsBenefRegisto']:'';
$telfixoBenef=isset($_POST['telfixoBenefRegisto'])?$_POST['telfixoBenefRegisto']:'';
$telmovelBenef=isset($_POST['telmovelBenefRegisto'])?$_POST['telmovelBenefRegisto']:'';
$moradaBenef=isset($_POST['moradaBenefRegisto'])?$_POST['moradaBenefRegisto']:'';
$bairroBenef=isset($_POST['bairroBenefRegisto'])?$_POST['bairroBenefRegisto']:'';
$paisBenef=isset($_POST['paisBenefRegisto'])?$_POST['paisBenefRegisto']:'';
$cidadeBenef=isset($_POST['cidadeBenefRegisto'])?$_POST['cidadeBenefRegisto']:'';


if($nome==''||$telfixo==''||$telmovel==''||$email==''||$localidade==''||$morada==''||$cp==''||$numero==''||$datanascimento==''||
	$actividade==''||$valormensal==''||$referencia==''||$dataemissao==''||$numerodoc==''||$caducidade==''||$orgao==''||$nomeBenef==''||
	$telfixoBenef==''||$telmovelBenef==''||$moradaBenef==''||$bairroBenef==''){
	$mensagemCadastro="Preencha todos os campos com *";
}else{
	$validar=valida_email($email);

	if($validar=='false'){
		$mensagemCadastro="Insira um Email válido";
	}else{
		$sql='INSERT INTO tabela VALUES ($nome, $telfixo, $telmovel, $email, $pais, $regiao, $localidade, $morada, $cp, $numero, $porta_andar, $naturalidade,  $datanascimento, $sexoRegisto,$nacionalidadel,
     $nacionalidade1, $actividade, $conhecimento, $funcionario, $escolaridade, $estadocivil, $valormensal, $origemvencimento, $referencia, $tipodoc, $dataemissao, $numerodoc, $caducidade, $orgao,
     $parentescBenef,$nomeBenef,$obsBenef,$telfixoBenef,$telmovelBenef,$moradaBenef, $bairroBenef, $paisBenef,$cidadeBenef)';

		$result=$Dbsite->query($sql);
		if($result==true){
			$mensagemCadastro='Enviado com sucesso';

			$nome='';
			$telfixo='';
			$telmovel='';
			$email='';
			$localidade='';
			$morada='';
			$cp='';
			$numero='';
			$porta_andar='';
			$datanascimento='';
			$actividade='';
			$valormensal='';
			$referencia='';
			$dataemissao='';
			$numerodoc='';
			$caducidade='';
			$orgao='';
			$nomeBenef='';
			$obsBenef='';
			$telfixoBenef='';
			$telmovelBenef='';
			$moradaBenef='';
			$bairroBenef='';
		}else{
			$mensagemCadastro='Erro ao enviar dados';
		}
	}
}
/* DADOS PESSOAIS */
$smarty->assign('nome',$nome);
$smarty->assign('telfixo',$telfixo);
$smarty->assign('telmovel',$telmovel);
$smarty->assign('email',$email);
$smarty->assign('localidade',$localidade);
$smarty->assign('morada',$morada);
$smarty->assign('cp',$cp);
$smarty->assign('numero',$numero);
$smarty->assign('porta_andar',$porta_andar);
$smarty->assign('datanascimento',$datanascimento);
$smarty->assign('actividade',$actividade);
$smarty->assign('valormensal',$valormensal);
$smarty->assign('referencia',$referencia);
$smarty->assign('dataemissao',$dataemissao);
$smarty->assign('numerodoc',$numerodoc);
$smarty->assign('caducidade',$caducidade);
$smarty->assign('orgao',$orgao);
$smarty->assign('nomeBenef',$nomeBenef);
$smarty->assign('obsBenef',$obsBenef);
$smarty->assign('telfixoBenef',$telfixoBenef);
$smarty->assign('telmovelBenef',$telmovelBenef);
$smarty->assign('moradaBenef',$moradaBenef);
$smarty->assign('bairroBenef',$bairroBenef);


$smarty->assign('mensagemCadastro',$mensagemCadastro);

$smarty->display('cadastro.tpl');