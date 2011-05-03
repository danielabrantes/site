<?php

function printArray($result) {
    echo '<pre>';
    print_r($result);
    echo '</pre>';
}

function valida_email($email) {
    //return eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email);

    /**
      Validate an email address.
      Provide email address (raw input)
      Returns true if the email address has the email
      address format and the domain exists.
     */
    $isValid = true;
    $atIndex = strrpos($email, "@");
    if (is_bool($atIndex) && !$atIndex) {
        $isValid = false;
    } else {
        $domain = substr($email, $atIndex + 1);
        $local = substr($email, 0, $atIndex);
        $localLen = strlen($local);
        $domainLen = strlen($domain);
        if ($localLen < 1 || $localLen > 64) {
            // local part length exceeded
            $isValid = false;
        } else if ($domainLen < 1 || $domainLen > 255) {
            // domain part length exceeded
            $isValid = false;
        } else if ($local[0] == '.' || $local[$localLen - 1] == '.') {
            // local part starts or ends with '.'
            $isValid = false;
        } else if (preg_match('/\\.\\./', $local)) {
            // local part has two consecutive dots
            $isValid = false;
        } else if (!preg_match('/^[A-Za-z0-9\\-\\.]+$/', $domain)) {
            // character not valid in domain part
            $isValid = false;
        } else if (preg_match('/\\.\\./', $domain)) {
            // domain part has two consecutive dots
            $isValid = false;
        } else if
        (!preg_match('/^(\\\\.|[A-Za-z0-9!#%&`_=\\/$\'*+?^{}|~.-])+$/', str_replace("\\\\", "", $local))) {
            // character not valid in local part unless
            // local part is quoted
            if (!preg_match('/^"(\\\\"|[^"])+"$/', str_replace("\\\\", "", $local))) {
                $isValid = false;
            }
        }
        // site tem o php antigo
        /*if ($isValid && !(checkdnsrr($domain, "MX") || checkdnsrr($domain, "A"))) {
            // domain not found in DNS
            $isValid = false;
        }*/
    }
    return $isValid;
}

function getCambio() {
    global $DbSite, $language,$smarty;
    $posicao=1;
    $moeda='';
    switch ($language){
    	case 'pt':$posicao=1;$moeda='€';break;
    	case 'es':$posicao=2;$moeda='€';break;
    	case 'en':$posicao=3;$moeda='£';break;
    }
    $smarty->assign('moeda',$moeda);
    $sql = 'select valCambio as cambio from webportalmex.cambio where idcambio='.$posicao.';';
    $result = $DbSite->getall($sql);
    $cambio = $result[0]->cambio;
    $cambio=substr($cambio, 0, 4);
    if (producao) {
        if (escreveCacheManifest($cambio) === false) {
            die('não consigo mudar a cahce');
        }
    }
    return $cambio;
}

function escreveCacheManifest($valor) {
    $data = file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/cache.manifest.source');
    $data = "CACHE MANIFEST\r\n" . "#version " . $valor . "\r\n" . $data;
    return file_put_contents($_SERVER['DOCUMENT_ROOT'] . '/cache.manifest', trim($data));
}