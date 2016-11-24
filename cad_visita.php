<?php

require_once "config/config.php";
require_once "include/funcoes/verifica.php";
require_once "include/models/ManipulateData.php";
require_once "include/models/VerificaVisitante.php";
require_once "include/models/Main.php";

// VERIFICA SE EXISTE USUARIO LOGADO
if ($esta_logado == "SIM") {

    // VERIFICAÇÃO DO NIVEL DE ACESSO DO USUARIO, SOMENTE ADMINISTRADOR E SUPERVISOR PODE CADASTRAR VISITA
    if ($nivel == "Administrador" || $nivel == "Supervisor") {
        
            $main = new Main(); // INSTANCIANDO A CLASSE DE INICIALIZAÇÃO DO SIATEMA
            $main->setNivel($_SESSION['nivel']); // SETANDO O NIVEL DO USUARIO
            $main->setUsuario($_SESSION["usuario"]); // SETANDO O USUARIO
            $main->startCadVisita(); // STARTANDO A FUNCAO DE INICIALIZAÇÃO DO SISTEMA
        
    } else {
        header("location: index.php");
    }
}
