<?php

include "../models/ManipulateData.php";

$del = new ManipulateData();
$del->setTable("visitado"); // SETANDO A TABELA QUE SERÁ EXCLUIDO O USUARIO
$del->setCampoTable("id_visitado"); // SETANDO A ID CORRESPONDENTE A EXCLUSÃO DO BANCO DE DADOS
$del->setValueId($_GET["id"]);
$del->delete(); // FAZENDO A MUDANÇA NO BANCO DE DADOS, DO STATUS DO USUARIO. ASSIM O USUARIO APARECERÁ COMO EXCLUIDO

// ESTARTANDO A SESSION PARA FREEDBACK 
session_start();
$_SESSION["excluir"] = "SIM";
header("Location: ../../cad_visitado.php");