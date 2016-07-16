<?php

require_once "ManipulateData.php";

/*
 * Classe de cadastro de visita
 * Versao 1.0
 * Data 25/05/2013
 */

/*
 * @author Álvaro Bacelar
 */

class CadVisita {

    private $quemVis;
    private $obs;
    private $idPessoa;
    private $cracha;
    private $veiculo;
    private $placa;

    function setVisita($prop, $valor) {
        $this->$prop = $valor;
    }

    // FUNCAO DE CADASTRO DE VISITA AO BANCO DE DADOS
    function cadNovaVisita() {

        $novVis = new ManipulateData();

        $hora = date("H:i:s");
        $data = date("Y-m-d");
        $quemVis = $this->quemVis;
        $obs = $this->obs;
        $idPessoa = $this->idPessoa;
        $status = 1;
        $cracha = $this->cracha;
        $veiculo = $this->veiculo;
        $placa = $this->placa;
        

        // SETANDO A TABELA A SER FEITA A INSERÇÃO
        $novVis->setTable("visita");
        // SETANDO OS VALORES DO BANCO DE DADOS
        $novVis->setCamposBanco("visitante_data, visitante_hora, visitante_quem_vis, visitante_obs, id_pessoa, status, cracha, veiculo, placa");
        // SETANDO OS DADOS A SEREM ADICIONADOS AO BANCO DE DADOS
        $novVis->setDados("'$data', '$hora', '$quemVis', '$obs', '$idPessoa', '$status', $cracha, '$veiculo', '$placa'");
        // CHAMANDO A FUNCAO DE INSERÇAO NO BANCO DE DADOS
        $novVis->insert();

        $sucesso = $novVis->registros_afetados(); // PASSA PARA A VARIAVEL UM BOOLEAN DE REGISTRO AFETADOS
        
        // RETORNA UMA BOOLEAN COM O STATUS DA GRAVAÇÃO
        return $sucesso;
    }

}

?>
