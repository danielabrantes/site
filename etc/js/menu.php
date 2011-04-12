<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/common/Init.php';
//Init::getInstance(producao);
Init::gzip();
Init::setCache();
header("content-type: text/javascript; charset: UTF-8");
echo file_get_contents('js.js');
