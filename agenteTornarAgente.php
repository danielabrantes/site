<?php
require_once('common/common.php');

//printArray($_POST);
if(isset($_POST['agente']))
{
    //printArray($_POST);
    $mensagem=$DbSite->quote($_POST['mensagem']);
    $empresa=$DbSite->quote($_POST['empresa']);
    $nif=$DbSite->quote($_POST['nif']);
    $nome=$DbSite->quote($_POST['nome']);
    $rua=$DbSite->quote($_POST['rua']);
    $cidade=$DbSite->quote($_POST['cidade']);
    $cep=$DbSite->quote($_POST['cep']);
    $pais=$DbSite->quote($_POST['pais']);
    $telefone=$DbSite->quote($_POST['telefone']);
    $tipo=$DbSite->quote($_POST['tipo']);
    $cae=$DbSite->quote($_POST['cae']);
    $filial=$DbSite->quote($_POST['filial']);
    $email=$DbSite->quote($_POST['email']);
    $obs=$DbSite->quote($_POST['obs']);

    $data=$DbSite->quote(date('Y-m-d H:i:s'));
    if($mensagem
            &&$empresa
            &&$nif
            &&$nome
            &&$rua
            &&$cidade
            &&$cep
            &&$pais
            &&$telefone
            &&$tipo
            &&$cae
            &&$filial
            &&valida_email($_POST['email'])
    )
    {
        $sql="insert into site.agente(empresa,nif,nome,cidade,cep,pais,telefone,tipo,cae,filial,email,obs,data)
			values          ($empresa,$nif,$nome,$cidade,$cep,$pais,$telefone,$tipo,$cae,$filial,$email,$obs,$data);";
        $result=$DbSite->query($sql);
        if($result)
        {
            $from='no-reply@moneyexpress.pt';
            $to=array('<cristiani.ruiz@moneyexpress.pt>');
            $subject='MONEY ONE - Torna-se um Agente';
            $body="Foi realizado um cadastro de Agente por:
            Nome da empresa: $empresa,
            Numero de NIF: $nif,
            Nome de Contacto: $nome,
            Morada da empresa:  $rua,
            Cidade: $cidade,
            CEP: $cep,
            Pais: $pais,
            Telefone empresa: $telefone,
            Tipo de negócio: $tipo,
            Numero do CAE: $cae,
            Numero de filiais: $filial,
            Email: $email,
            Observacoes: $obs";
            Email::send($from,$to,$subject,$body);
            $smarty->assign('mensagem','Formulário enviado com sucesso.');
            $smarty->assign('imagem','certo.jpg');
            $from='no-reply@moneyexpress.pt';
            $to=$_POST['email'];
            $subject='MONEY ONE - CADASTRO DE AGENTE';
            $body='O seu cadastro de AGENTE foi submetido com sucesso.Em breve irá ser contactado';
            Email::send($from,$to,$subject,$body);
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
$view->display();
