<?php

require_once("../models/ManipulateData.php");
session_start();

$update = new ManipulateData();

$idPessoa = addslashes($_POST["id_pessoa"]);
$nome = addslashes($_POST["nome"]);
$rg = addslashes($_POST["rg"]);
$sexo = addslashes($_POST["sexo"]);
$cpf = addslashes($_POST["cpf"]);
$cidade = addslashes($_POST["cidade"]);
$uf = addslashes($_POST["uf"]);
$telefone = addslashes($_POST["telefone"]);
$endereco = addslashes($_POST["endereco"]);
$cep = addslashes($_POST["cep"]);
$bairro = addslashes($_POST["bairro"]);
$numero = addslashes($_POST["numero"]);
$observacao = addslashes($_POST["mensagem"]);
$veiculo = addslashes($_POST['veiculo']);
$placa = addslashes($_POST['placa']);

$cpf = $update->somenteNumeros($cpf);

// 
if (!isset($_SESSION["filename"])){
    $foto = addslashes($_POST["foto"]);
} else {
    $foto = $_SESSION["filename"];
}



$update->setTable("pessoa");
$update->setCamposBanco("nome='$nome', rg='$rg', sexo='$sexo', cpf='$cpf', cidade='$cidade', uf='$uf', telefone='$telefone', endereco='$endereco', cep='$cep', bairro='$bairro', numero='$numero', obs='$observacao', foto='$foto', veiculo='$veiculo', placa='$placa'");
$update->setCampoTable("id_pessoa");
$update->setValueId($idPessoa);

$update->update(); // alterando os dados do usuario

unset($_SESSION["filename"]);
$_SESSION["cadastro"] = "ALTERADO";
header("Location: ../../pessoas_cadastradas.php");
