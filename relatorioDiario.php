<?php

require_once "config/config.php";
require_once "include/funcoes/verifica.php";
require_once "include/models/ManipulateData.php";
require_once "include/models/Main.php";
require_once ("./lib/PdfLib.php");



$relatorio = new ManipulateData();
$pdf = new PdfLib();
$mpdf = new mPDF();


$dataDiario = date("Y-m-d");

/* GERANDO O RELATORIO EM PDF USANDO mPDF */

$smarty->assign("pesquisa", $relatorio->formataData($dataDiario));
// chamando a função que faz a busca dos chamados, passando os parametros de dataInicial, dataFinal e seção.
$relatorio->gerarRelatorioDiario($dataDiario);
while ($rel = $relatorio->fetch_object()) {

    $id[] = $rel->id_visita;
    $nome[] = $rel->nome;
    $foto[] = $rel->foto;
    $hora[] = $rel->visitante_hora;
    $data[] = $relatorio->formataData($rel->visitante_data);
    $saida[] = $rel->visita_saida;
    $quemVis[] = $rel->visitante_quem_vis;
    $observacao[] = $rel->visitante_obs;
    $status[] = $rel->status;

    $smarty->assign("id", $id);
    $smarty->assign("hora", $hora);
    $smarty->assign("foto", $foto);
    $smarty->assign("nome", $nome);
    $smarty->assign("data", $data);
    $smarty->assign("quemVis", $quemVis);
    $smarty->assign("observacao", $observacao);
    $smarty->assign("saida", $saida);
    $smarty->assign("status", $status);
}

//            $smarty->display('paginas/relatorio.tpl');
$pdf->WriteHTML($smarty->fetch('paginas/relatorio_diario.tpl'));
$pdf->Output();
exit;
