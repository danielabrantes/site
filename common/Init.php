<?php

class Init {

	private static $_instance;
	private static $producao;

	public static function getInstance($producao) {
		if (!(self::$_instance instanceof self)) {
			self::$_instance = new self();
			self::$producao=$producao;
			self::showErrors();
			self::setEncoding();
			self::gzip();
			self::setCache();
			self::setDate();
			//ini_set('expose_php',0);
			//application/x-font-woff
		}
		return self::$_instance;
	}

	// Do not allow an explicit call of the constructor: $v = new Singleton();
	final private function __construct() {

	}

	// Do not allow the clone operation: $x = clone $v;
	final private function __clone() {

	}

	public static function gzip() {
		//echo 'ola';
		ini_set('zlib.output_compression', true);
		ini_set('zlib.output_compression_level', 9);
		ini_set('output_buffering', true);
		ob_start("zlib.output_compression");
		ob_implicit_flush(1);
	}

	public static function showErrors() {
		error_reporting(E_ALL | E_STRICT);
		ini_set("display_errors", 1);
	}

	public static function smarty() {
		$path=$_SERVER['DOCUMENT_ROOT'] . '/etc/lib/Smarty-3.0.7/libs/';
		set_include_path(get_include_path() . PATH_SEPARATOR . $path);
		//ini_set('include_path', ini_get('include_path') . ';' . );
		require_once('Smarty.class.php');
		$smarty = new Smarty();
		$smarty->debugging = false;


		if (self::$producao) {
			$smarty->caching = true;
			$smarty->cache_lifetime = -1; //never expires
			$smarty->force_compile = false;
			$smarty->compile_check=false;
		} else {
			$smarty->caching = false;
			$smarty->force_compile = true;
			$smarty->compile_check=true;
		}
		$smarty->security = true;

		//diferentes para cada projecto
		$smarty->compile_dir = getcwd() . '/etc/view_c';
		$smarty->cache_dir = getcwd() . '/etc/cache';

		//Vista diferente para cada classe
		$smarty->template_dir = getcwd() . '/view';
		if (!is_dir(getcwd() . '/view')) {
			mkdir(getcwd() . '/view',0777);
			//echo 'Create template dir in ' . getcwd() . '/view';
		}
		return $smarty;
	}

	public static function setEncoding() {
		header('Content-type: text/html; charset=UTF-8');
		/* Set UTF-8 settings */
		// O php da money ainda é o  5.2.6 não tem o mb_
		//mb_internal_encoding('UTF-8');
		//mb_regex_encoding('UTF-8');
		//mb_http_output('UTF-8');
		//echo 'init';die;
		/* Set ICONV ini settings */
		ini_set('iconv.input_encoding', 'UTF-8');
		ini_set('iconv.output_encoding', 'UTF-8');
		ini_set('iconv.internal_encoding', 'UTF-8');
		/* Set ICONV function settings */
		iconv_set_encoding('input_encoding', 'UTF-8');
		iconv_set_encoding('output_encoding', 'UTF-8');
		iconv_set_encoding('internal_encoding', 'UTF-8');
	}

	public static function setCache() {
		if (self::$producao) {
			$offset = 60 * 60 * 24 * 30;
			$expire = "Expires: " . gmdate("D, d M Y H:i:s", time() + $offset) . " GMT";
			header($expire);
			header('Cache-Control: public');
			header('Cache-Control: max-age=2592000'); /* 30 dias */
			header('Pragma: public');

		} else {
			header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
			header('Cache-Control: no-store, no-cache, must-revalidate');
			header('Cache-Control: post-check=0, pre-check=0', FALSE);
			header('Pragma: no-cache');

		}
	}

	public static function setDate() {
		date_default_timezone_set('Europe/Lisbon');
	}

	public static function setSession() {
		ini_set('session.auto_start',false);
		if(self::$producao){
			session_cache_limiter('public');
		}
		else{
			session_cache_limiter('nocache');
		}

	}
	final public static function setMemoryLimit() {
		ini_set('memory_limit', -1); //sem limite
	}
	final public static function setTimeLimit() {
		set_time_limit(0);
		ini_set('max_execution_time',0);
		ini_set('safe_mode',0);
		
		//ini_set('memory_limit', -1); //sem limite
	}


}