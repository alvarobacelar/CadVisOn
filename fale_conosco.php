<?php

require_once "config/config.php";


$smarty->assign("titulo", "CadVisiOn - Fale Conosco");
session_start();

// VERIFIACA SE EXISTE UMA SESSION CRIADA, CASO O USUARIO TENHA ENVIADO O CONTATO
if (isset($_SESSION['contato'])) {
    $smarty->assign("contato", "Seu formulario foi enviado com sucesso, aguarde o retorno");
} else {
    $smarty->assign("contato", "&nbsp;");
}
unset($_SESSION['contato']);
// FIM DA VERIFICAÇÃO DE ENVIO DE FORMULARIO

if (isset($_SESSION['nivel'])) {
    $smarty->assign("menu", $_SESSION['nivel']); // DEFINE O MENU A SER MOSTADO NA LAYOUT.TPL
    $smarty->assign("login", $_SESSION['usuario']); // MOSTRA QUAL USUARIO ESTÁ LOGADO
    $smarty->assign("local", "<a href='/cadvision'>Home</a> > Fale Conosco");
} else {
    $smarty->assign("local", "<a href='/cadvision'>Login</a> > Fale Conosco");
}


$smarty->assign("conteudo", "paginas/fale_conosco.tpl"); // PAGINA FALE CONOSCO

$smarty->display("layout.tpl");
?>
