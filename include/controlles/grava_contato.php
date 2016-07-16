<?php

require_once("../models/Contato.php");

// CRIANDO AS VARI�VEIS A SEREM UTILIZADAS
$novocontato = new contato;
$novocontato->set('contato_nome', addslashes($_POST["EditNome"]));
$novocontato->set('contato_mail', addslashes($_POST["EditMail"]));
$novocontato->set('contato_assusto', addslashes($_POST["opcao"]));
$novocontato->set('contato_mensagem', addslashes($_POST["Mensagem"]));

$sucesso = $novocontato->salvar();

// SE O CONTATO FOR GRAVADO NO BANCO DE DADOS RETORNA PARA A PAGINA FALE CONOSCO COM UMA SESSION
session_start();
$_SESSION['contato'] = "SIM";
header("location: ../../fale_conosco.php");
exit();
?>

