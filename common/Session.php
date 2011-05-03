<?php
session_name('moneyexpress');
session_start();


//Uma unica ligação à base de dados possivel
//Base de dados do site
if (!isset($_SESSION['DbSite'])) {
	$_SESSION['DbSite'] = DbSite::getInstance();
}
$DbSite = $_SESSION['DbSite'];
if ($DbSite->connect(DbServerSite, DbUserSite, DbPassSite, DbNameSite) != TRUE) {
	die('erro na ligação à base de dados site');
}

//Uma unica ligação à base de dados possivel
//Base de dados do site
if (!isset($_SESSION['DbTuga'])) {
	$_SESSION['DbTuga'] = DbTuga::getInstance();
}
$DbTuga = $_SESSION['DbTuga'];
if ($DbTuga->connect(DbServerTuga, DbUserTuga, DbPassTuga, DbNameTuga) != TRUE) {
	die('erro na ligação à base de dados Tuga');
}
//Uma unico utilizador possivel
/*if (!isset($_SESSION['user'])) {
 $_SESSION['user'] = User::getInstance();
 }
 $user = $_SESSION['user'];*/

//Uma unica transferencia possivel
/*
 if (!isset($_SESSION['transferencia'])) {
 $_SESSION['transferencia'] = Transferencia::getInstance();
 }
 $transferencia = $_SESSION['transferencia'];

 */

if (!isset($_SESSION['mensagem'])) {
	$_SESSION['mensagem'] = View::getInstance();
}
$mensagem = $_SESSION['mensagem'];

if (!isset($_SESSION['view'])) {
	$_SESSION['view'] = View::getInstance();
}
$view = $_SESSION['view'];


/*****************************************************************/
$language = isset($_GET['language']) ? $_GET['language'] : null;
if(isset($language))
{}
else{
	if (isset($_SESSION['$language'])) {
		$language=$_SESSION['$language'];
	} else {
		if(is_null($language)){
			if(isset($_COOKIE['language']))
			{
				$language=$_COOKIE['language'];
			}
		}
	}
}
setcookie('language',$language,time()+60);
$_SESSION['$language'] = $language;
$smarty->assign('language', $language);
