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
require_once 'common/Referencia.php';
require_once 'common/Email.php';
class Test
{
	function __construct()
	{
		$from='no-repley@moneyexpress.pt';
		$to='daniel.abrantes@gmail.com';
		$subject='teste subject';
		$body='teste body';
		Email::send($from,$to,$subject,$body);
	}
}
$teste=new Test();