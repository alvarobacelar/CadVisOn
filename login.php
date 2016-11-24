<?php

require_once ("config/config.php");
require_once ("include/models/Main.php");

// VERIFICA SE TEM ALGUM USUARIO LOGADO
$main = new Main(); // INSTANCIANDO A CLASSE DE INICIALIZAÇÃO DO SIATEMA
$main->startLogin();

