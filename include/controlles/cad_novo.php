<?php

require_once("../models/AdminNovo.php");
require_once("../funcoes/funcoes.php");

// CRIANDO AS VARI�VEIS A SEREM UTILIZADAS
$novoadmin = new Admin;

$nome = trim(addslashes($_POST['nome']));
$login = trim(addslashes($_POST['login']));
$senha = trim(addslashes($_POST["senha"]));
$senha2 = trim(addslashes($_POST["senha2"]));
$email = trim(addslashes($_POST["email"]));
$nivel = trim(addslashes($_POST["nivel"]));

// faz a comparação, se as duas senhas conferirem faz o cadastro
if ($senha == $senha2) {

    $senha = md5($senha); // criptografando a senha
    $novoadmin->set('adm_nome', $nome);
    $novoadmin->set('adm_login', $login);
    $novoadmin->set('adm_senha', $senha);
    $novoadmin->set('adm_email', $email);
    $novoadmin->set('adm_nivel', $nivel);

    $sucesso = $novoadmin->salvar(); // salvando o novo usuario no banco de dados
    
    if ($sucesso) {
        session_start();
        $_SESSION["cadastro"] = "OK";
        header("Location: ../../cadastra_novo.php");
    } else {

        $_SESSION["cadastro"] = "ERRO";
        header("Location: ../../cadastra_novo.php");
    }
} else {

    $_SESSION["cadastro"] = "ERRO";

    header("Location: ../../cadastra_novo.php");
    exit();
}
?>
