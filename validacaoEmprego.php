<?php
require_once('common/common.php');
function valida_email($email) {
    if (preg_match("/^([[:alnum:]_.-]){3,}@([[:lower:][:digit:]_.-]{3,})(\.[[:lower:]]{2,3})(\.[[:lower:]]{2})?$/", $email)) {
        $valor = 'true';
    } else {
        $valor = 'false';
    }
    return $valor;
}


//  DADOS PESSOAIS
$nome = $DbSite->quote($_POST['nome']);
$nacionalidade = $DbSite->quote($_POST['nacionalidade']);
$numIdenDoc = $_POST['identifDoc'];
$tipoDoc = isset($_POST['tipoDoc']) ? $DbSite->quote($_POST['tipoDoc']) : '';
$dataemissao = $_POST['dataEmissao'];
$datansc = $_POST['dataNascimento'];
$morada = $DbSite->quote($_POST['morada']);
$cp = array("cp1" => $_POST['codPostal1'], "cp2" => $_POST['codPostal2']);
$localidade = $DbSite->quote($_POST['localidade']);
$tel = $_POST['telefone'];
$email = $_POST['email'];
$cartaconducao = isset($_POST['cartaConducao']) ? $_POST['cartaConducao'] : '';
if($cartaconducao==NULL)
    $cartaconducao=0;


//DADOS ACADEMICOS
$grauensino = $DbSite->quote($_POST['grauEnsino']);
$curso = $DbSite->quote($_POST['areaCurso']);
$datainicio = $DbSite->quote($_POST['dataInicio']);
$datafim = $DbSite->quote($_POST['dataFim']);
$linguaPT = isset($_POST['valorPT']) ? $DbSite->quote($_POST['valorPT']) : '';
if($linguaPT=='')
    $linguaPT="''";
$linguaUK = isset($_POST['valorUK']) ? $DbSite->quote($_POST['valorUK']) : '';
if($linguaUK=='')
    $linguaUK="''";
$linguaES = isset($_POST['valorES']) ? $DbSite->quote($_POST['valorES']) : '';
if($linguaES=='')
    $linguaES="''";
$linguaRU = isset($_POST['valorRU']) ? $DbSite->quote($_POST['valorRU']) : '';
if($linguaRU=='')
    $linguaRU="''";
$linguaOutra = isset($_POST['linguaOutra']) ? $DbSite->quote($_POST['linguaOutra']) : '';
$linguaOutravalor = isset($_POST['valorOutra']) ? $DbSite->quote($_POST['valorOutra']) : '';
if($linguaOutravalor=='')
    $linguaOutravalor="''";

$word = isset($_POST['valorWord']) ? $DbSite->quote($_POST['valorWord']) : '';
$excel = isset($_POST['valorExcel']) ? $DbSite->quote($_POST['valorExcel']) : '';

// DADOS PROFISSIONAIS 
$situacao = $DbSite->quote($_POST['situacaoProfissional']);
$areacandidatura = $DbSite->quote($_POST['areaCadidatura']);
$disponibilidade = $DbSite->quote($_POST['disponibilidade']);
$experiencia = $DbSite->quote($_POST['experienciaProfissional']);
$empresatrabalhou = $DbSite->quote($_POST['empresaTrabalhou']);
$motivo = $DbSite->quote($_POST['motivoMoney']);
$atitude = $DbSite->quote($_POST['pedidoSolicitado']);
$info = isset($_POST['informacao']) ? $DbSite->quote($_POST['informacao']) : '';

$cp1 = $cp["cp1"];
$cp2 = $cp["cp2"];

if ($nome == '' || $nacionalidade == '' || $numIdenDoc == '' || $tipoDoc == '' || $dataemissao == '' || $datansc == '' || $morada == '' || $cp["cp1"] == '' || $cp["cp2"] == '' || $localidade == ''
        || $tel == '' || $email == '' || $grauensino == '' || $word == '' || $excel == '' || $situacao == '' || $areacandidatura == '' || $disponibilidade == '' || $experiencia == '' || $empresatrabalhou == '' || $motivo == '' || $atitude == '') {
    $mensagemEmprego = "Preencha todos os campos com *";
} else {
    $validar = valida_email($email);
    if ($validar == 'false') {
        $mensagemEmprego = "Insira um Email válido";
    } else {
        $email = $DbSite->quote($_POST['email']);
        if($info=='')
            $info="'off'";

        $sql = "INSERT INTO site.candidatura (nome, nacionalidade, num_doc, tipo_doc, data_emissao, data_nasc, morada,cp1, localidade, telefone, email, numCartaConducao, grauEnsino, curso, dataInicio, dataFim, linguaPT, linguaUK, linguaES, linguaRU, linguaOutra, linguaOutraNivel, word, excel, situacaoProfissional, areaEmprego, disponibilidade, experiencia, ondeTrabalhou, motivo, reacao, receberPromocao,cp2)
            VALUES ($nome, $nacionalidade, $numIdenDoc, $tipoDoc, $dataemissao, $datansc, $morada, $cp1, $localidade, $tel, $email, $cartaconducao, $grauensino, $curso,$datainicio,$datafim,$linguaPT,$linguaUK,$linguaES,$linguaRU,$linguaOutra,$linguaOutravalor,$word,$excel,$situacao,$areacandidatura,$disponibilidade,$experiencia,$empresatrabalhou,$motivo,$atitude,$info,$cp2)";
        
        $result = $DbSite->query($sql);
       
        if ($result == true) {
            $mensagemEmprego = 'Enviado com sucesso';

            $nome = '';
            $nacionalidade = '';
            $numIdenDoc = '';
            $dataemissao = '';
            $datansc = '';
            $morada = '';
            $cp["cp1"] = '';
            $cp["cp2"] = '';
            $localidade = '';
            $tel = '';
            $email = '';
            $cartaconducao = '';
            $curso = '';
            $datainicio = '';
            $datafim = '';
            $linguaOutra = '';

            $disponibilidade = '';
            $experiencia = '';
            $empresatrabalhou = '';
            $motivo = '';
            $atitude = '';
        } else {
            $mensagemEmprego = 'Erro ao enviar dados';
        }
    }
}
 //DADOS PESSOAIS
/*$smarty->assign('nome', $nome);
$smarty->assign('nacionalidade', $nacionalidade);
$smarty->assign('numIdenDoc', $numIdenDoc);
$smarty->assign('tipoDoc', $tipoDoc);
$smarty->assign('dataemissao', $dataemissao);
$smarty->assign('datansc', $datansc);
$smarty->assign('morada', $morada);
$smarty->assign('cp1', $cp["cp1"]);
$smarty->assign('cp2', $cp["cp2"]);
$smarty->assign('localidade', $localidade);
$smarty->assign('tel', $tel);
$smarty->assign('email', $email);
$smarty->assign('cartaconducao', $cartaconducao);

// DADOS ACADEMICOS
$smarty->assign('curso', $curso);
$smarty->assign('datainicio', $datainicio);
$smarty->assign('datafim', $datafim);
$smarty->assign('linguaOutra', $linguaOutra);

// DADOS PROFISSIONAIS
$smarty->assign('experiencia', $experiencia);
$smarty->assign('empresatrabalhou', $empresatrabalhou);
$smarty->assign('motivo', $motivo);
$smarty->assign('atitude', $atitude);
$smarty->assign('disponibilidade', $disponibilidade);*/


$smarty->assign('mensagemEmprego', $mensagemEmprego);

$smarty->display('emprego.tpl');
