<?php
require_once "config/config.php";
require_once "include/funcoes/verifica.php";
require_once "include/models/conexao.php";


// verifica se existe session
if ($esta_logado == "SIM") {

    
    if ($_SESSION["nivel"] == "Administrador" || $_SESSION["nivel"] == "Supervisor") {

        $smarty->assign("titulo", "CadVisiOn - Cadastro de visitantes");

        $smarty->assign("menu", $nivel); // define que menu mostar no layout.
        $smarty->assign("local", "<a href='home.php'>$nivel</a> > Cadastro de Visitantes"); // define o local onde o usuario está

        

        $smarty->assign("conteudo", "paginas/verifica_vis.tpl"); // PAGINA DE VERIFICAÇÃO DE CPF
        $smarty->display("layout.tpl"); // CHAMANDO O LAYOUT PRINCIPAL
        
    } else {
        header("location: /cadvision");
    }
}
?>