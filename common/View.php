<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Upload
 *
 * @author pedro
 * @uses Smarty
 */
class View {

    private static $_instance;

    public function display($language='') {
        global $smarty/* , $mensagem */;
        $ficheiro = $_SERVER['SCRIPT_NAME'];
        $ficheiro = substr($ficheiro, 0, -4);
        $ficheiro = $ficheiro.$language . '.tpl';

        $ficheiro = substr($ficheiro, 1, strlen($ficheiro));

        //echo $ficheiro;

        /* $smarty->assign('mensagem', $mensagem->getMensagem()); */
        //flush();
        $smarty->display($ficheiro);
    }

    public static function getInstance() {
        if (!(self::$_instance instanceof self)) {
            self::$_instance = new self();
        }

        return self::$_instance;
    }

    // Do not allow an explicit call of the constructor: $v = new Singleton();
    final private function __construct() {

    }

    // Do not allow the clone operation: $x = clone $v;
    final private function __clone() {

    }

}