<?php

include "../models/VerificaVisitante.php";

$cpf = trim(addslashes($_POST['cpfVerifica'])); // RECEBE O VALOR DO CAMPO CPF PASSADO VIA FORMULARIO

$pesquisa = new VerificaVisitante();

$cpf = $pesquisa->somenteNumeros($cpf); // CHAMA A FUNÇÃO DE RETIRADA DE CARACTERES DO CAMPO RECEBIDO

$pesquisa->verifUsuario($cpf); // MANDA O CPF INFORMADO PARA A FUNÇÃO VERIFICAVISITANTE($CPF)

?>
