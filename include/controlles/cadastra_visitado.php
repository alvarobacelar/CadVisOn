<?php

require_once ("../models/ManipulateData.php");
session_start();
/*
 * CADASATRAR NOVO VISITADO/MILITAR
 * DATA CRIAÇÃO: 05/06/2013
 */

// ATIBUI OS VALORES RECEBIDOS POR POSTE AS VARIAVEIS LOCAIS
$nome = trim(addslashes($_POST["nome"]));
$secao = trim(addslashes($_POST["secao"]));
$status = 1;

$novo = new ManipulateData(); // INSTANCIANDO A CLASSE DE MANUPULAÇÃO NO BANCO

$novo->setCampoTable("visitado_nome");

$novo->setTable("visitado"); // SETANDO A TABELA
// SETANDO OS VALORES NO BANCO QUE RECEBERAO OS DADOS
$novo->setCamposBanco("visitado_nome,visitado_secao,status");
// SETANDO OS DADOS PARA SER INSERIDOS AO BANCO
$novo->setDados("'$nome','$secao','$status'");

// se exixtir uma pessoa já cadastrada com o nome passado não cadastra
if ($novo->getDadosDuplicados($nome) == 1) {

    $_SESSION["visitado"] = "CADASTRADO";
    header("location: ../../cad_visitado.php");
    exit();
} else {
// CHAMANDO A FUNCAO DE INSERÇÃO NO BANCO DE DADOS
    $novo->insert();
// FAZ A VERIFICAÇÃO SE O CADASTRO FOI REALIZADO E PASSA UMA VARIAVEL DE FREDBEEK
    if (isset($_POST["form"])) {
        $_SESSION["visitado"] = "OK";
        header("location: ../../cad_visitado.php");
        exit();
    } else {
        $_SESSION["visitado"] = "OK";
        header("location: ../../cad_visita.php");
        exit();
    }
}


