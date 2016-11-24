<?php

require_once("config/config.php");
require_once("include/funcoes/verifica.php");
require_once("include/models/Main.php");

if ($esta_logado == "SIM") {

    if ($nivel == "Administrador" || $nivel == "Supervisor") {
        $start = new Main();
        $start->relatorios();

    }
}
?>
