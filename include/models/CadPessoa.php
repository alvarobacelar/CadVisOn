<?php
require_once("../models/ManipulateData.php");

class CadastraPessoa {

    private $nome;
    private $rg;
    private $cpf;
    private $sexo;
    private $uf;
    private $cidade;
    private $telefone;
    private $endereco;
    private $cep;
    private $bairro;
    private $numero;
    private $email;
    private $observacao;
    private $foto;
    private $veiculo;
    private $placa;

    // FUNCAO QUE SETA TODOS AS VERIAVEIS CRIADAS ANTERIORMENTE
    function setVis($prop, $value) {
        $this->$prop = $value;
    }

    // FUNCAO DE CADASTRO DE PESSOA
    function cadPessoa() {

        $db = new ManipulateData();

        $nome = $this->nome;
        $rg = $this->rg;
        $cpf = $this->cpf;
        $sexo = $this->sexo;
        $uf = $this->uf;
        $cidade = $this->cidade;
        $telefone = $this->telefone;
        $endereco = $this->endereco;
        $cep = $this->cep;
        $bairro = $this->bairro;
        $numero = $this->numero;
        $email = $this->email;
        $obs = $this->observacao;
        $foto = $this->foto;
        $veiculo = $this->veiculo;
        $placa = $this->placa;



        $db->setCampoTable("cpf");

        $db->setTable("pessoa"); // SETANDO A TABELA A SER INSERIDA OS ATRIBUTOS

        if ($db->getDadosDuplicados($cpf) == "0") {

            // SETANDO OS CAMPOS NO BANCO DE DADOS A SEREM INSERIDOS OS ATRIBUTOS
            $db->setCamposBanco("nome, rg, sexo, cpf, cidade, uf, telefone, endereco, cep, bairro, numero, email, obs, foto, veiculo, placa");
            // SETANDO OS VALORES A SEREM INSERIDOS NO BANCO DE DADOS
            $db->setDados("'$nome','$rg','$sexo','$cpf','$cidade','$uf','$telefone','$endereco','$cep','$bairro','$numero','$email', '$obs', '$foto', '$veiculo', '$placa'");
            // CHAMANDO A FUNCAO DE INSERSÃO NO BANCO DE DADOS
            $db->insert();

            $sucesso = $db->registros_afetados(); // PASSA PARA A VARIAVEL UM BOOLEAN DE REGISTRO AFETADOS
            // RETORNA UMA BOOLEAN COM O STATUS DA GRAVAÇÃO
            return $sucesso;
        } else {
            return $sucesso;
        }
    }

}
