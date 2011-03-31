<?php

require_once('common/common.php');
/*if (isset($_POST['esqueciSenha'])) {
    $user = User::verificaExistenciaDeEmail($_POST['esqueciSenha']);
    $idUtilizador = $user->id;
    $email = $user->email;
    if ($idUtilizador) {
        //$senha=User::geraPass($idUtilizador);
        User::enviaEmail($idUtilizador);
        //$DbSite->begin();
        $sql = 'insert into site.esqueciSenha(CliNumero,email,data) values(' . $idUtilizador . ',' . $DbSite->quote($_POST['esqueciSenha']) . ',' . $DbSite->quote(date('Y-m-d H:i:s')) . ');';
        $result = $DbSite->query($sql);
        if ($result) {
            $DbSite->commit();
        } else {
            $DbSite->rollback();
        }
        $smarty->assign('mensagem', 'Enviado com sucesso para :<a href="mailto: ' . $_POST['esqueciSenha'] . '">' . $_POST['esqueciSenha'] . '</a>');
        $smarty->assign('imagem', 'certo.jpg');
    } else {
        $smarty->assign('mensagem', 'O email não se encontra na base de dados da MoneyOne');
        $smarty->assign('imagem', 'errado.jpg');
    }
}*/
$smarty->assign('esqueciSenha', 1);
$view->display();