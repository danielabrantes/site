<?php

require_once('common/common.php');

if (isset($_POST['emprego'])) {
    $nome = $DbSite->quote($_POST['nome']);
    $nacionalidade = $DbSite->quote($_POST['nacionalidade']);
    $numIdenDoc = $_POST['identifDoc'];
    $tipoDoc = isset($_POST['tipoDoc']) ? $DbSite->quote($_POST['tipoDoc']) : 'null';
    $dataemissao = $_POST['dataEmissao'];
    $datansc = $_POST['dataNascimento'];
    $morada = $DbSite->quote($_POST['morada']);
    $cp = array("cp1" => $_POST['codPostal1'], "cp2" => $_POST['codPostal2']);
    $localidade = $DbSite->quote($_POST['localidade']);
    $tel = $DbSite->quote($_POST['telefone']);
    $email = $DbSite->quote($_POST['email']);
    $cartaconducao = is_numeric($_POST['cartaConducao']) ? $_POST['cartaConducao'] : 'null';
    //DADOS ACADEMICOS
    $grauensino = $DbSite->quote($_POST['grauEnsino']);
    $curso = isset($_POST['areaCurso']) ? $DbSite->quote($_POST['areaCurso']) : 'null';
    $datainicio = isset($_POST['dataInicio']) ? $DbSite->quote($_POST['dataInicio']) : 'null';
    $datafim = isset($_POST['dataFim']) ? $DbSite->quote($_POST['dataFim']) : 'null';
    $linguaPT = $DbSite->quote($_POST['valorPT']);
    $linguaUK = $DbSite->quote($_POST['valorUK']);
    $linguaES = $DbSite->quote($_POST['valorES']);
    $linguaRU = $DbSite->quote($_POST['valorRU']);
    $linguaOutra = $DbSite->quote($_POST['linguaOutra']);
    $linguaOutravalor = $DbSite->quote($_POST['valorOutra']);
    $word = isset($_POST['valorWord']) ? $DbSite->quote($_POST['valorWord']) : 'null';
    $excel = isset($_POST['valorExcel']) ? $DbSite->quote($_POST['valorExcel']) : 'null';
    // DADOS PROFISSIONAIS
    $situacao = $DbSite->quote($_POST['situacaoProfissional']);
    $areacandidatura = $DbSite->quote($_POST['areaCadidatura']);
    $disponibilidade = $DbSite->quote($_POST['disponibilidade']);
    $experiencia = $DbSite->quote($_POST['experienciaProfissional']);
    $empresatrabalhou = $DbSite->quote($_POST['empresaTrabalhou']);
    $motivo = $DbSite->quote($_POST['motivoMoney']);
    $atitude = $DbSite->quote($_POST['pedidoSolicitado']);
    $info = $DbSite->quote($_POST['informacao']);
    $cp1 = $DbSite->quote($cp["cp1"]);
    $cp2 = $DbSite->quote($cp["cp2"]);

    if ($info == "'on'") {
        $receber1 = "Não deseja receber informações sobre promoções da MoneyOne.";
    } else {
        $receber1 = "Deseja receber informações sobre promoções da MoneyOne";
    }

    if ($nome && $nacionalidade && $numIdenDoc && $tipoDoc && $dataemissao && $datansc && $morada && $cp["cp1"] && $cp["cp2"] && $localidade
            && $tel && $email && $grauensino && $word && $excel && $situacao && $areacandidatura && $disponibilidade && $experiencia && $empresatrabalhou && $motivo && $atitude
            && valida_email($_POST['email'])) {
        $sql = "INSERT INTO
		site.candidatura (nome, nacionalidade, num_doc, tipo_doc, data_emissao,
		data_nasc, morada,cp1, localidade, telefone, email, numCartaConducao,
		grauEnsino, curso, dataInicio, dataFim, linguaPT, linguaUK, linguaES, linguaRU, linguaOutra,
		linguaOutraNivel, word, excel, situacaoProfissional, areaEmprego, disponibilidade, experiencia, ondeTrabalhou, motivo, reacao, receberPromocao,cp2)
		VALUES ($nome, $nacionalidade, $numIdenDoc, $tipoDoc, $dataemissao,
		$datansc, $morada, $cp1, $localidade, $tel, $email, $cartaconducao, $grauensino,
		$curso,$datainicio,$datafim,$linguaPT,$linguaUK,$linguaES,$linguaRU,$linguaOutra,
		$linguaOutravalor,$word,$excel,$situacao,$areacandidatura,$disponibilidade,$experiencia,$empresatrabalhou,$motivo,$atitude,$info,$cp2)";
        //echo $sql;
        if ($DbSite->query($sql)) {
            $smarty->assign('mensagem', 'Formulário enviado com sucesso.');
            $smarty->assign('imagem', 'certo.jpg');
            $from = 'no-reply@moneyexpress.pt';
            $to = $_POST['email'];
            $subject = 'MONEY ONE - CADASTRO DE EMPREGO';
            $body = 'O seu cadastro de emprego foi submetido com sucesso.Vai ser contactado brevemente';
            Email::send($from, $to, $subject, $body);

            $from = 'no-reply@moneyexpress.pt';

            if($language=='pt')
            {
            	$to = array('<jobs@moneyexpress.pt>');
            }
        	if($language=='es')
            {
            	$to = array('<jobs@moneyexpress.pt>');
            }
        	if($language=='en')
            {
            	$to = array('<rh.uk@moneyoneexpress.com>');
            }


            $subject = 'MONEY ONE - Emprego';
            $body = "Foi preenchido um cadastro de emprego por:
            nome: $nome\n
            Dados Pessoais
            nacionalidade:  $nacionalidade,
            N.º Doc. Identificacao: $numIdenDoc,
            Tipo de Documento: $tipoDoc,
            Data de Emissao: $dataemissao,
            Data de Nascimento: $datansc,
            Morada: $morada,
            Codigo Postal: $cp1 - $cp2,
            Localidade: $localidade,
            Telefone: $tel,
            Email: $email,
            Numero da carta de conducao: $cartaconducao
            \n
            Dados Académicos
            Grau de ensino: $grauensino,
            Area de curso: $curso,
            Data de Inicio: $datainicio,
            Data de Fim: $datafim,
            Portugues: $linguaPT,
            Ingles: $linguaUK,
            Espanhol: $linguaES,
            Russo: $linguaRU,
            Outra lingua: $linguaOutra,
            Nivel: $linguaOutravalor,
            Conhecimento de Word: $word,
            Conhecimento de Excel: $excel
            \n
            Dados Profissionais
            Situação profissional atual: $situacao,
            Area de emprego que se candidata: $areacandidatura,
            Disponibilidade: $disponibilidade,
            Experiencia profissional? $experiencia,
            Empresas onde trabalhou? $empresatrabalhou,
            Motivo pelo qual gostaria de trabalhar na MoneyOne? $motivo,
            Como reagiria se um/a cliente o/a acusasse de nao ter feito um pedido como solicitado? $atitude\n\n$receber1";
            Email::send($from, $to, $subject, $body);
        } else {
            $smarty->assign('mensagem', 'Erro ao inserir formulário.');
            $smarty->assign('imagem', 'errado.jpg');
        }
    } else {
        $smarty->assign('mensagem', 'Formulário preenchido incorrectamente.');
        $smarty->assign('imagem', 'errado.jpg');
    }
}
$view->display($language);