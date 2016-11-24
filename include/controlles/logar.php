<?php

require_once ("../models/Conexao.php");

$logar = new Conectar();

$login = trim(addslashes($_POST['login']));
$senha = trim(addslashes($_POST['senha']));
$senha = md5($senha); // criptografando a senha de login

session_start();
$logar->autentica($login, $senha);
?>