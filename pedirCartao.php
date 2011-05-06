<?php
require_once('common/common.php');


if(isset($_POST['enviar']))
{
    $nome=$DbSite->quote($_POST['nome']);
    $email=$DbSite->quote($_POST['email']);
    $tel=$DbSite->quote($_POST['telefone']);
    $cadastro=$DbSite->quote($_POST['cadastro']);
    $regulamento=$DbSite->quote($_POST['regulamento']);
    $informacao=$DbSite->quote($_POST['informacao']);

    if($nome&&valida_email($_POST['email'])&&$tel&&$regulamento=="'on'")
    {
        $sql="INSERT INTO
		site.pedircartao (nome, email, telefone, existeCadastro, regulamento,
		receberPromocao)
		VALUES ($nome, $email, $tel, $cadastro, $regulamento,$informacao)";

        if($DbSite->query($sql))
        {
            if($cadastro=="'on'")
            {
                $registo='Já é cliente da MoneyOne';
            }
            else
            {
                $registo='Nao é cliente da MoneyOne';
            }
            $from='no-reply@moneyexpress.pt';
			$to = array('<pedircartao@moneyexpress.pt>');

        	$subject='MONEY ONE - Pedido Cartao de Pontos';
            $body="Foi feito um pedido de cartao de pontos por:
            nome: $nome,
            email: $email,
            telefone: $tel,
            $registo ";
            Email::send($from,$to,$subject,$body);
            $smarty->assign('mensagem','Formulário enviado com sucesso.');
            $smarty->assign('imagem','certo.jpg');
        }
        else
        {
            $smarty->assign('mensagem','Erro ao inserir formulário.');
            $smarty->assign('imagem','errado.jpg');
        }
    }
    else
    {
        $smarty->assign('mensagem','Formulário preenchido incorrectamente.');
        $smarty->assign('imagem','errado.jpg');
    }
}
$smarty->assign('pagina','pedirCartao');
$smarty->assign('cache',0);
$view->display();