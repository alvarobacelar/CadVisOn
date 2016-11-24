<?php

require_once ("../models/ManipulateData.php");

session_start();

// RECEBENDO OS VALORES DO FORMULARIO
$id = addslashes($_POST["id"]);
$nome = addslashes($_POST["nome"]);
$secao = addslashes($_POST["secao"]);

$alteraVisitado = new ManipulateData();

// SETANDO OS VALORES PRA FAZER A ALTERAÇÃO NO BANCO DE DADOS
$alteraVisitado->setTable("visitado");
$alteraVisitado->setCamposBanco("visitado_nome = '$nome', visitado_secao = '$secao'");
$alteraVisitado->setCampoTable("id_visitado");
$alteraVisitado->setValueId($id);

// SE OS VALORES NÃO ESTIVEREM VAZIOS, É FEITO A ALTERAÇÃO NO BANCO DE DADOS
if ($nome != "" && $secao != "") {

    $alteraVisitado->update();
    $_SESSION["visitado"] = "ALTERADO";
    header("location: ../../cad_visitado.php");
    exit();
    
} else { // SE OS VALORES ESTIVEREM VAZIOS, É REDIRECIONADO PARA A PAGINA DE CADASTRO COM O FREEADBAK COM ERRO 
    $_SESSION["visitado"] = "NAO";
    header("location: ../../cad_visitado.php");
    exit();
}