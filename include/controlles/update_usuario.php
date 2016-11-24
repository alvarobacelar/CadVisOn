<?php

require_once("../models/ManipulateData.php");

$idUsuario = addslashes($_GET['idUsuario']);
$nome = trim(addslashes($_POST['nome']));
$login = trim(addslashes($_POST['login']));
$senha = trim(addslashes($_POST["senha"]));
$senha2 = trim(addslashes($_POST["senha2"]));
$email = trim(addslashes($_POST["email"]));
$nivel = trim(addslashes($_POST["nivel"]));

$update = new ManipulateData();

// faz a comparação, se as duas senhas conferirem faz o cadastro
if ($senha == $senha2) {

    $senha = md5($senha); // criptografando a senha
    $update->setTable("usuario");
    $update->setCamposBanco("nome='$nome', login='$login', senha='$senha', email='$email', nivel='$nivel'");
    $update->setCampoTable("id_usuario");
    $update->setValueId($idUsuario);

    $update->update(); // alterando os dados do usuario

    $sucesso = $update->getStatus();

    if ($sucesso == "Alterado com Sucesso!") {
        session_start();
        $_SESSION["cadastro"] = "Usuario alterado com sucesso!";
        header("Location: ../../cadastra_novo.php");
    } else {

        $_SESSION["cadastro"] = "Erro alterar";
        header("Location: ../../cadastra_novo.php");
    }
} else {
    $_SESSION["cadastro"] = "Erro de senha!";
    header("Location: ../../cadastra_novo.php");
    exit();
}

?>
