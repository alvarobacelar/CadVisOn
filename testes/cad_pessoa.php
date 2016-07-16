<?php

require_once "config/config.php";
require_once "include/funcoes/verifica.php";
require_once "include/models/conexao.php";
require_once "include/models/VerificaVisitante.php";

// VERIFICA SE O USUARIO ESTÁ LOGADO
if ($esta_logado == "SIM") {

    // VERIFICA O NIVEL DE ACESSO DO USUARIO
    if ($_SESSION["nivel"] == "Administrador" || $_SESSION["nivel"] == "Supervisor") {

        $smarty->assign("titulo", "CadVisiOn - Cadastro de visitantes"); // TITULO DA PAGINA
        $smarty->assign("menu", $nivel); // DEFINE O MENU A SER MOSTRADO
        // LOCALIZAÇÃO DO USUARIO
        $smarty->assign("local", "<a href='home.php'>$nivel</a> > <a href='ver_cpf.php'> Verifica CPF </a> > Cadastrar Pessoa"); // define o local onde o usuario está
        $smarty->assign("conteudo", "paginas/cad_pessoa.tpl"); // CHAMA A PAGINA DE CADASTRO DE PESSOA

        $smarty->display("layout.tpl"); // CHAMANDO O LAYOUT PRINCIPAL

    // CASO NÃO ESTEJA LOGADO SERÁ DICIONADO PARA A HOME
    } else {
        header("location: /cadvision");
    }
}
?>
