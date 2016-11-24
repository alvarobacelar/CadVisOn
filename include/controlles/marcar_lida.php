<?php

include "../models/ManipulateData.php";

/***************************************
 * MARCAR MENSAGEM DE CONTATO COMO LIDA
 ***************************************/

$marca = new ManipulateData();

$marca->setTable("contato");
$marca->setCamposBanco("status=0");
$marca->setCampoTable("id_contato");
$marca->setValueId($_GET["idContato"]);

$marca->update(); //

// ESTARTANDO A SESSION PARA FREEDBACK
session_start();
$_SESSION["lida"] = $_GET["idContato"];
@header("Location: /cadvision");

?>
