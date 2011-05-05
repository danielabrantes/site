<?php
define('producao', true);

require_once 'Functions.php';
require_once 'Init.php';
Init::getInstance(producao);
$smarty = Init::smarty();

require_once 'Configure.php';
//require_once 'User.php';
require_once 'DbSite.php';
require_once 'DbTuga.php';
//require_once 'Transferencia.php';
require_once 'Mensagem.php';
require_once 'View.php';
require_once 'Email.php';
Init::setSession();
require_once 'Session.php';
$smarty->assign('cambio', getCambio());



//echo $_SERVER['HTTP_USER_AGENT'];

if (producao) {

    if (strpos($_SERVER['HTTP_USER_AGENT'], 'Opera') === 0) {
        $smarty->assign('cache', 1); //para fazer cache
    }
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'AppleWebKit')) {
        $smarty->assign('cache', 1); //para fazer cache
    }
}
//$smarty->assign('cache', 0);

/* memoria e tempo sem limite */
Init::setMemoryLimit();
Init::setTimeLimit();

