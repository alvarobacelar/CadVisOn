<?php

require_once "config/config.php";
require_once "include/funcoes/verifica.php";
require_once "include/models/ManipulateData.php";
require_once "include/models/Main.php";
require_once "./include/models/Pagination.php";

// SE EXISTIR USUARIO LOGADO ABRE A PAGINA
if ($esta_logado == "SIM") {
    // PAGINA ACESSIVEL APENAS PARA ADMINISTRADOR E SUPERVISOR
    if ($nivel == "Administrador") {
    
        $logUser = new Main();
        $logUser->setNivel($_SESSION['nivel']); // SETANDO O NIVEL DO USUARIO
        $logUser->setUsuario($_SESSION["usuario"]); // SETANDO O USUARIO
        
        $logUser->startLogUser();        
        
    } else {
        header("location: index.php");
    }
}
