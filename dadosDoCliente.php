<?php
require_once('common/common.php');
require_once('common/Verifica_loggado.php');
function mantemSeccaoAberta()
{
	global $user,$smarty;
	if(isset($_POST['dadosPessoais']))
	{
		$smarty->assign('dadosPessoais',$_POST['dadosPessoais']);
		$user->setSeccao('dadosPessoais');
	}
	elseif(isset($_POST['morada']))
	{
		$smarty->assign('morada',$_POST['morada']);
		$user->setSeccao('morada');
	}
	elseif(isset($_POST['documentos']))
	{
		$smarty->assign('documentos',$_POST['documentos']);
		$user->setSeccao('documentos');
	}
	elseif(isset($_POST['destinatariosFormulario']))
	{
		$smarty->assign('destinatariosFormulario',$_POST['destinatariosFormulario']);
		$user->setSeccao('destinatariosFormulario');
	}
	elseif(isset($_POST['alteracaoSenha']))
	{
		$smarty->assign('alteracaoSenha',$_POST['alteracaoSenha']);
		$user->setSeccao('alteracaoSenha');
	}

	if($user->getSeccao()&&$_POST[$user->getSeccao()]=='diminuir')
	{
		$smarty->assign($user->getSeccao(),'diminuir');
	}
	else
	{
		$smarty->assign($user->getSeccao(),'aumentar');
	}
}
mantemSeccaoAberta();
$formulario=isset($_POST['formulario'])?$_POST['formulario']:null;
//echo($formulario);
//printArray($_POST);
switch($formulario)
{
	case 'dadosPessoais':
		$logado=true;
		$smarty->assign('mensagem',User::saveDadosPessoais($logado)?'Pedido de alteração de dados efectuado com sucesso':'Pedido de alteração de dados não efectuado');
		break;
	case 'morada':
		$smarty->assign('mensagem',$user->saveMorada()?'Pedido de alteração de morada efectuado com sucesso':'Pedido de alteração de morada não efectuado');
		break;
	case 'documentos':
		$smarty->assign('mensagem',$user->saveDocumentos()?'Pedido de alteração de dados efectuado com sucesso':'Pedido de alteração de dados não efectuado');
		break;
	case 'upload':
		$smarty->assign('mensagem',$user->uploadDocumentos()?'Documento enviado com sucesso':'Problemas as enviar o documento');
		break;
	case 'destinatario':
		if(isset($_POST['removerDestinatario']))
		{
			$smarty->assign('mensagem',$user->saveRemoverDestinatario()?'Pedido de remoção de destinatário enviado com sucesso':'Problemas no pedido de remoção do destinatário');
			$smarty->assign('destinatariosARemover',$destinatariosARemover);
		}
		elseif(isset($_POST['actualizarDestinatario']))
		{
			$smarty->assign('mensagem',User::saveDestinatario($user->getId())?'Pedido de actualização de destinatário enviado com sucesso':'Problemas no pedido de actualização do destina');
		}
		elseif(isset($_POST['adicionarConta']))
		{

			if($user->getNovaConta())
			{

				$smarty->assign('mensagem',$user->saveAdicionarConta()?'Pedido de adicionar nova conta enviado com sucesso':'Problemas ao adicionar nova conta');
				$smarty->assign('adicionarConta',0);
				$user->setNovaConta(false);
			}
			else
			{
				$bancos=$user->getBancosPorDestinatario();
				/*printArray($bancos);
				die;*/
				$smarty->assign('bancos',$bancos);
				/*
				*/
				$modosDePagamento=$user->getModosDePagamento();
				
				$cidades=$user->getCidadesPorDestinatario();
				/*echo 'adicionarConta';
				die;
				 * 
				 */
				$smarty->assign('cidades',$cidades);
				$smarty->assign('modosDePagamento',$modosDePagamento);
				$smarty->assign('adicionarConta',1);
				$user->setNovaConta(true);
			}
		}
		elseif(isset($_POST['removerConta']))
		{
			if(!isset($_POST['conta']))
			{
				$smarty->assign('mensagem','Nenhuma conta foi seleccionada');

			}
			else
			{
				$smarty->assign('mensagem',$user->saveRemoverConta()?'Pedido de remoção de conta enviado com sucesso':'Problemas as enviar pedido de remoção de conta');
			}
		}
		break;
	case 'alterarSenha':
		if(isset($_POST['novaSenha']))
		{
			if($user->setSenha($_POST['novaSenha']))
			{
				$smarty->assign('senha',$user->getSenha());
				$smarty->assign('mensagem','Senha alterada com sucesso');
			}
			else
			{
				$smarty->assign('senha','erro ao alterar a senha');
			}
		}
		break;
}

//mensagens e o esconder de botoes
/*
$smarty->assign('mensagem',User::getPedidoDeAlteracaoDeDadosPessoais()?'Pedido de alteração de dados efectuado com sucesso':'');
$smarty->assign('mensagem',User::getPedidoDeAlteracaoDeMorada()?'Pedido de alteração de morada efectuado com sucesso':'');
$smarty->assign('mensagem',User::getPedidoDeDocumentos()?'Pedido de alteração de dados efectuado com sucesso':'');
*/
$parentescos=$user->getParentescos();
$destinatarios=$transferencia->procuraDestinatarios($user);
//printArray($destinatarios);

$smarty->assign('parentescos',$parentescos);
$smarty->assign('user',$user->getDados());
$smarty->assign('destinatarios',$destinatarios);
//echo 'destinatarios';printArray($destinatarios);
$smarty->assign('senha',$user->getSenha($_POST['novaSenha']));
$view->display();