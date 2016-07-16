<?php

require_once "./config/config.php";
require_once "./include/funcoes/verifica.php";
require_once './include/models/LoginSistema.php';
require_once "./include/models/ManipulateData.php";

$logar = new LoginSistema();

$login = trim(addslashes($_POST['login']));
$senha = trim(addslashes($_POST['senha']));
$senha = md5($senha); // criptografando a senha de login

$logar->autentica($login, $senha);
