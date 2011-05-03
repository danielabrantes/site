<?php

require_once('common/common.php');

//printArray($_POST);

function respostaCorrecta() {

    if (
            $_POST['1'] == 'c' and
            $_POST['2'] == 'c' and
            $_POST['3'] == 'c' and
            $_POST['4'] == 'b') {
        return true;
    }
    return false;
}

function colocouEmail() {
    if (
            isset($_POST['email'])
            and
            $_POST['email'] != null
    ) {
        return true;
    }
    return false;
}

function respondeuAoQuiz() {
    if (
            isset($_POST['1']) and
            isset($_POST['2']) and
            isset($_POST['3']) and
            isset($_POST['4']) and
            isset($_POST['email'])
            and !empty ($_POST['email'])
    ) {
        return true;
    }
    return false;
}

function insereEmail() {
    //echo 'insereEmail';
    global $DbSite, $numero;
    $email = $DbSite->quote($_POST['email']);
    $sql = 'insert into site.quiz(email) values(' . $email . ');';
    $result = $DbSite->query($sql);
    //var_dump($result);
    if ($result === false) {
        //echo 'email duplicado';
        return false;
    } else {
        $sql = 'select id from site.quiz where email like ' . $email . ';';
        $result = $DbSite->getall($sql);
    }
    //echo 'numero: '.$result[0]->id;
    return $result[0]->id;
}

if (respondeuAoQuiz()) {
    if (respostaCorrecta()) {
        $smarty->assign('resposta', 'Respostas Correctas');
        if (colocouEmail()) {
            if (valida_email($_POST['email'])) {

                $numero = insereEmail();
                if ($numero === false) {
                    $smarty->assign('resposta', 'Só pode tentar uma vez por email.');
                } else {
                    $smarty->assign('numero', $numero);
                    $texto = 'O seu número da sorte é "' . $numero . '".<br /> Na data do sorteiro irá receber um email com o número vencedor.<br /> Boa Sorte :)';
                    $smarty->assign('texto', $texto);
                }
            } else {
                //echo 'Email inválido';
                $smarty->assign('resposta', 'Email inválido');
                //return true;
            }
        } else {
            $smarty->assign('resposta', 'Introduza um email');
        }
    } else {
        $smarty->assign('resposta', 'Respostas Erradas');
    }
}
else{
     $smarty->assign('resposta', 'Responda ao questionário e insera o seu email');
}
$view->display();