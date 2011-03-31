<?php
require_once('common/common.php');
$_POST['OBJCTOR']=0;
$_POST['FraCorresponsal']=0;
$_POST['FraAgenciaPago']=0;
$_POST['FraComisionAg']=0;
$_POST['FraComisionAgR']=0;
$_POST['FraRetencion']=0;
$_POST['FraComisionComercial']=0;
$_POST['FraComisionCorr']=0;
$_POST['OBJCTCL']=1; //cliebte id
$_POST['OBJCTRC']=0;
$_POST['OBJCTAC']=0;
$_POST['FraMonCobro']=0;
$_POST['FraEnviado']=0;
$_POST['FraCargo']=0;
$_POST['FraUrgente']=0;
$_POST['FraMonDPago']=0;
$_POST['FraARecibir']=0;
$_POST['FraTasaAgn']=0;
$_POST['FraTasa']=0;
$_POST['FraMensaje']=0;
$_POST['FraNotas']=0;
$_POST['FraConcepto']=0;
$_POST['FraModoPago']=0;
$_POST['FraProm']=0;
$_POST['FraTaxProm']=0;
$_POST['FraOrigen1']=880; //A Origem é o site
$_POST['FraEntregue']=0;

$_GET['pr']='cpl_amlcheck';
require_once('../../_response/rsproxy.php');
echo $qr_OBJ;
$accao='Aprovar';
$id=1;
