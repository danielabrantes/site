<?php

require_once('common/common.php');


if (isset($_POST['contacto'])) {
    $nome = $DbSite->quote($_POST['nome']);
    $email = $DbSite->quote($_POST['email']);
    $loja = $DbSite->quote($_POST['loja']);
    $assunto = $DbSite->quote($_POST['assunto']);
    $mensagem = $DbSite->quote($_POST['mensagem']);
    $receber = $DbSite->quote($_POST['receber']);

    if ($receber == "'on'") {
        $receber1 = "Não deseja receber informações sobre promoções da MoneyOne.";
    } else {
        $receber1 = "Deseja receber informações sobre promoções da MoneyOne";
    }

    if ($nome && valida_email($_POST['email']) && $loja && $assunto && $mensagem) {

        $sql = "INSERT
		INTO site.contato (nome, email, loja, assunto, mensagem, receberInformacao)
		VALUES ($nome, $email, $loja, $assunto, $mensagem, $receber)";

        if ($DbSite->query($sql)) {
            $from = 'no-reply@moneyexpress.pt';
            $to = array('<faleconnosco@moneyexpress.pt>','<marcio.machado@moneyexpress.pt>');
            //$to = array('<daniel.abrantes@hotmail.pt>','<daniel.abrantes@yahoo.com>');
            $subject = 'MONEY ONE - Fale Conosco';
            $body = "Foi colocada uma questão aos nossos serviços por:  
            nome: $nome,
            email: $email,
            loja: $loja,
            assunto: $assunto,
            mensagem: $mensagem,
            $receber1";
            Email::send($from, $to, $subject, $body);
            $smarty->assign('mensagem', 'Formulário enviado com sucesso.');
            $smarty->assign('imagem', 'certo.jpg');
        } else {
            $smarty->assign('mensagem', 'Erro ao inserir formulário.');
            $smarty->assign('imagem', 'errado.jpg');
        }
    } else {
        $smarty->assign('mensagem', 'Formulário preenchido incorrectamente.');
        $smarty->assign('imagem', 'errado.jpg');
    }
}
$smarty->assign('pagina', 'faleconosco');
$smarty->assign('cache',0);
$view->display();