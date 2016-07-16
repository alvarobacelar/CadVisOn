<?php
require_once ("config/config.php");
require_once ("include/funcoes/verifica.php");
require_once ("include/models/Main.php");

// VERIFICA SE TEM ALGUM USUARIO LOGADO
if ($esta_logado == "SIM") {
    $main = new Main(); // INSTANCIANDO A CLASSE DE INICIALIZAÇÃO DO SIATEMA
    $main->setNivel($_SESSION['nivel']); // SETANDO O NIVEL DO USUARIO
    $main->setUsuario($_SESSION["usuario"]); // SETANDO O USUARIO

    // VERIFICANDO O NIVEL DE ACESSO
    if ($nivel == "Administrador") {
        $main->startAdmin(); // CHAMANDO A FUNCAO QUE ININIA TODOS OS ATRIBUTOS DE ADMINISTRADOR
    } else
    if ($nivel == "Supervisor") { // CASO FAÇA LOGIN COMO SUPERVISOR
        $main->startSupervis(); // CHAMANDO A FUNCAO QUE INICIA TODOS OS ATRIBUTOS DO SUPERVISOR
    } else
    if ($nivel == "Usuario") { // CASO FAÇO LOGIN COMO USUARIO
        $main->startUsuario(); // CHAMANDO A FUNCAO QUE INIVIA TODOS OS ATRIBUTOS DO USUARIO
    }
}
?>