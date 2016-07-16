<?php

require_once("config/config.php");
require_once("include/funcoes/verifica.php");
require_once("include/models/Main.php");

if ($esta_logado == "SIM") {

    if ($nivel == "Administrador" || $nivel == "Supervisor") {
        
        $start = new Main();
        $start->setNivel($_SESSION['nivel']);
        $start->setUsuario($_SESSION['usuario']);
        $start->alteraMilitar();
    } else {
        header("location: index.php");
    }
}
?>
