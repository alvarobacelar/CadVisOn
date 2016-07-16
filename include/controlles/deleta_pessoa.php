<?php

include "../models/ManipulateData.php";
$id = addslashes($_GET["id"]);

$del = new ManipulateData();
$del->setTable("pessoa"); // SETANDO A TABELA QUE SERÁ EXCLUIDO O USUARIO
$del->setCampoTable("id_pessoa"); // SETANDO A ID CORRESPONDENTE A EXCLUSÃO DO BANCO DE DADOS
$del->setValueId($id);
$del->delete(); // FAZENDO A MUDANÇA NO BANCO DE DADOS, DO STATUS DO USUARIO. ASSIM O USUARIO APARECERÁ COMO EXCLUIDO

// ESTARTANDO A SESSION PARA FREEDBACK 
session_start();
$_SESSION["excluir"] = "SIM";
header("Location: ../../pessoas_cadastradas.php");