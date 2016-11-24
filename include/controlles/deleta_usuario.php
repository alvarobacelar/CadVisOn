<?php
include "../models/ManipulateData.php";

/* * *******************************************
 * ** EXCLUSÃO DE USUARIO
 * ******************************************** */

$del = new ManipulateData();
$del->setTable("usuario"); // SETANDO A TABELA QUE SERÁ EXCLUIDO O USUARIO
$del->setCamposBanco("status=0"); // SETANDO O ATRIBRUTO A SER MODIFICADO NO BANCO
$del->setCampoTable("id_usuario"); // SETANDO A ID CORRESPONDENTE A EXCLUSÃO DO BANCO DE DADOS
$del->setValueId($_GET["id"]);
$del->update(); // FAZENDO A MUDANÇA NO BANCO DE DADOS, DO STATUS DO USUARIO. ASSIM O USUARIO APARECERÁ COMO EXCLUIDO

// ESTARTANDO A SESSION PARA FREEDBACK 
session_start();
$_SESSION["excluir"] = "SIM";
header("Location: ../../cadastra_novo.php");

