<?php
/***********************************
 * ARQUIVO DE IMPRESSAO DE RELATORIO
 ***********************************/

require_once ("./PHPjasperXML/class/fpdf/FPDF.php");
require_once ("./PHPjasperXML/class/PHPJasperXML.inc");
require_once ("./PHPjasperXML/setting.php");

$xml = simplexml_load_file("../../PHPjasperXML/relatorio_cadvision.jrxml"); // ARQUIVO CONFIGURADO DO IREPORT

$PHPjasperXML = new PHPJasperXML();

$PHPjasperXML->debugsql=false;

$descricao = $_GET['descricao']; // RECEBE O PARAMETRO POR GET

$PHPjasperXML->arrayParameter=array("descricao"=>$descricao);

$PHPjasperXML->xml_dismantle($xml);

$PHPjasperXML->connect($server, $user, $pass, $db);

$PHPjasperXML->transferDBtoArray($server, $user, $pass, $db);

$PHPjasperXML->outpage("|");

?>
