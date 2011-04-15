<?php

require_once('common/common.php');
require_once('common/Verifica_loggado.php');
main();

function main() {
    global $transferencia, $user, $smarty;
    $pagina = isset($_POST['pagina']) ? $_POST['pagina'] : 'null';
    switch ($pagina) {
        case '2':f2();
            break;
        case 'resumo':resumo();
            break;
        case 'confirmar':confirmar();
            break;
        case 'calcularCambio':calcularCambio();
            break;
        default:novaTransferencia();
    }
    $view->display();
}

function calcularCambio() {
    global $transferencia, $user, $smarty;
    $cambio = $transferencia->calculaCambio($_POST['cidade'], $_POST['prioridade'], $_POST['modoDePagamento'], $_POST['moeda']);
    $smarty->assign('quadro', $transferencia->getQuadro());
    $smarty->assign('cambio', $cambio);
    $smarty->assign('menu', '2');
}

function f2() {
    global $transferencia, $user, $smarty, $DbTuga;
    //printArray($_POST);
    if (isset($_POST['valor']) && isset($_POST['modosDeCobranca']) && isset($_POST['destinatario'])) {
        $valor = $transferencia->verificaValor($DbTuga->quote($_POST['valor']));
        $transferencia->setModoDeCobranca($DbTuga->quote($_POST['modosDeCobranca']));
        $transferencia->setDestinatario($_POST['destinatario']);
        $transferencia->setValor($valor);
        $cambio = $transferencia->calculaCambio();
        $quadro = $transferencia->getQuadro();
        $smarty->assign('cambio', $cambio);
        $smarty->assign('quadro', $quadro);
        $smarty->assign('menu', '2');
    }
}

function contasDoReceptor() {
    global $transferencia, $user, $smarty, $DbTuga;
    if (isset($_POST['cambio'])) {
        $cambio = $DbTuga->quote($_POST['cambio']);
        $transferencia->setCambio($cambio);
        $smarty->assign('menu', 'transferenciaContasDoReceptor');
    }
}

function novaTransferencia() {
    global $transferencia, $user, $smarty;

    if (empty($_POST)) {
        $moeda = $transferencia->getMoedaEmissor($user);
        $destinatarios = $transferencia->procuraDestinatarios($user);
        $modosDeCobranca = $transferencia->getModosDeCobranca();
        $smarty->assign('modosDeCobranca', $modosDeCobranca);
        $smarty->assign('moeda', $moeda);
        $smarty->assign('destinatarios', $destinatarios);
        $smarty->assign('menu', 'transferencia');
    }
}

function resumo() {
    global $transferencia, $user, $smarty;
    $cambio = $_POST['cambio'];
    $transferencia->setCambio($cambio);
    $cambio = $transferencia->getCambio();
    $smarty->assign('cambio', $cambio);

    //valor
    $valor = $transferencia->getValor();

    $smarty->assign('valor', $valor);

    //Taxa
    $taxa = $transferencia->getTaxa();

    $smarty->assign('taxa', $taxa);

    //total que o emissor tem que pagar
    $total = $taxa + $valor;
    $smarty->assign('total', $total);

    //valor que o receptor ira receber
    $valorReceptor = $valor * $cambio->taxa;
    $smarty->assign('valorReceptor', $valorReceptor);

    $modoDeCobranca = $transferencia->getModosDeCobranca();
    switch ($modoDeCobranca) {
        case 133/* Multibanco */:
            $referencia = $transferencia->getReferencia();
            $smarty->assign('referencia', substr($referencia, 0, 3) . ' ' . substr($referencia, 3, 3) . ' ' . substr($referencia, 6, 3));
            $entidade = Referencia::$entidade;
            $smarty->assign('entidade', substr($entidade, 0, 2) . ' ' . substr($entidade, 2, 3));
            $smarty->assign('modoDeCobranca', $modoDeCobranca);
            break;
        case 134/* Transferencia BES */:
            $smarty->assign('conta', 'BES 000703870002968000415 ou 000703870002972000695');
            $smarty->assign('modoDeCobranca', $modoDeCobranca);
            break;
        case 135/* Transferencia BPI */:
            $smarty->assign('conta', 'BPI 001000003368577000189 ou 001000003368577000383');
            $smarty->assign('modoDeCobranca', $modoDeCobranca);
            break;
        case 136/* Transferencia BPN */:
            $smarty->assign('conta', 'BPN 007900002781311810407 ou 007900002781311810698');
            $smarty->assign('modoDeCobranca', $modoDeCobranca);
            break;
        case 137/* Transferencia CGD */:
            $smarty->assign('conta', 'CGD 003502160007110123076 ou 003502160007110203004');
            $smarty->assign('modoDeCobranca', $modoDeCobranca);
            break;
        case 880/* Transferencia Outros */:
            $smarty->assign('conta', 'BES 000703870002968000415 ou 000703870002972000695' . '' .
                    'BPI 001000003368577000189 ou 001000003368577000383' . '' .
                    'BPN 007900002781311810407 ou 007900002781311810698' . '' .
                    'CGD 003502160007110123076 ou 003502160007110203004' . '');
            $smarty->assign('modoDeCobranca', $modoDeCobranca);
            break;
    }

    //moeda do emissor
    $moedaEmissor = $transferencia->getMoedaEmissor($user);
    $smarty->assign('moedaEmissor', $moedaEmissor);

    //moeda do receptor
    $moedaReceptor = $transferencia->getMoedaReceptor($user);
    $smarty->assign('moedaReceptor', $moedaReceptor);

    //Modo de pagamento do emissor
    $modoDePagamentoEmissor = $transferencia->getModoDePagamentoEmissor();
    $smarty->assign('modoDePagamentoEmissor', $modoDePagamentoEmissor);

    //Modo de pagamento do Receptor
    $modoDePagamentoReceptor = $transferencia->getModoDePagamentoReceptor();
    $smarty->assign('modoDePagamentoReceptor', $modoDePagamentoReceptor);

    //Receptor
    $receptor = $transferencia->getReceptor();
    $smarty->assign('receptor', $receptor);
    $smarty->assign('menu', 'resumo');
}

function confirmar() {
    global $transferencia, $user, $smarty;
    $smarty->assign('transferencia', $transferencia->save());
    $smarty->assign('menu', 'transferenciaFinal');
}