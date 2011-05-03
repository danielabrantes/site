<?php
require_once('common/common.php');
$valor = isset($_POST['valor']) ? $_POST['valor'] : floatval('1.00');
$valor=floatval($valor);
//echo getCambio();


$cambio=getCambio();
$cambio = str_replace(',','.',$cambio);
//echo sprintf("%01.2f", $cambio);;


$valorFinal = $valor * $cambio;


//echo 'valor '.$valor.'';
//echo  'valorFinal'.$valorFinal.'';

$smarty->assign('valor', $valor);
$smarty->assign('valorFinal', $valorFinal);

/*
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
$smarty->assign('moedas', $moedas);*/
$view->display();