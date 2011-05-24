<?php

require_once('common/common.php');
$valor = isset($_POST['valor']) ? $_POST['valor'] : floatval('1');
$valor = floatval($valor);
$cambios = getCambio();
$smarty->assign('cambios', $cambios);
$cambio = $cambios[0];

$cambio = isset($_POST['cambio']) ? $_POST['cambio'] : $cambio;

$smarty->assign('selecionado', $cambio);
if (isset($cambios[3]) and $cambio == $cambios[3]) {
    $smarty->assign('moedaFinal', '€');
} else {
    $smarty->assign('moedaFinal', 'R$');
}

$cambio = str_replace(',', '.', $cambio);
$valorFinal = $valor * $cambio;
$smarty->assign('valor', $valor);
$smarty->assign('valorFinal', $valorFinal);
$view->display();
