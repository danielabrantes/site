<?php
function printArray($result) {
    echo '<pre>';
    print_r($result);
    echo '</pre>';
}
function valida_email($email) {
    return eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email);
}

function getCambio() {
    global $DbSite;
    $sql = 'select valCambio as cambio from webportalmex.cambio where idcambio=1;';
    $result = $DbSite->getall($sql);
    $cambio=$result[0]->cambio;
    escreveCacheManifest($cambio);
    return $cambio;
}
function escreveCacheManifest($valor){
    $data=file_get_contents($_SERVER['DOCUMENT_ROOT'].'/cache.manifest.source');
    $data="CACHE MANIFEST\r\n"."#version ".$valor."\r\n".$data;
    file_put_contents($_SERVER['DOCUMENT_ROOT'].'/cache.manifest', trim($data));
}