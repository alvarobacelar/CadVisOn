<?php

require_once "config/config.php";
require_once "include/funcoes/verifica.php";
require_once "include/models/ManipulateData.php";
require_once "include/models/Main.php";
require_once ("./lib/PdfLib.php"); 

if (isset($_POST["nomeVisitado"])) {

    $relatorio = new ManipulateData();
    $pdf = new PdfLib();
    $mpdf = new mPDF();

    $nomeVisitado = addslashes($_POST["nomeVisitado"]);

    /* GERANDO O RELATORIO EM PDF USANDO mPDF */

    $smarty->assign("pesquisa", $nomeVisitado);
    // chamando a função que faz a busca dos chamados, passando os parametros de dataInicial, dataFinal e seção.
    $relatorio->gerarRelatorioNomeVis($nomeVisitado);
    while ($rel = $relatorio->fetch_object()) {

        $id[] = $rel->id_visita;
        $nome[] = $rel->nome;
        $hora[] = $rel->visitante_hora;
        $data[] = $relatorio->formataData($rel->visitante_data);
        $saida[] = $rel->visita_saida;
        $foto[] = $rel->foto;
        $quemVis[] = $rel->visitante_quem_vis;
        $observacao[] = $rel->visitante_obs;
        $status[] = $rel->status;

        $smarty->assign("id", $id);
        $smarty->assign("hora", $hora);
        $smarty->assign("nome", $nome);
        $smarty->assign("foto", $foto);
        $smarty->assign("data", $data);
        $smarty->assign("saida", $saida);
        $smarty->assign("quemVis", $quemVis);
        $smarty->assign("observacao", $observacao);
        $smarty->assign("status", $status);
    }

//            $smarty->display('paginas/relatorio.tpl');
    $pdf->WriteHTML($smarty->fetch('paginas/relatorio_nome_visitado.tpl'));
    $pdf->Output();
    exit;
} else {
    // se nenhuma data for definida será enviado para uma pagina de erro com uma session mostrando qual foi o erro
    $_SESSION["erro"] = "Escolha a data inicial e a data final para imprimir o relatorio";
    header("Location: erro404.php");
    exit();
}