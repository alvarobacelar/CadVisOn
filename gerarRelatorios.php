<?php

require_once "config/config.php";
require_once "include/funcoes/verifica.php";
require_once "include/models/ManipulateData.php";
require_once "include/models/Main.php";
require_once ("./lib/PdfLib.php");

// VERIFICA SE EXISTE USUARIO LOGADO
if ($esta_logado == "SIM") {

    // VERIFICAÇÃO DO NIVEL DE ACESSO DO USUARIO, SOMENTE ADMINISTRADOR E SUPERVISOR PODE CADASTRAR VISITA
    if ($nivel == "Administrador" || $nivel == "Supervisor") {

        $main = new Main(); // INSTANCIANDO A CLASSE DE INICIALIZAÇÃO DO SIATEMA
        $main->setNivel($_SESSION['nivel']); // SETANDO O NIVEL DO USUARIO
        $main->setUsuario($_SESSION["usuario"]); // SETANDO O USUARIO
        $main->relNomeVisitante(); // FUNCAO DE INICIALIZAÇÃO DA PÁGINA
        
    } else {
        header("location: /");
    }
}
