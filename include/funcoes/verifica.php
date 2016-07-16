<?php

if (!isset($_SESSION)) {
    session_start();
}
if (!isset($_SESSION["SessionId"])) {
    if (!isset($_SESSION["erro"])) {
        $_SESSION["erro"] = "erro_sessao";
    }
    $smarty->assign('logado', 'NAO');
    $esta_logado = "NAO";
    $smarty->assign('nivel', 'NI');
    $local = 0;
} else {
    // autentica o usuario e passa variaveis para o .tpl
    $smarty->assign('login', $_SESSION["usuario"]);
    $nivel = $_SESSION['nivel'];
    $esta_logado = "SIM";
}

// se não existe nenhum usuario logado, manda para a tela de login
if ($esta_logado == "NAO") {
    // verifica se houve erro no login
    if ($_SESSION["erro"] == "erro") {
        $smarty->assign("erro", "Usuario ou senha não correspondem");
    } else {
        $smarty->assign("erro", "&nbsp;");
    }
    unset($_SESSION["erro"]); // destroi a session do erro

    // chama a tela de login caso não houver session estartada
    $smarty->assign("titulo", "CadVisiOn - Login");
    $smarty->assign("conteudoLogin", "login/login.tpl");
    $smarty->display("layout_login.tpl");
}
?>
