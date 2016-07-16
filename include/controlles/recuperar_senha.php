<?php
include "../models/ManipulateData.php";

/* 
 * **************************************
 * ARQUIVO DE RECUPERAÇÃO DE SENHA
 * **************************************
 */

$recSenha = new ManipulateData();

$recSenha->setTable("usuario"); // SETANDO A TABELA DE BUSCA

$recSenha->setCampoTable("login"); // SETANDO O PRIMEIRO VALOR A SER PESQUISADO
$recSenha->setValueId(addslashes($_POST['login'])); // SETANDO O VALOR INFORMADO PELO O USUARIO
$recSenha->setCampoTable2("email"); // SETANDO O SEGUNDO VALOR A SER PESQUISADO
$recSenha->setValueId2(addslashes($_POST['email'])); // RECEBENDO VIA POST O VALOR INFORMADO PELO O USUARIO

$recSenha->selectEspecifi(); // CHAMANDO A FUNÇÃO DE PESQUISA ESPECIFICA

if ($recSenha->registros_retornados()){
    session_start();
    $_SESSION['erro'] = "OK";
    header("location: /cadvision");
    exit();
} else {
    session_start();
    $_SESSION['erro'] = "erro";
    header("location: ../../rec_senha.php");
    exit();
}

?>
