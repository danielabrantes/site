<?php
require_once('common/common.php');
$valor = isset($_POST['valor']) ? $_POST['valor'] : 1.0;
$sql = 'select valCambio as cambio from webportalmex.cambio where idcambio=1;';
$cambio = $DbTuga->getall($sql);
$taxa = $cambio[0]->cambio;

//echo 'valor '.$valor.'<br />';
//echo 'taxa: '.$taxa.'<br />';
$valorFinal = $valor * $taxa;
//echo  '$valorFinal'.$valorFinal.'<br />';

$smarty->assign('valorFinal', $valorFinal);
$smarty->assign('valor', $valor);

$sql = 'select htr_ID as id, htr_NombreTarifa as nome from hd_cambiosdia;';
$tarifas = $DbTuga->getall($sql);
$smarty->assign('tarifas', $tarifas);

$sql = 'select pai_CodElite as id,pai_NombreESP as nome from officeschema.hd_paises;';
$sql = 'select pai_CodElite as id,pai_NombreESP as nome from officeschema.hd_paises where pai_CodElite= 76;';
$paises = $DbTuga->getall($sql);
$smarty->assign('paises', $paises);

$sql = "select pai_CodElite as id,pai_NombreESP as nome from officeschema.hd_paises where pai_NombreESP like 'Portugal';";
$paisOrigem = $DbTuga->getall($sql);
$smarty->assign('paisOrigem', $paisOrigem);

$sql = 'select mc_id as id,mc_nombre as nome from officeschema.hd_monedascobro;';
$moedas = $DbTuga->getall($sql);
$smarty->assign('moedas', $moedas);
$view->display();