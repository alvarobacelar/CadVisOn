<?php

require_once "config/config.php";
require_once "include/funcoes/verifica.php";
require_once "include/models/Main.php";

// SE EXISTIR USUARIO LOGADO ABRE A PAGINA
if ($esta_logado == "SIM") {


    $negado = new Main();
    $negado->setNivel($_SESSION['nivel']); // SETANDO O NIVEL DO USUARIO
    $negado->setUsuario($_SESSION["usuario"]); // SETANDO O USUARIO

    $negado->acesso_negado();
    
}
