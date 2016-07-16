<?php

require_once("config/config.php");

$smarty->assign("titulo", "CadVisiOn - Recuperar senha");

session_start();
if (isset ($_SESSION['erro'])){
    $erro = $_SESSION['erro'];
    if ($erro == "erro")
    $smarty->assign("erro", "NAO");
} else {
    $smarty->assign("erro","&nbsp;");
}

$smarty->assign("conteudoLogin", "login/senha.tpl");
$smarty->display("layout_login.tpl");
?>
