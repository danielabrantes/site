<?php
require_once 'common/Functions.php';
require_once 'common/Configure.php';
//require_once 'common/Smarty.php';
require_once 'common/Errors.php';
require_once 'common/codificacao.php';
require_once 'common/cache.php';
require_once 'common/Date.php';
require_once 'common/User.php';
require_once 'common/DbSite.php';
require_once 'common/DbTuga.php';
require_once 'common/Transferencia.php';
require_once 'common/Session.php';
require_once 'testes/assert.php';
class Test{
	function __construct(){
		global $transferencia;

		$numero=1;
		assertTrue($transferencia->verificaValor($numero),floatval($numero));
		//echo $transferencia->verificaValor($numero).'<br />';
		
		$numero=-1;
		assertFalse($transferencia->verificaValor($numero),floatval($numero));
		//echo $transferencia->verificaValor($numero).'<br />';
	
		$numero=0;
		assertFalse($transferencia->verificaValor($numero),floatval($numero));
		//echo $transferencia->verificaValor($numero).'<br />';
		
		$numero=100.0;
		assertTrue($transferencia->verificaValor($numero),floatval($numero));
		//echo $transferencia->verificaValor($numero).'<br />';

		$numero=100.1;
		assertTrue($transferencia->verificaValor($numero),floatval($numero));
		//echo $transferencia->verificaValor($numero).'<br />';

		$numero=100.01;
		assertTrue($transferencia->verificaValor($numero),floatval($numero));
		//echo $transferencia->verificaValor($numero).'<br />';

		$numero=100.00;
		assertTrue($transferencia->verificaValor($numero),floatval($numero));
		//echo $transferencia->verificaValor($numero).'<br />';

		$numero=100.001;
		assertFalse($transferencia->verificaValor($numero),floatval($numero));
		echo $transferencia->verificaValor($numero).'<br />';

		//string
		$numero='1';
		assertTrue($transferencia->verificaValor($numero),floatval($numero));
		//echo $transferencia->verificaValor($numero).'<br />';
		
		$numero='-1';
		assertFalse($transferencia->verificaValor($numero),floatval($numero));
		//echo $transferencia->verificaValor($numero).'<br />';

		$numero='0';
		assertFalse($transferencia->verificaValor($numero),floatval($numero));
		//echo $transferencia->verificaValor($numero).'<br />';

		$numero='100.0';
		assertTrue($transferencia->verificaValor($numero),floatval($numero));
		//echo $transferencia->verificaValor($numero).'<br />';

		$numero='100.1';
		assertTrue($transferencia->verificaValor($numero),floatval($numero));
		//echo $transferencia->verificaValor($numero).'<br />';

		$numero='100.01';
		assertTrue($transferencia->verificaValor($numero),floatval($numero));
		//echo $transferencia->verificaValor($numero).'<br />';

		$numero='100.00';
		assertTrue($transferencia->verificaValor($numero),floatval($numero));
		//echo $transferencia->verificaValor($numero).'<br />';

		$numero='100.001';
		assertFalse($transferencia->verificaValor($numero),floatval($numero));
		//echo $transferencia->verificaValor($numero).'<br />';
	}
}
$teste=new Test();
