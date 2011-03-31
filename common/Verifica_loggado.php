<?php
/*require_once 'common.php';
require_once 'Transferencia.php';
require_once 'Session.php';*/


if ($user->getlogado()) {
    $smarty->assign('login', $user->getlogado());
} else {
    die('não está logado');
}