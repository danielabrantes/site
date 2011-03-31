<?php

class Referencia {

    public static $entidade = 11401;

    private static function stringToArray(/* string */$numero/* array */) {
        $result = array();
        while ($numero != null) {
            $ultimo_numero = (int) substr($numero, 0, 1);
            $numero = substr($numero, 1);
            array_push($result, $ultimo_numero);
        }
        return $result;
    }

    private static function checkDigit(/* array */$numero/* int */) {
        $w = array(51, 73, 17, 89, 38, 62, 45, 53, 15, 50, 5, 49, 34, 81, 76, 27, 90, 9, 30, 3);
        $p = array();
        for ($i = 0; $i < 20; $i++) {
            $p[$i] = $w[$i] * $numero[$i];
        }
        return 98 - ((array_sum($p)) % 97);
    }

    public static function geraReferencia($referencia, $valor) {
        $referencia = str_pad($referencia, 7, "0", STR_PAD_LEFT);
        $valor = str_pad(((string) $valor * 100), 8, "0", STR_PAD_LEFT);
        return str_pad($referencia . (string) self::checkDigit(self::stringToArray(self::$entidade . $referencia . $valor)), 9, '0', STR_PAD_LEFT);
    }

}