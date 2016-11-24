<?php

// faz o redirecionamento para a pagina de cadastro de pessoa

session_start();

$_SESSION["visi"] = "NAO";
unset($_SESSION["cpf"]);
header("location: ../../cad_visita.php");
exit();
