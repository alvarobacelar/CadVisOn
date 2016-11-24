<?php

require_once ("config/config.php");
require_once ("include/funcoes/verifica.php");
require_once ("include/models/ManipulateData.php");
require_once ("include/funcoes/funcoes.php");
require_once ("include/models/Main.php");

// VERIFICA SE TEM ALGUM USUARIO LOGADO
if ($esta_logado == "SIM") {

    $main = new Main(); // INSTANCIANDO A CLASSE DE INICIALIZAÇÃO DO SIATEMA
    $main->setNivel($_SESSION['nivel']); // SETANDO O NIVEL DO USUARIO
    $main->setUsuario($_SESSION["usuario"]); // SETANDO O USUARIO
    $main->startMensagem(); // STARTANDO A FUNCAO DE INICIALIZAÇÃO DO SISTEMA
    
} else {
    header("location: /cadvision"); // MANDA USUARIO PARA A PAGINA DE LOGIN CASO TENTE ACESSAR ESSA PAGINA
}
?>
