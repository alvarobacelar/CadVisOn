<?php

require_once("ManipulateData.php");


class Admin {

    var $result;
    private $adm_nome, $adm_login, $adm_senha, $adm_email, $adm_nivel;

    // FUNCAO PARA SETAR TODOS OS VALORES DOS ATRIBUTOS ACIMA
    function set($prop, $value) {
        $this->$prop = $value;
    }

    // FUNCAO SALVAR NOVO USUARIO
    function salvar() {
        $db = new ManipulateData();

        $nome = $this->adm_nome;
        $login = $this->adm_login;
        $senha = $this->adm_senha;
        $email = $this->adm_email;
        $nivel = $this->adm_nivel;
        $status = 1; // ATRIBUI O VALOR DE ATICAÇÃO DO USUARIO
        $data = date("Y-m-d");
        $hora = date("H:i:s");
        $ip = $_SERVER["REMOTE_ADDR"];

        // SETANDO A TABELA A SER ADICIONADO O USUARIO
        $db->setTable("usuario");
        // SETANDO OS CAMPOS DO BANCO DE DADOS A RECEBEREM OS VALORES
        $db->setCamposBanco("nome, login, senha, email, data, hora, ip, status,nivel");
        // SETANDO OS DADOS A SEREM ADICIONADO NO BANCO DE DADOS
        $db->setDados("'$nome', '$login', '$senha', '$email', '$data', '$hora', '$ip', '$status','$nivel'");
        // CHAMANDO A FUNCAO DE INSERÇÃO DO BANCO DE DADOS
        $db->insert();

        $sucesso = $db->registros_afetados();

        return $sucesso;
    }

    function listarUsuario() {
        $busca = new ManipulateData(); // INSTANCIANDO O OBJETO DE MANIPULAÇÃO E SELECAO DO BANCO
        $smarty = new Smarty();

        $busca->setTable("usuario"); // SETANDO A TABELA DE BUSCA
        $busca->select(); // REALIZA A PESQUISA NO BANCO DE DADOS COM OS PARAMETROS PASSADOS
        // RETORNA A SELEÇÃO EM UM LOOP
        while ($obj = $busca->fetch_object()) {
            $nome[] = $obj->nome;
            $id[] = $obj->id_usuario;
            $smarty->assign("nomeAdm", $nome);
            $smarty->assign("idAdm", $id);
        }
    }

}
?>

