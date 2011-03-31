<?php
require_once('common/common.php');

function verificaFormulario(&$concelho,&$piso,&$bairroDestinatario,&$nome,&$telefone,&$telemovel,&$email,&$pais,&$provincia,&$localidade,&$rua,&$codigoPostal,&$porta,&$nacionalidade,&$naturalidade1,&$naturalidade2,&$sexo,&$actividade,&$meioDeConhecimento,&$escolaridade,&$estadoCivil,&$valorMensal,&$origemVencimento,&$referenciaVencimento,&$tipo,&$dataDeEmissao,&$numero,&$dataDeCaducidade,&$orgaoRegisto)
{
    if($concelho
            &&$nome
            &&$telefone
            &&$telemovel
            &&$email
            &&$pais
            &&$provincia
            &&$localidade
            &&$rua
            &&$codigoPostal
            &&$porta
            &&$nacionalidade
            &&$naturalidade1
            &&$naturalidade2
            &&$sexo&&$actividade
            &&$meioDeConhecimento
            &&$escolaridade
            &&$estadoCivil
            &&$valorMensal
            &&$origemVencimento
            &&$referenciaVencimento
            &&$tipo
            &&$dataDeEmissao
            &&$numero
            &&$dataDeCaducidade
            &&$orgaoRegisto
            &&valida_email($_POST['email'])
    )
    {
        return true;
    }
    else
    {
        return false;
    }
}
function iniciaVariaveis(&$concelho,&$piso,&$bairroDestinatario,&$nome,&$telefone,&$telemovel,&$email,&$pais,&$provincia,&$localidade,&$rua,&$codigoPostal,&$porta,&$nacionalidade,&$naturalidade1,&$naturalidade2,&$sexo,&$actividade,&$meioDeConhecimento,&$escolaridade,&$estadoCivil,&$valorMensal,&$origemVencimento,&$referenciaVencimento,&$tipo,&$dataDeEmissao,&$numero,&$dataDeCaducidade,&$orgaoRegisto,&$parentesco,&$nomeDestinatario,&$telefoneDestinatario,&$telemovelDestinatario,&$ruaDestinatario,&$paisDestinatario,&$localidadeDestinatario)
{
    global $DbSite;
    //não obrigatorios
    $piso=isset($_POST['piso'])?$DbSite->quote($_POST['piso']):null;
    $bairroDestinatario=isset($_POST['bairroDestinatario'])?$DbSite->quote($_POST['bairroDestinatario']):null;
    //obrigatorios
    $nome=isset($_POST['nome'])?$DbSite->quote($_POST['nome']):false;
    $telefone=isset($_POST['telefone'])?$DbSite->quote($_POST['telefone']):false;
    $telemovel=isset($_POST['telemovel'])?$DbSite->quote($_POST['telemovel']):false;
    $email=isset($_POST['email'])?$DbSite->quote($_POST['email']):false;
    $pais=isset($_POST['pais'])?$DbSite->quote($_POST['pais']):false;
    $concelho=isset($_POST['concelho'])?$DbSite->quote($_POST['concelho']):false;
    $provincia=isset($_POST['provincia'])?$DbSite->quote($_POST['provincia']):false;
    $localidade=isset($_POST['localidade'])?$DbSite->quote($_POST['localidade']):false;
    $rua=isset($_POST['rua'])?$DbSite->quote($_POST['rua']):false;
    $codigoPostal=isset($_POST['codigoPostal'])?$DbSite->quote($_POST['codigoPostal']):false;
    $porta=isset($_POST['porta'])?$DbSite->quote($_POST['porta']):false;
    $nacionalidade=isset($_POST['nacionalidade'])?$DbSite->quote($_POST['nacionalidade']):false;
    $naturalidade1=isset($_POST['naturalidade1'])?$DbSite->quote($_POST['naturalidade1']):false;
    $naturalidade2=isset($_POST['naturalidade2'])?$DbSite->quote($_POST['naturalidade2']):false;
    $sexo=isset($_POST['sexo'])?$DbSite->quote($_POST['sexo']):false;
    $actividade=isset($_POST['actividade'])?$DbSite->quote($_POST['actividade']):false;
    $meioDeConhecimento=isset($_POST['meioDeConhecimento'])?$DbSite->quote($_POST['meioDeConhecimento']):false;
    $escolaridade=isset($_POST['escolaridade'])?$DbSite->quote($_POST['escolaridade']):false;
    $estadoCivil=isset($_POST['estadoCivil'])?$DbSite->quote($_POST['estadoCivil']):false;
    $valorMensal=isset($_POST['valorMensal'])?$DbSite->quote($_POST['valorMensal']):false;
    $origemVencimento=isset($_POST['origemVencimento'])?$DbSite->quote($_POST['origemVencimento']):false;
    $referenciaVencimento=isset($_POST['referenciaVencimento'])?$DbSite->quote($_POST['referenciaVencimento']):false;
    $tipo=isset($_POST['tipo'])?$DbSite->quote($_POST['tipo']):false;
    $dataDeEmissao=isset($_POST['dataDeEmissao'])?$DbSite->quote($_POST['dataDeEmissao']):false;
    $numero=isset($_POST['numero'])?$DbSite->quote($_POST['numero']):false;
    $dataDeCaducidade=isset($_POST['dataDeCaducidade'])?$DbSite->quote($_POST['dataDeCaducidade']):false;
    $orgaoRegisto=isset($_POST['orgaoRegisto'])?$DbSite->quote($_POST['orgaoRegisto']):false;
    $parentesco=isset($_POST['parentesco'])?$DbSite->quote($_POST['parentesco']):false;
    $nomeDestinatario=isset($_POST['nomeDestinatario'])?$DbSite->quote($_POST['nomeDestinatario']):false;
    $telefoneDestinatario=isset($_POST['telefoneDestinatario'])?$DbSite->quote($_POST['telefoneDestinatario']):false;
    $telemovelDestinatario=isset($_POST['telemovelDestinatario'])?$DbSite->quote($_POST['telemovelDestinatario']):false;
    $ruaDestinatario=isset($_POST['ruaDestinatario'])?$DbSite->quote($_POST['ruaDestinatario']):false;
    $paisDestinatario=isset($_POST['paisDestinatario'])?$DbSite->quote($_POST['paisDestinatario']):false;
    $localidadeDestinatario=isset($_POST['localidadeDestinatario'])?$DbSite->quote($_POST['localidadeDestinatario']):false;
}
function insereDados(&$concelho,&$piso,&$bairroDestinatario,&$nome,&$telefone,&$telemovel,&$email,&$pais,&$provincia,&$localidade,&$rua,&$codigoPostal,&$porta,&$nacionalidade,&$naturalidade1,&$naturalidade2,&$sexo,&$actividade,&$meioDeConhecimento,&$escolaridade,&$estadoCivil,&$valorMensal,&$origemVencimento,&$referenciaVencimento,&$tipo,&$dataDeEmissao,&$numero,&$dataDeCaducidade,&$orgaoRegisto)
{
    if(User::saveUser())
    {
        return true;
    }
    return false;
}
function main()
{
    global $smarty,$DbSite;
    $concelho=$piso=$bairroDestinatario=$nome=$telefone=$telemovel=$email=$pais=$provincia=$localidade=$rua=$codigoPostal=$porta=$nacionalidade=$naturalidade1=$naturalidade2=$sexo=$actividade=$meioDeConhecimento=$escolaridade=$estadoCivil=$valorMensal=$origemVencimento=$referenciaVencimento=$tipo=$dataDeEmissao=$numero=$dataDeCaducidade=$orgaoRegisto=null;
    //printArray($_POST);
    iniciaVariaveis($concelho,$piso,$bairroDestinatario,$nome,$telefone,$telemovel,$email,$pais,$provincia,$localidade,$rua,$codigoPostal,$porta,$nacionalidade,$naturalidade1,$naturalidade2,$sexo,$actividade,$meioDeConhecimento,$escolaridade,$estadoCivil,$valorMensal,$origemVencimento,$referenciaVencimento,$tipo,$dataDeEmissao,$numero,$dataDeCaducidade,$orgaoRegisto);
    if(verificaFormulario($concelho,$piso,$bairroDestinatario,$nome,$telefone,$telemovel,$email,$pais,$provincia,$localidade,$rua,$codigoPostal,$porta,$nacionalidade,$naturalidade1,$naturalidade2,$sexo,$actividade,$meioDeConhecimento,$escolaridade,$estadoCivil,$valorMensal,$origemVencimento,$referenciaVencimento,$tipo,$dataDeEmissao,$numero,$dataDeCaducidade,$orgaoRegisto))
    {
        if(User::uploadDocumentosStatic($numero))
        {
            if(insereDados())
            {
                $from='no-reply@moneyexpress.pt';
                $to=array('<cristiani.ruiz@moneyexpress.pt>','<marcio.machado@moneyexpress.pt>','<luciene.rocha@moneyexpress.pt>');
                $subject='MONEY ONE - Cadastro';
                $body="Foi realizado um cadastro por:
                nome: $nome,
                Contatos: Telefone: $telefone  Telemovel: $telemovel,
                Email: $email,  
                Pais: $pais,
                Concelho: $concelho,
                Provincia: $provincia,
                Localidade: $localidade,
                Morada: $rua,
                Codigo Postal:  $codigoPostal,
                Numero: $porta,
                Andar/ Porta: $piso,
                Naturalidade: $nacionalidade,
                Sexo:  $sexo,
                Nacionalidade: $naturalidade1,
                Outra Nacionalidade: $naturalidade2,
                Actividade: $actividade,
                Conhecimento: $meioDeConhecimento,
                Escolaridade: $escolaridade,
                Estado Civil: $estadoCivil,
                Valor Mensal:  $valorMensal,
                Origem do Vencimento: $origemVencimento,
                Mes/Ano de referências: $referenciaVencimento\n
                Documentos:
                Tipo: $tipo,  
                Data de Emissao: $dataDeEmissao,
                Numero: $numero,
                Caducidade: $dataDeCaducidade,
                Orgao Expedidor: $orgaoRegisto";
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
            $smarty->assign('mensagem','Insira um documento no formulário.');
            $smarty->assign('imagem','errado.jpg');
        }
    }
    else
    {
        $smarty->assign('mensagem','Formulário preenchido incorrectamente.');
        $smarty->assign('imagem','errado.jpg');
    }
}
if(isset($_POST['cadastro']))
{
    main();
}
//$smarty->assign('paises',User::getPaises());
$view->display();