<?php

require_once('common/common.php');


if (isset($_POST['contacto'])) {
    $nome = isset($_POST['nome'])?$DbSite->quote($_POST['nome']):'null';
    $email = isset($_POST['email'])?$DbSite->quote($_POST['email']):'null';
    $loja = isset($_POST['loja'])?$DbSite->quote($_POST['loja']):'null';
    $assunto = isset($_POST['assunto'])?$DbSite->quote($_POST['assunto']):'null';
    $mensagem = isset($_POST['mensagem'])?$DbSite->quote($_POST['mensagem']):'null';
    $receber = isset($_POST['receber'])?$DbSite->quote($_POST['receber']):'null';
    //var_dump($receber);
    //die;

    if ($receber == "'on'") {
        $receber1 = "Deseja receber informações sobre promoções da MoneyOne";
    } else {
        $receber1 = "Não deseja receber informações sobre promoções da MoneyOne.";
    }

    if ($nome && valida_email($_POST['email']) && $loja && $assunto && $mensagem) {

        $sql = "INSERT
		INTO site.contato (nome, email, loja, assunto, mensagem, receberInformacao)
		VALUES ($nome, $email, $loja, $assunto, $mensagem, $receber)";
		//echo $sql;

        if ($DbSite->query($sql)) {
            $from = 'no-reply@moneyexpress.pt';
            /*
             rk.uk@moneyoneexpress.com
			info.uk@moneyoneexpress.com
             * */

            if($language=='pt')
            {
            	$to = array('<faleconnosco@moneyexpress.pt>');
            }
        	if($language=='es')
            {
            	$to = array('<faleconnosco@moneyexpress.pt>');
            }
        	if($language=='en')
            {
            	$to = array('<info.uk@moneyoneexpress.com>');
            }


            //$to = array('<pedro.abrantes@moneyexpress.pt>','<daniel.abrantes@yahoo.com>');
            $subject = 'MONEY ONE - Fale Conosco';
            $body = "Foi colocada uma questão aos nossos serviços por:
            nome: $nome,
            email: $email,
            loja: $loja,
            assunto: $assunto,
            mensagem: $mensagem,
            $receber1";
            @Email::send($from, $to, $subject, $body);
            echo 'Formulário enviado com sucesso.';
            $smarty->assign('mensagem', 'Formulário enviado com sucesso.');
            $smarty->assign('imagem', 'certo.jpg');
        } else {
        echo 'Erro ao inserir formulário.';
            $smarty->assign('mensagem', 'Erro ao inserir formulário.');
            $smarty->assign('imagem', 'errado.jpg');
        }
    } else {
        echo 'Formulário preenchido incorrectamente.';
        $smarty->assign('mensagem', 'Formulário preenchido incorrectamente.');
        $smarty->assign('imagem', 'errado.jpg');
    }
}
$smarty->assign('pagina', 'faleconosco');
$smarty->assign('cache',0);
$view->display();