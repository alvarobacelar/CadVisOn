<?php
require_once ("config/config.php");
require_once ("include/funcoes/verifica.php");
require_once ("include/models/Main.php");


if ($esta_logado == "SIM") {

    $smarty->assign("conteudo", "paginas/erro.tpl");
    $smarty->assign("titulo", "CadVisiOn - ERRO404");
    $smarty->assign("local", "<a href='index.php'>Home</a> > ERRO");
    $smarty->assign("menu", $_SESSION['nivel']);
    $smarty->assign("login", $_SESSION["usuario"]);
    $smarty->display("layout.tpl");
}