<?php

require_once "config/config.php";
require_once "include/funcoes/verifica.php";
require_once "include/models/ManipulateData.php";
require_once "include/models/VerificaVisitante.php";
require_once "include/models/Main.php";

// SE EXISTIR USUARIO LOGADO ABRE A PAGINA
if ($esta_logado == "SIM") {
    // PAGINA ACESSIVEL APENAS PARA ADMINISTRADOR E SUPERVISOR
    if ($nivel == "Administrador" || $nivel == "Supervisor") {

        $pessoasCadastradas = new Main();
        $pessoasCadastradas->setNivel($_SESSION['nivel']); // SETANDO O NIVEL DO USUARIO
        $pessoasCadastradas->setUsuario($_SESSION["usuario"]); // SETANDO O USUARIO
        
        if (isset($_GET["nome"])) { // se existir uma variavel mostra as pessoas pesquisadas

            $pessoasCadastradas->buscaPessoaCad();
            
        } else {
            $pessoasCadastradas->pessoasCadastradas();
        }
    } else {
        header("location: index.php");
    }
}