<?php
/* 
 * CONTROLLER DE DESATIVAR VISITA
 * DATA CRIAÇÃO: 11-08-2013
 * AUTOR: ÁLVARO BACELAR
 */

require_once ("../models/ManipulateData.php");

$id = trim(addslashes($_GET['id'])); // RCEBENDO O ID DO VISITANTE A QUAL DESEJA DESATIVAR
$status = 0; // ATRIBUINDO O VALOR DE DESATIVAÇÃO DO VISITANTE
$hora = date("H:i:s"); // SETARÁ A HORA QUE O VISITANTE SAIRÁ DO ESTABELECIMENTO

$altera = new ManipulateData();

// INSTANCIANDO OS VALORES PARA FAZER O UPDATE NA TABELA
$altera->setTable("visita");
$altera->setCamposBanco("visita_saida = '$hora',status='0'");
$altera->setCampoTable("id_visita");
$altera->setValueId("$id");

$altera->update(); // CHAMANDO A FUNÇÃO DE UPDATE, DEPOIS DE TER RECEBIDO TODOS OS VALORES

session_start();
$_SESSION['desativar'] = $id;
header("Location: ../../cad_visita.php");
exit();
?>
