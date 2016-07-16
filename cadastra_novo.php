<?php

require_once("config/config.php");
require_once("include/funcoes/verifica.php");
require_once("include/models/AdminNovo.php");
require_once ("include/models/Main.php");

// VERIFICA DE O USUÁRIO ESTÁ LOGADO
if ($esta_logado == "SIM") {
    
    // SOMENTE O ADMINISTRADOR PODE ACESSAR ESSA PAGINA
    if ($_SESSION["nivel"] == "Administrador") {

        $main = new Main();
        $main->setNivel($_SESSION['nivel']); // SETANDO O NIVEL DO USUARIO
        $main->setUsuario($_SESSION["usuario"]); // SETANDO O USUARIO

        $main->startNovoUsuario(); // FUNCAO DE INICIALIZAÇÃO DE CADASTRA NOVO USUARIO
    
    } else {
        header("Location: /cadvision"); // SE O NIVEL DO USUARIO NÃO FOR IGUAL A "ADMINISTRADOR" É DIRECIONADO PARA A HOME
        exit();
    }
}
?>
