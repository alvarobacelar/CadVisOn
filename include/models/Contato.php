<?php
require_once("ManipulateData.php");
require_once "../funcoes/funcoes.php";

class Contato {

    var $result;
    private $contato_nome, $contato_mail, $contato_assusto, $contato_mensagem;

    function set($prop, $value) {
        $this->$prop = $value;
    }

    function salvar() {
        $db = new ManipulateData();

        $nome = $this->contato_nome;
        $email = $this->contato_mail;
        $assunto = $this->contato_assusto;
        $mensagem = $this->contato_mensagem;
        $status = 1;
        $data = formata_data_db(date("Y-m-d"));
        $hora = date("H:i:s");
        $ip = $_SERVER["REMOTE_ADDR"];

        // SETANDO A TABELA DE CONTATO
        $db->setTable("contato");
        // SETANDO OS CAMPOS DO BANCO DE DADOS A SEREM INSERIDOS OS DADOS
        $db->setCamposBanco("contato_nome, contato_email, contato_assunto, contato_mensagem, contato_data, contato_hora, contato_ip, status");
        // SETANDO OS DADOS A SEREM INSERIDOS NO BANCO DE DADOS
        $db->setDados("'$nome', '$email','$assunto','$mensagem','$data','$hora','$ip','$status'");
        // CHAMANDO A FUNCAO DE INSERSÃO NO BANCO DE DADOS
        $db->insert();

        // PASSA PARA UMA VARIAVEL OS REGISTROS AFETADOS
        $sucesso = $db->registros_afetados();
        $db->fechar($db);

        return $sucesso;
    }

    function formataData($data) {
        list($ano, $mes, $dia) = explode("-", $data);
        return $dia . "/" . $mes . "/" . $ano;
    }

    

}
?>