<?php

require_once "../models/CadVisita.php";

$novaVisita = new CadVisita();

session_start();
// RECEBENDO OS VALORES DO FORMULARIO DE CADASTRO DE VISITA VIA POST
$idPessoa = $_SESSION["id_pessoa"];
$quemVis = trim(addslashes($_POST['quemVis']));
$obs = trim(addslashes($_POST['obs']));
$cracha = trim(addslashes($_POST['cracha']));


if (isset($quemVis) && isset($obs)) {

// PASSANDO OS VALORES RECEBIDOS POR POST PARA A CLASSE CADVISITA PARA FAZER O CADASTRO DA VISITA NO BD
    $novaVisita->setVisita("idPessoa", $idPessoa);
    $novaVisita->setVisita("quemVis", $quemVis);
    $novaVisita->setVisita("obs", $obs);
    $novaVisita->setVisita("cracha", $cracha);

// CHAMA A FUNCAO DE CADASTRO DE VISITA DEPOIS DE TER RECEBIDO TODOS OS PARAMETROS
    $novaVisita->cadNovaVisita();

    unset($_SESSION["id_pessoa"]);
    unset($_SESSION["nomePessoa"]);

// CRIA UMA SESSION PARA MOSTRAR QUE A VISITA FOI CADASTRADA
    $_SESSION['cadVisita'] = "OK";
    unset($_SESSION["visi"]);
    header("location: ../../cad_visita.php");
    exit();
} else {
    $_SESSION['cadVisita'] = "NAO";
    header("location: ../../cad_visita.php");
    exit();
}
?>
