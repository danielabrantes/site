<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Mensagem
 *
 * @author pedro
 */
class Mensagem {

    private $mensagem = null;
    private static $_instance;

    public function getMensagem() {
        return $this->mensagem;
    }

    public function setMensagem($mensagem) {
        $this->mensagem = $mensagem;
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

    public function getFiles() {
        return $this->files;
    }

    public function putFiles($var) {
        array_push($this->files, $var);
    }

}

?>
