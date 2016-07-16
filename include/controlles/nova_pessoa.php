<?php
require_once ("../models/CadPessoa.php");
require_once ("../models/VerificaVisitante.php");
require_once ("../funcoes/funcoes.php");
session_start();

// INSTANCIANDO O OBJETO PARA CADASTRAR NOVO USUARIO
$novo = new CadastraPessoa();
$verificaVis = new VerificaVisitante();

// PASSANDO OS VALORES RECEBIDOS POR POST PARA UMA VARIAVEL
$nome = trim(addslashes($_POST['nome']));
$rg = trim(addslashes($_POST['rg']));
$cpf = trim(addslashes($_POST['cpf']));
$sexo = trim(addslashes($_POST['sexo']));
$uf = trim(addslashes($_POST['uf']));
$cidade = trim(addslashes($_POST['cidade']));
$veiculo = trim(addslashes($_POST['veiculo']));
$placa = addslashes($_POST['placa']);
$telefone = trim(addslashes($_POST['telefone']));
$endereco = trim(addslashes($_POST['endereco']));
$cep = trim(addslashes($_POST['cep']));
$bairro = trim(addslashes($_POST['bairro']));
$numero = trim(addslashes($_POST['numero']));
$email = trim(addslashes($_POST['email']));
$obeserv = trim(addslashes($_POST['mensagem']));
$foto = $_SESSION["filename"];

// TIRANDO OS CARECTERES, DEIXANDO APENAS NUMEROS
$cpf = $verificaVis->somenteNumeros($cpf);

// SETA OS VALORES RECEBIDOS POR POST
$novo->setVis("nome", $nome);
$novo->setVis("rg", $rg);
$novo->setVis("cpf", $cpf);
$novo->setVis("sexo", $sexo);
$novo->setVis("uf", $uf);
$novo->setVis("cidade", $cidade);
$novo->setVis("telefone", $telefone);
$novo->setVis("veiculo", $veiculo);
$novo->setVis("placa", $placa);
$novo->setVis("endereco", $endereco);
$novo->setVis("cep", $cep);
$novo->setVis("bairro", $bairro);
$novo->setVis("numero", $numero);
$novo->setVis("email", $email);
$novo->setVis("observacao", $obeserv);
$novo->setVis("foto", $foto);

// verificando se o cpf informado é válido
if (validarCPF($cpf)) {
// CHAMA A FUNCAO CADASTRO DE PESSOA
    $novo->cadPessoa();

// BUSCA A PESSOA CADASTRADA E JA MANDA PARA A PAGINA DE CADASTRO DE VISITA COM O ID DA PESSOA CADASTRADA
    $verificaVis->verifUsuario($cpf);
    $_SESSION["visi"] = "cad";
    unset($_SESSION["cpf"]);
    header("location: ../../cad_visita.php");
    
} else{
    $_SESSION["visi"] = "NAO";
    $_SESSION["cpfInvalido"] = "SIM";
    unset($_SESSION["cpf"]);
    header("location: ../../cad_visita.php");
}