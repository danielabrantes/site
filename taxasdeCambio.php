<?php

require_once('common/common.php');
//printArray($_POST);
if (empty($_POST)) {
    $smarty->assign('vazio', true);
} else {
    $smarty->assign('vazio', false);
}
$valor = isset($_POST['valor']) ? $_POST['valor'] : floatval('1');
$taxa = isset($_POST['taxa']) ? $_POST['taxa'] : 'Normal';
$destino = isset($_POST['destino']) ? $_POST['destino'] : 'Brasil';

$valor = floatval($valor);
$cambios = getCambio();
//printArray($cambios);
$smarty->assign('cambios', $cambios);
$smarty->assign('taxa', $taxa);
$smarty->assign('destino', $destino);



$cambio = $cambios[0];
$moedaFinal = 'R$';

switch ($destino) {
    case 'Portugal':$moedaFinal = '€';
        break;
    case 'Brasil':$moedaFinal = 'R$';
        break;
}

switch ($taxa) {
    case 'Normal':
        $cambio = $cambios[0];
        break;
    case '24 HS':
        if ($language == 'en') {
            if ($destino == 'Brasil') {
                $cambio = $cambios[0];
            } else {
                $cambio = $cambios[3];
            }
        } else {
            $cambio = $cambios[1];
        }
        break;
    case 'Expressa':
        if ($language == 'en' && $destino == 'Portugal') {
            $cambio = 0;
        }
        else
            $cambio = $cambios[2];
        break;
}
$smarty->assign('moedaFinal', $moedaFinal);
$cambio = isset($_POST['cambio']) ? $_POST['cambio'] : $cambio;

//echo $taxa;

$cambio = str_replace(',', '.', $cambio);
$valorFinal = $valor * $cambio;
$smarty->assign('valor', $valor);
$smarty->assign('valorFinal', $valorFinal);
$view->display();
